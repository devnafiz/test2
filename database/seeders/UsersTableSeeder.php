<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0');  
        $this->truncate('users');
          \App\Models\User::factory(10)->create();

         DB::statement('SET FOREIGN_KEY_CHECKS=1'); 


    }
}
