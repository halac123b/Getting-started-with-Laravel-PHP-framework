<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AdminController extends Controller
{
  public function showImportantInfo()
  {
    return "Here is password: abcxyz";
  }
}
