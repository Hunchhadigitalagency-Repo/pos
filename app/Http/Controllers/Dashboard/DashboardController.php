<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard.home.index');
    }

    function category(){
        return view('dashboard.category.index');
    }

    function sales(){
        return view('dashboard.sales.index');
    }

    function customer(){
        return view('dashboard.customer.index');
    }

    function pos(){
        return view('dashboard.pos.index');
    }

    function product(){
        return view('dashboard.product.index');
    }

    function report(){
        return view('dashboard.report.index');
    }
}
