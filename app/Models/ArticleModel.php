<?php
namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'article';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'content', 'status', 'author', 'slug', 'create_at', 'tag', 'meta_key', 'meta_desc'];
}