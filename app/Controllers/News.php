<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function index(){
        $data = ['title' => 'Halaman Berita', 'metkey' => 'Halaman Berita', 'metdesc' => 'Halaman Berita'];
        $news = model(NewsModel::class);
        $data['news'] = $news->where('status', 'published')->paginate(10, 'news');
	    $data['pager'] 	= $news->pager;
        return view('theme/'.getenv('theme.path').'/berita/index', $data);
    }

    public function show($slug){
        $news = model(NewsModel::class);
		$data['news'] = $news->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
        $data['title'] = @$data['news']['title'];
        $data['metkey'] = @$data['news']['meta_key'];
        $data['metdesc'] = @$data['news']['meta_desc'];
        return view('theme/'.getenv('theme.path').'/berita/view', $data);
    }

    public function tag($tag){
        $data = ['title' => 'Halaman Tag Berita', 'metkey' => 'Halaman Tag Berita', 'metdesc' => 'Halaman Tag Berita'];
        $news = model(NewsModel::class);
        $data['news']   = $news->where('status', 'published')->like('tag', $tag)->paginate(10, 'news');
	    $data['pager']  = $news->pager;
        return view('theme/'.getenv('theme.path').'/berita/tag', $data);
    }

    
}