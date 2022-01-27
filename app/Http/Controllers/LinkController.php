<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function dashboard(){
        $res['modul'] = "dashboard";
        $res['url'] = $res['modul'];
        $path = "modul.".$res['modul'].".".$res['modul'];
        return view($path)->with(compact("res"));
    }

    public function parent($name){
        $res['modul'] = explode("-",$name)[0];
        $res['url'] = $name;
        $path = "modul.".$res['modul'].".".$name;
        return view($path)->with(compact("res"));
    }
}
