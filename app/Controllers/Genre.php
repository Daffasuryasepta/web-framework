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
        $data['semuagenre'] = $this->genre->getGenre();
        return view("genre/semuagenre", $data);
    }

}