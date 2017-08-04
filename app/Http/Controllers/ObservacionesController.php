<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\observaciones;
use App\Http\Requests;
use Exception;

class ObservacionesController extends Controller
{
	private $path = 'observaciones';
    //
    public function create()
    {
        //
     	return view($this->path.'.create');
    }

    public function store(Request $request)
    {
        //registrar usuario
        try{
        	$user = new observaciones();
        	$user->texto 	= $request->texto;
        	$user->image 	= $request->image;        	
        	$user->save();

        	return redirect()->route('boys.index');
        }
        catch(Exception $e){
        	return "Fatal error - ".$e->getMessage();
        }
    }
}
