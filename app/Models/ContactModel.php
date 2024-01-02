<?php

namespace App\Models;

use CodeIgniter\Model;


class ContactModel extends Model
{
    protected $table         = 'tb_contact';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'alamat',
        'email_kontak',
        'telp',
        'map',
        'nama',
        'email',
        'subjek',
        'pesan',
    ];
    
}
