<?php
namespace App\Repositories\News;

interface NewsInterface{
    public function getAllNews();

    public function getAllNewPaginate();

    public function getNewsRelateds($typeNew, $news);

    public function getNewsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC");
}
