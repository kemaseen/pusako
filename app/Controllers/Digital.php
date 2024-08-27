<?php

namespace App\Controllers;

use App\Models\NaskahModel;

class Digital extends BaseController
{
    public function index(){
        $data = ['title' => 'Halaman Naskah Digital', 'metkey' => 'Halaman Naskah Digital', 'metdesc' => 'Halaman Naskah Digital'];
        $naskah = model(NaskahModel::class);
        $data['naskah'] = $naskah->where('status', 'published')->paginate(12, 'naskah');
	    $data['pager'] 	= $naskah->pager;
        return view('theme/'.getenv('theme.path').'/naskah/digital/index', $data);
    }

    public function show($slug){
        $naskah = model(NaskahModel::class);
		$data['naskah'] = $naskah->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
        $data['title'] = @$data['naskah']['title'];
        $data['metkey'] = @$data['naskah']['meta_key'];
        $data['metdesc'] = @$data['naskah']['meta_desc'];
        return view('theme/'.getenv('theme.path').'/naskah/digital/view', $data);
    }
}
