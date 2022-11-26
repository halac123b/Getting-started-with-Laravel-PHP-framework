<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Tạo ra các role mới
    Role::create([
      "name" => "admin"
    ]);
    Role::create([
      "name" => "user"
    ]);
  }
}
