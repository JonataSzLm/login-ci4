<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipeModel extends Model
{

    protected $DBGroup              = 'default';
    protected $table                = 'team';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectedFields      = true;
    protected $allowedFields        = [
        'name',
        'email',
        'phone',
        'photo'
    ];

    protected $useTimestamps        = false;

}