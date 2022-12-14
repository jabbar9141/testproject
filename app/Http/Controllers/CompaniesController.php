<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class CompaniesController extends Controller
{
    //

    public function getAllCompanies(Request $request){
        // dd($request);


        if($request){
            $companies = Companie::where('name', 'like', '%' . $request->name . '%')
                                   ->where('cro', 'like', '%' .$request->cro. '%')
                                   ->where('status', 'like', '%'.$request->status.'%')
                                  ->paginate(10);

        }else{
            $companies = Companie::orderBy('id','DESC')->paginate(15);
        }

        return view('companies')->with('companies',$companies);
    }
}
