<?php

namespace App\Models;
use codeIgniter\Model;

class ZooModel extends Model {
    protected $table = 'Zoologico';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre', 'telefono'];
}