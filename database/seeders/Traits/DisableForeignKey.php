<?php


namespace Database\Seeders\Traits;
use DB;


/**
 * 
 */
trait DisableForeignKey{

  protected function disableforeignkey(){


  	 DB::statement('SET FOREIGN_KEY_CHECKS=0');  
  }


  protected function enableforeignkey(){


  	  DB::statement('SET FOREIGN_KEY_CHECKS=1'); 
  }


}