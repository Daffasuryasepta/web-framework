<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowFields = [];


    public function getGenre()
    {
        return $this->findAll();
    }
    public function getAllData()
    {
        return $this->findAll();
    }
    public function genre($data)
    {
        return $this->where('genre', $data)->findAll();
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