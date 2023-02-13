<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Traits\DisableForeignKey;

class UsersTableSeeder extends Seeder
{
    use TruncateTable;
    use DisableForeignKey;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableforeignkey();
        $this->truncate('users');
          \App\Models\User::factory(10)->create();
        $this->enableforeignkey();  

       


    }
}
