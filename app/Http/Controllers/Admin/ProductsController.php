<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
    	$data = DB::table('products')->get();
    	return view('admin.product.index')->with('data', $data);
    }
}