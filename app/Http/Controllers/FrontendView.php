<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\famille;
use DB;
use Carbon\Carbon;


class FrontendView extends Controller
{
    public function commissionview(){
        $commissions = DB::select('select * from commercants_commission');
        return view('commissions_view',['commissions'=>$commissions]);
        }
}
