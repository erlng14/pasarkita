<?php

namespace App\Models;

use CodeIgniter\Model;


class LeasingModel extends Model
{
    protected $table         = 'tb_leasing';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'nama',
        'nohp',
        'email',
    ];
    

}
