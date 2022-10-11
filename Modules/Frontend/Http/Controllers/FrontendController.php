<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends BaseController
{
    public function index()
    {
        return view('layouts.index');
    }
    public function payrollservice()
    {
        return view('layouts.page.payrollservice');
    }
    public function accountspayable()
    {
        return view('layouts.page.accountspayable');
    }
    public function accountsrecivable()
    {
        return view('layouts.page.accountsrecivable');
    }
    public function virtualcfo()
    {
        return view('layouts.page.virtualcfo');
    }
    public function basservice()
    {
        return view('layouts.page.basservice');
    }
    public function catchupbookkeeping()
    {
        return view('layouts.page.catchupbookkeeping');
    }
    public function accounting()
    {
        return view('layouts.page.accounting');
    }
    public function aboutus()
    {
        return view('layouts.page.aboutus');
    }
    public function testimonial()
    {
        return view('layouts.page.testimonial');
    }
    public function allsoftware()
    {
        return view('layouts.page.allsoftware');
    }
    public function myob()
    {
        return view('layouts.page.myob');
    }
    public function rackon()
    {
        return view('layouts.page.rackon');
    }
    public function xero()
    {
        return view('layouts.page.xero');
    }
    public function saasu()
    {
        return view('layouts.page.saasu');
    }
    public function quickbooksonline()
    {
        return view('layouts.page.quickbooksonline');
    }
}
