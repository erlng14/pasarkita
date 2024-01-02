<?php

namespace App\Models;

use CodeIgniter\Model;


class AboutModel extends Model
{
    protected $table         = 'tb_about';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'visi',
        'foto',
        'deskripsi',
        'status'
    ];
    

}
