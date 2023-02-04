<?php


namespace Database\Seeders\Traits;
use DB;


/**
 * 
 */
trait TruncateTable{

  protected function truncate($table){


  	DB::table($table)->truncate();
  }


}