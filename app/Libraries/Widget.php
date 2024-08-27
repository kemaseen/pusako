<?php namespace App\Libraries;

use App\Models\NewsModel;
use App\Models\ArticleModel;
use App\Models\NaskahModel;

class Widget
{

    public function berita(array $params){
        $news = model(NewsModel::class);
        $data['widget'] = $news->where([
			'title <>' => $params['title'],
			'status' => 'published'
		])->paginate($params['limit'], 'news');
        return view('theme/'.getenv('theme.path').'/berita/widget', $data);
    }

    public function article(array $params){
        $article = model(ArticleModel::class);
        $data['widget'] = $article->where([
			'title <>' => $params['title'],
			'status' => 'published'
		])->paginate($params['limit'], 'article');
        return view('theme/'.getenv('theme.path').'/article/widget', $data);
    }

    public function video(){
        $youtube = new \Madcodez\YouTube\YouTube('AIzaSyDiL9nK2qH1-_IIdWuonWra6kaZAy__960');
        $channel = $youtube->channel('UCM0DF4dPo2w7B6JlyYpjZNw', '5');
        $data['widget'] = $channel['content'];
        return view('theme/'.getenv('theme.path').'/video/widget', $data);
    }

    public function naskah(array $params){
        $naskah = model(NaskahModel::class);
        $data['widget'] = $naskah->where([
			'status' => 'published'
		])->paginate($params['limit'], 'naskah');
        return view('theme/'.getenv('theme.path').'/naskah/digital/widget', $data);
    }

}