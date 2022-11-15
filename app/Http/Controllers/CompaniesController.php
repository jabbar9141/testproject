<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class CompaniesController extends Controller
{
    //

    public function getAllCompanies(Request $request){

        $search = $request['search'] ?? "";

        if($search != ""){
            $companies = Companie::where('name', 'like', '%' . $search . '%')->paginate(10);

        }else{
            $companies = Companie::orderBy('id','DESC')->paginate(15);
        }

        return view('companies')->with('companies',$companies)->with('search',$search);
    }
}
