<?php

namespace App\Controllers;

class Live extends BaseController
{
    public function index(): string
    {
        $data = [
			'title' => 'Live Streaming'
		];
        return view('theme/'.getenv('theme.path').'/live/index', $data);
    }
}
