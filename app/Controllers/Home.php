<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'beranda'
		];
        return view('theme/'.getenv('theme.path').'/index', $data);
    }
}
