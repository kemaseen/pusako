<?php
namespace App\Models;

use CodeIgniter\Model;

class EbookModel extends Model
{
    protected $table      = 'ebook';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'content', 'slug', 'file', 'meta_key', 'meta_desc', 'tag', 'status', 'author','created_at'];
}