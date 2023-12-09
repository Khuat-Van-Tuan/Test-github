<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorriescontroller extends Controller
{
    public function __construct(Request $request){
        //if($request->is('category')){
            //echo ' xin chào KHUẤT VĂN TUẤN';
        //}
        /*
        Nếu là trang danh sách chuyên mục thì hiển thị ra dòng chữ: xin chào KHUẤT VĂN TUẤN
        */

    }
    //hiển thị danh sách chuyên muc (phương thức get)
    public function index(Request $request){
        // if(isset($_GET['id']))
        // {
        //     echo $_GET['id'];
        // }

        // $path = $request->path();
        // echo $path;

        // $url = $request->url();
        //$fullurl = $request->fullUrl();
        // $method = $request->method();

        //  echo $method;
        // $ip = $request->ip();
        // echo 'IP la : '.$ip;
        // $serve = $request->server();
        // dd($_SERVER );
        // $header = $request->header();
        // dd($header);
        // $input = $request->input();
        // dd($input);
        // $id = Request('id');
        // $id = $request->query('id');
        $query = $request->query();
        

        dd($query);
        //  echo $id;
        
        if($request->isMethod('GET'))
        {echo ' phương thức get';}

        return view('cliens/categories/danhsachsanpham');
    }
    //lấy ra 1 chuyên mục (phương thức get)
    public function getCategory($id){
        return view('cliens/categories/editsanpham');

    }
    //Sửa một chuyên mục (phương thức post)
    public function updadeCategory($id){
        return 'sửa sản phẩm'.$id;

    } 
    //show from thêm dữ liệu (phương thức get)
    public function showFromCategory( Request $request){
        // $path = $request->path();
        // echo $path;
        //$catename = $request->old('tensanpham');
        return view('cliens/categories/form_thembanghi');

    }
    //thêm dữ liệu vào chuyên muc (phương thức post)
    public function addCategory( Request $request){
        // $alldata = $request->all();
        // dd($alldata);
        
        //return redirect(route('category.formaddsanpham'));
        //return 'thêm sản phẩm';
        
        // if($request->isMethod('POST'))
        // {echo ' phương thức POST';}
        //$cateName = $request->tensanpham;
        //dd($cateName);
        if($request->has('tensanpham'))
        {
            $catename = $request->old('tensanpham');
            $request->flash();
            return redirect(route('category.formaddsanpham'));
        }

    }
    //Xóa dữ liệu (phương thức delate)
    public function delateCategory($id){
        return 'Xóa sản phẩm'.$id;

    }

    public function getFile(){
        return view('cliens/categories/file');
    }

    // xử lý lấy thông tin file
    public function handleFile(Request $request){
        //$file = $request->file('photo');
        
        if($request->hasFile('photo')){
            if($request->photo->isValid())
            {
                $file = $request->photo;
                dd($file);
            }
            else
            {
                return 'upload khong thanh cong';
            }
            
        }
        else
        {
            return 'vui llong uploadfile';
        }
        

    }
}
