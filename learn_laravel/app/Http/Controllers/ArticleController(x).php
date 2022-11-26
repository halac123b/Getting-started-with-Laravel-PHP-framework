<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
  public function view()
  {
    // Tạo obj của model
    $article = new Article();
    // Thêm data vào table
    $article->title = "Bài viết 1";
    $article->content = "Nội dung bài viết 1";
    $article->save(); // Save vào table

    $article = Article::find(1); // Truy xuất row có id = 1 trong table
    echo $article->title;
  }
}
