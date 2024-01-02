<?php

namespace App\Models;

use CodeIgniter\Model;


class HomepageModel extends Model
{
    protected $table         = 'tb_homepage';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'judul',
        'tagline',
        'background',
        'status'
    ];

}
