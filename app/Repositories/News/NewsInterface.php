<?php
namespace App\Repositories\News;

interface NewsInterface{
	public function getAllNews();
	public function getNewsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC");

}