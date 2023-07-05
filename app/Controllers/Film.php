<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1
use App\Models\FilmModel;
use App\Models\GenreModel;

class Film extends BaseController
{
    //step 2
    protected $film;
    protected $genre;

    //step 3 construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel();
        $this->genre = new GenreModel();
    }

    public function index()
    {
        //step 5
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }
    public function all()
    {
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
    }
    public function genre()
    {
        $data['semuagenre'] = $this->film->getAllDataJoin();
        return view("genre/semuagenre", $data);
    }
    public function add()
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        return view("film/add", $data);
    }
    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'requred' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'requred' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'requred' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover' => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');

        //genreate nama file yang unik
        $imageName = $image->getRandomName();
        //pindahkan file ke direktori penyimpanan
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/film');
    }
    public function update($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        $data["film"] = $this->film->getDataByID($id);
        return view("film/edit", $data);
    }

    public function edit()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film harus diisi'
                ]
            ],
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom durasi harus diisi'
                ]
            ],
            'cover' => [
                'rules' => 'mime_in[cover,image/jpg,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'mine_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'mine_size' => 'Ukuran file pada Kolom Cover melibihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        //ambil data lama
        $film = $this->film->find($this->request->getPost('id'));
        // tambah request id
        $data = [
            'id' => $this->request->getPost('id'),
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'durtion' => $this->request->getPost('duration'),

        ];
        // cek apa ada cover yang diapload
        $cover = $this->request->getFile('cover');
        if ($cover->isValid() && !$cover->hasMoved()) {
            //generate file yang unik
            $imageName = $cover->getRandomName();
            //pindah file ke direktori penyimpanan
            $cover->move(ROOTPATH . 'public/assets/cover/' . $imageName);
            //Hapus file gambar lama
            if ($film['cover']) {
                unlink(ROOTPATH . 'public/assets/cover' . $film['cover']);
            }
            //jika ada tambahkan array cover pada variabel $data
            $data['cover'] = $imageName;


        }
        $this->film->save($data);
        //ubah pesan
        session()->setFlashdata('success', 'Data berhasil diperbarui.');
        return redirect()->to('/film');


    }

    public function destroy($id)
    {
        $this->film->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/film');
    }

    public function genre1()
    {
        dd($this->film->getDataBy("Action"));
    }
    public function order()
    {
        dd($this->film->getOrderBy());
    }
    public function limit()
    {
        dd($this->film->getLimit());
    }
}