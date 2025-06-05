<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function categorypage()
    {
        return view('pages.dashboard.catergory-page');
    }
      public function customerpage()
    {
        return view('pages.dashboard.customer-page');
    }
      public function invoicepage()
    {
        return view('pages.dashboard.invoice-page');
    }
      public function productpage()
    {
        return view('pages.dashboard.product-page');
    }
      public function profilepage()
    {
        return view('pages.dashboard.profile-page');
    }
      public function reportpage()
    {
        return view('pages.dashboard.report-page');
    }
      public function salepage()
    {
        return view('pages.dashboard.sale-page');
    }
}
