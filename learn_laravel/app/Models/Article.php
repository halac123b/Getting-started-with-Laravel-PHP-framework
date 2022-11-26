<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  use HasFactory;
  // Liệt kê các col trong table Model có thể thay đổi
  protected $fillable = [
    "title",
    "content"
  ];
}
