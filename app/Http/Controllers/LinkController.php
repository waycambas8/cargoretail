<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function dashboard(){
        $name = "dashboard";
        return redirect()->route("/dashboard");
    }

    public function parent($name){
        $res['modul'] = explode("-",$name)[0];
        $res['url'] = $name;
        $path = "modul.".$res['modul'].".".$name;
        return view($path)->with(compact("res"));
    }
}
