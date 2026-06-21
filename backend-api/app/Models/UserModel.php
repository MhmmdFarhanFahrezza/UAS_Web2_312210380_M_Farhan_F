<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'username', 'password', 'token'];

    protected $validationRules = [
        'username' => 'required|is_unique[users.username,id,{id}]',
        'password' => 'required|min_length[6]',
    ];
}
