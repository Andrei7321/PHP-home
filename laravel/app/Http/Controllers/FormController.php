<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatModel;

class FormController extends Controller
{
    public function index(Request $request)
    {
    	$tag = $request->input('tag');
    	$urls = [];
    	if (!empty($tag)) {
    		$urls = CatModel::throughTags($tag);
    	}
    	return view('form',['urls'=>$urls]);
    }
}
