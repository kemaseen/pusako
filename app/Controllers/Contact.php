<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'Berita'
		];
        return view('theme/'.getenv('theme.path').'/contact/index', $data);
    }
}
