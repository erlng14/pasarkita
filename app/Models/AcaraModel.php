<?php

namespace App\Models;

use CodeIgniter\Model;


class AcaraModel extends Model
{
    protected $table         = 'tb_acara';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'judul',
        'tanggal',
        'foto',
        'deskripsi',
        'status',
        'slug'
    ];
}
