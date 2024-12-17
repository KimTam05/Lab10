<?php

namespace App\Http\Controllers;

use App\Models\KNTVattuModel;
use Illuminate\Http\Request;

class KNTVattuController extends Controller
{
    
    public function index(){
        $data = KNTVattuModel::orderBy("created_at","asc")->paginate(10);
        return view("index", ["KNTVattu"=> $data]);
    }
}
