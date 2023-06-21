<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];


    public function getFilm()
    {
        $data = [
            [
                "nama_film" => "Sewu Dino",
                "genre" => "Horor",
                "duration" => "1 jam 43 menit"
            ],
            [
                "nama_film" => "Fast and Forious X",
                "genre" => "action",
                "duration" => "2 jam 9 menit"
            ],
            [
                "nama_film" => "Interstellar",
                "genre" => "Sci-fi",
                "duration" => "2 jam 10 menit"
            ],
            [
                "nama_film" => "Waduh",
                "genre" => "Comedy",
                "duration" => "9 jam 0 menit"
            ],
            [
                "nama_film" => "Spiderman No Way Home",
                "genre" => "action",
                "duration" => "2 jam 30 menit"
            ],
        ];
        return $data;
    }
    public function getAllDataJoin()
    {
        $query = $this->db->table("film")
            ->select("film.*, genre.nama_genre")
            ->join("genre", "genre.id_genre = film.id_genre");
        return $query->get()->getResultArray();
    }
    public function getAllData()
    {
        return $this->findAll();

    }
    public function getDataByID($id)
    {
        return $this->find($id);
    }
    public function getDataBy($data)
    {
        return $this->where('genre', $data)->findAll();
    }
    public function getOrderBy()
    {
        return $this->orderBy('tanggal', 'desc');
    }
    public function getLimit()
    {
        return $this->Limit('5')->findAll();
    }
    // protected $DBGroup          = 'default';
    // protected $table            = 'films';
    // protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    // protected $allowedFields    = [];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}