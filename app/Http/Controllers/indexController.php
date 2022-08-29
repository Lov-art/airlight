<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{


    public function index (Request $request,string $lang){
        app() ->setLocale($lang);
        return view('welcome') ;
    }
//    public function get (Request $request,string $lang){
//        app() ->setLocale($lang);
//        $news = DB::table('news')->get();
//        return response()->json($news);
//    }
//    public function put (Request $request,string $lang){
//        app() ->setLocale($lang);
//        DB::table('news')->insert($request->post());
//        return response()->json($request->post());
//    }
//
//    public function test (Request $request){
//        dd($request);
//    }

}
