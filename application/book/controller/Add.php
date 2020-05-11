<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\book\controller;
use think\Controller;
use think\Request;
use think\Db;

class Add extends Controller
{
    public function index()
    {
         return $this->fetch();
    }
    public function insert(Request $req)
    {
        $data=['bookname'=>$req->BookName,
               'bookauthor'=>$req->BookAuthor,
               'bookprice'=>$req->BookPrice,
               'booktype'=>$req->BookType
            ];
        Db::table('booktable')->insert($data);         
    }

}
