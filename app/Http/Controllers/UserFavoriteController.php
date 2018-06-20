<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    
    
    
    //store
    public function store(Request $request, $id)
    {
        \Auth::user()->favorite($id);
        return redirect()->back();
    }



    //delete
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
}
