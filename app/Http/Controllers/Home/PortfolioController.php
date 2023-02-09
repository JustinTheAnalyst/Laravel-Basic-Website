<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio(){
        
        $allPortfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('allPortfolio'));
    }
}