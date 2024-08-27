<?php

namespace App\Controllers;

use App\Models\EbookModel;

class Ebook extends BaseController
{
    public function index(){
        $data = ['title' => 'Halaman E Book', 'metkey' => 'Halaman E Book', 'metdesc' => 'Halaman E Book'];
        $ebook = model(EbookModel::class);
        $data['ebook'] = $ebook->where('status', 'published')->paginate(18, 'ebook');
	    $data['pager'] 	= $ebook->pager;
        return view('theme/'.getenv('theme.path').'/ebook/index', $data);
    }

    public function show($slug){
        $ebook = model(EbookModel::class);
		$data['ebook'] = $ebook->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
        $data['title'] = @$data['ebook']['title'];
        $data['metkey'] = @$data['ebook']['meta_key'];
        $data['metdesc'] = @$data['ebook']['meta_desc'];
        return view('theme/'.getenv('theme.path').'/ebook/view', $data);
    }
}
