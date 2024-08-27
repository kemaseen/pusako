<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Article extends BaseController
{
    public function index(){
        $data = ['title' => 'Halaman Artikel', 'metkey' => 'Halaman Artikel', 'metdesc' => 'Halaman Artikel'];
        $article = model(ArticleModel::class);
        $data['article'] = $article->where('status', 'published')->paginate(10, 'article');
	    $data['pager'] 	= $article->pager;
        return view('theme/'.getenv('theme.path').'/article/index', $data);
    }

    public function show($slug){
        $article = model(ArticleModel::class);
		$data['article'] = $article->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
        $data['title'] = @$data['article']['title'];
        $data['metkey'] = @$data['article']['meta_key'];
        $data['metdesc'] = @$data['article']['meta_desc'];
        return view('theme/'.getenv('theme.path').'/article/view', $data);
    }

    public function tag($tag){
        $data = ['title' => 'Halaman Tag Artikel', 'metkey' => 'Halaman Tag Artikel', 'metdesc' => 'Halaman Tag Artikel'];
        $article = model(ArticleModel::class);
        $data['article']   = $article->where('status', 'published')->like('tag', $tag)->paginate(10, 'article');
	    $data['pager']  = $news->pager;
        return view('theme/'.getenv('theme.path').'/article/tag', $data);
    }
}
