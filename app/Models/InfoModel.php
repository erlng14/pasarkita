<?php

namespace App\Models;

use CodeIgniter\Model;


class InfoModel extends Model
{
    protected $table         = 'tb_contactinfo';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'alamat',
        'email',
        'telp',
        'map',
    ];
}