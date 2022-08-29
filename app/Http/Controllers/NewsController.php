<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    private $views_path = 'news.';

    public function index (Request $request,string $lang)
    {
        app() ->setLocale($lang);
        return view($this->views_path.'index') ;
    }

    public function create (Request $request,string $lang)
    {
        app() ->setLocale($lang);
        return view('news.create') ;
    }
    public function get (Request $request,string $lang)
    {
        app() ->setLocale($lang);
        $news = DB::table('news')->get();
        return response()->json($news);
    }
    public function put (Request $request,string $lang)
    {


        app() ->setLocale($lang);

        $file = $request->file('img');
        $file_name = md5($file->getClientOriginalName().time());
        $file_name = $file_name.'.'.$file->getClientOriginalExtension();

        $status = false;
//        var_dump($request->post('content'));
//        die();
        if (file_put_contents(public_path('img/news/'.$file_name),$file->getContent())){
            $form_data = [
                'img' =>$file_name,
                'title'=>$request->post('title'),
                'content'=>$request->post('content')
            ];

           $status = DB::table('news')->insert($form_data);

        }

        return response()->json([
            'status' => $status,
        ]);
    }

}
