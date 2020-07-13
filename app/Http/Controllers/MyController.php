<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\Http\Request;

class MyController extends Controller
{
    public function Xinchao(){
    	echo "<h1>Xin chào các bạn</h1>";
    }
    //truyền dữ liệu cho controller
    public function Khoahoc($ten){
    	echo "<h3>Khóa học của bạn</h3>".$ten;
    }
}
