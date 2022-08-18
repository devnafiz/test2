<?php

namespace App\Codewolfy;


use Illuminate\Support\Facades\Facade;


/**
 * 
 */
class Customfacade  extends Facade
{
	
	protected static  function getFacadeAccessor(){

		return 'codewolfy';
	}
}