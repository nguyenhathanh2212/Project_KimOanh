<?php
namespace App\Repositories\News;

interface NewsInterface
{
    public function getAllNews();
    public function getNewsByCat($id);
    
   
}
