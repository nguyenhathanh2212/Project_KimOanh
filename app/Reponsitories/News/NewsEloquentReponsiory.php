<?php
namespace App\Repositories\News;

use App\Repositories\EloquentRepository;
use App\Models\Category;
use App\Models\News;

class NewsEloquentReponsiory extends EloquentRepository implements NewsInterface
{
    public function getModel()
    {
        return News::class;
    }

   public function getAllNews(){
   	return $this->model->get();
   }

   public function getNewsByCat($cat_id, $order = "created_at"){
   		if($id == null) return;
   		$news = $this->model->where('category_id', $cat_id)->orderBy($order, "DESC")->get();
   		return $news;
   }

   // chua them dieu kien co id khac voi bai hien tai
   public function getRelateNewsByNews($n, $order = "created_at"){
      $news = $this->model->where('category_id','=' ,$n->category_id)->orderBy($order, "DESC")->get();
      return $news;
   }

}
