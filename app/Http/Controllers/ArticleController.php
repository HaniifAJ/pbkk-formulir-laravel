<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Agus Budi",
            "email" => "agus.budi@its.ac.id",
            "articles" =>  Article::all(),
            "title" => "Halaman Artikel Utama"
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
