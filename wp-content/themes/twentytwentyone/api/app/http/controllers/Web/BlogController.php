<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getEntriesBlog(): array
    {
        $blogs = get_posts(array("category" => 5));
        return $this->response(true, ["type" => "success", "content" => "Done."], $blogs);
    }
}