<?php

namespace App\Models;

use CodeIgniter\Model;


class NewsModel extends Model
{
    protected $table         = 'tb_newslatter';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'email',
    ];
}
