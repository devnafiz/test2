<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Traits\DisableForeignKey;

class CommentSeeder extends Seeder
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
        $this->truncate('comments');
          \App\Models\Comment::factory(2)->create();
        $this->enableforeignkey();  

    }
}
