<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $film;

    //step 3 construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel();
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
    public function byId()
    {
        dd($this->film->getDataByID(1));
    }
    public function genre()
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