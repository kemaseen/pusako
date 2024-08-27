<?php

namespace App\Controllers;

class Foto extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'Berita'
		];
        return view('theme/'.getenv('theme.path').'/galery/foto/index', $data);
    }
}
