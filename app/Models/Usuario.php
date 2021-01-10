<?php namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'usuario_id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'clave'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}