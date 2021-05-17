<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;

class IndexController extends Controller
{
    public function show()
    {
        $sumup = DB::select('select type,count(*) as cnt from counters group by type order by type asc');
        return view('welcome', ['chanting' => $sumup[0]->cnt,'kowtow'=>$sumup[1]->cnt,'veg'=>$sumup[2]->cnt]);
    }

    public function store(Request $request)
    {
        $key=collect($request->all())->except('_token')->keys()[0];
        DB::insert('insert into counters (type) values (?)',[$key]);
        return redirect('/');
    } 
    
    
}