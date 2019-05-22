<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncubatorController extends Controller {
	
	public function show_home(){
		return view( 'incubator.home' )
			->with( 'title', 'ID Incubator' )
			->with( 'page', 'incubator' );
	}
	
}
