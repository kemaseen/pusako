<?php

namespace App\Controllers;

class Video extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Berita'];
        $youtube = new \Madcodez\YouTube\YouTube('AIzaSyDiL9nK2qH1-_IIdWuonWra6kaZAy__960');
        $channel = $youtube->channel('UCM0DF4dPo2w7B6JlyYpjZNw', '10');
        $data['video'] = $channel['content'];
        return view('theme/'.getenv('theme.path').'/galery/video/index', $data);
    }
}
