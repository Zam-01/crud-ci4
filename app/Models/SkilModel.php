<?php

namespace App\Models;

use CodeIgniter\Model;

class SkilModel extends Model
{
    protected $table            = 'skill';
    protected $primaryKey       = 'id_skil';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['Nama_skil'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
    protected array $castHandlers = [];
}
