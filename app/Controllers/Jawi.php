<?php

namespace App\Controllers;

class Jawi extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'Berita'
		];
        return view('theme/'.getenv('theme.path').'/naskah/jawi/index', $data);
    }
}
