<?php

namespace App\Controllers;

class Peneliti extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'Berita'
		];
        return view('theme/'.getenv('theme.path').'/peneliti/index', $data);
    }
}
