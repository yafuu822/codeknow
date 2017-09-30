<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

class ArticlesController extends Controller
{
    //
    public function index()
    {
       //キーワード受け取り
        $keyword = \Input::get('keyword');

        $query = Article::query();

        if(!empty($keyword))
        {
            $query->where('title','like','%'.$keyword.'%')->orWhere('body','like','%'.$keyword.'%');
        }
        //全件取得
        //$articles = $query->get();
        //ページネーション
        $articles = $query->orderBy('id','desc')->paginate(10);
        //return view('articles.index')->with('articles',$articles);
        return view('articles.index')->with('articles',$articles)->with('keyword',$keyword);
    }

    public function display()
    {

        //キーワード受け取り
        $keyword = \Input::get('keyword');
        
        $query = Article::query();

        if(!empty($keyword))
        {
            $query->where('title','like','%'.$keyword.'%')->orWhere('body','like','%'.$keyword.'%');
        }

        //全件取得
        //$articles = $query->get();
        //ページネーション
        $articles = $query->orderBy('id','desc')->paginate(10);
        //return view('articles.display')->with('articles',$articles);
        return view('articles.display')->with('articles',$articles)->with('keyword',$keyword);
    }

    public function show($id)
    {

        $query = Article::query();
        //レコードを検索
        //$article = Article::find($id);

        //記事詳細取得
        $article = DB::table('articles')->where('id', $id)->first();
        $articles['article'] = $article;

        //関連記事取得
        $articles['relatedArticles'] = $query->orderBy('id','desc')->paginate(5);
        //$article = $query->where('id',$id);


        //全ての記事取得
        $articles['all'] = DB::table('articles')->get();

        $categories = [];
        for($i=0;$i<count($articles['all']); $i++){
            if(strpos($articles['all'][$i]->category,',')){
                $cate = explode(",", $articles['all'][$i]->category);
                //$test[] = $cate[0];
                
                for($j=0;$j<count($cate);$j++){
                    $categories[] = $cate[$j];
                }
                
            }else{
                $categories[] = $articles['all'][$i]->category;
            }
         }
         $categories2 = array_unique($categories);

$articles['categories'] = $categories2; 
echo "<br><br>";
var_dump($categories);         
         return view('articles.show')->with('articles',$articles);

     }
}
