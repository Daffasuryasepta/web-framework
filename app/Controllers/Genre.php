<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;

class Genre extends BaseController
{
    protected $genre;

    //step 3 construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this->genre = new GenreModel();
    }

    public function index()
    {
        //step 5
        $data['data_genre'] = $this->genre->getGenre();
        return view("genre/index", $data);
    }
    public function all()
    {
        $data['semuagenre'] = $this->genre->getAllData();
        return view("genre/semuagenre", $data);
    }
    public function genre()
    {
        dd($this->genre->getDataBy("Action"));
    }

}