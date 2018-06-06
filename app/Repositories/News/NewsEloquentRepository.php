<?php
namespace App\Repositories\News;

use App\Repositories\EloquentRepository;
use App\Models\News;
use Session;
use Auth;
use DB;

class NewsEloquentRepository extends EloquentRepository implements NewsInterface {
    
    public function getModel(){
        return News::class;
    }

    public function getAllNews(){

        return $this->all();
    }

    public function getAllNewPaginate()
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate(config('setting.paginate_new'));
    }

    public function getNewsRelateds($typeNew, $news)
    {
        return $typeNew->news()
            ->where('id', '<>', $news->id)
            ->orderBy('created_at', 'DESC')
            ->limit(config('setting.limit_top_news'))
            ->get();
    }

    public function getNewsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC"){
        if($type_id == null) return ;
        return $this->model->where('type_id', $type_id)->orderBy($sortBy, $order)->limit($limit)->get();
    }
}
