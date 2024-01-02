<?php

namespace App\Models;

use CodeIgniter\Model;


class CTAModel extends Model
{
    protected $table         = 'tb_cta';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'id',
        'judul',
        'deskripsi',
        'link',
        'click',
    ];
}