<?php

namespace App\Controllers;

use App\Models\AksaraModel;

class Aksaraulu extends BaseController
{
    public function index(){
        $data = ['title' => 'Halaman Kamus Aksara Ulu', 'metkey' => 'Halaman Kamus Aksara Ulu', 'metdesc' => 'Halaman Kamus Aksara Ulu'];
        $aksaraulu = model(AksaraModel::class);
        $data['aksaraulu'] = $aksaraulu->where('status', 'published')->paginate(18, 'aksaraulu');
	    $data['pager'] 	= $aksaraulu->pager;
        return view('theme/'.getenv('theme.path').'/naskah/aksaraulu/index', $data);
    }
}
