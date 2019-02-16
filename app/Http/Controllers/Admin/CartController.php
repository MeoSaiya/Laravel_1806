<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add($id, Request $request){
    	$id = is_numeric($id) ? $id : 0;
    	$info = DB::table('products')
    				->where('id', $id)
    				->first();
    	if ($info) {
    		//add ro hang
    	}else{
    		return redirect()->route('admin.dashboard');
    	}
    }
}
