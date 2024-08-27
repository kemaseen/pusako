<?php
namespace App\Models;

use CodeIgniter\Model;

class AksaraModel extends Model
{
    protected $table      = 'aksaraulu';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['label', 'file', 'status', 'author','created_at'];
}