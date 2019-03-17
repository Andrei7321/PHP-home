<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatModel;

class FormController extends Controller
{



public function index(Request $request)
    {
        $cat = new CatModel();
        $tag = $request->input('tag');
        if(!isset($tag))
        {
    	
            return view('form');
        }
        else
        {
        $medias = $cat->throughTags($tag);
        return view('form',compact('medias'));
        }
    }




    // public function index(Request $request)
    // {
    // 	$tag = $request->input('tag');
    // 	$urls = [];


    // 	if (!empty($tag)) {
    // 		$urls = CatModel::throughTags($tag);
    		
    //         return view('form',compact('medias'));
    // 	}
    // 	return view('form',['urls'=>$urls]);
    // 	 //это значит что массиву с названием urls придаются следующие данные.


    // }

    // public function com(Request $request)
    // {
    // 	$tag = $request->input('tag');
    // 	$comments = [];
    // 	if (!empty($tag)) {
    // 		$comments = CatModel::throughComments($tag);
    // 	}
    // 	return view('form',['comments'=>$comments]); 

    // }

}
