<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function index (Request $request){
        return view('news.index');
    }
    public function get (Request $request){
        $news = DB::table('news')->get();
        return response()->json($news);
    }
    public function put (Request $request){
        DB::table('news')->insert($request->post());
        return response()->json($request->post());
    }
//    $news=[]
//    public function getOne ( $id){
//        DB::table('news')->find($id);
//        return response()->json($request->post());
//    }
}
