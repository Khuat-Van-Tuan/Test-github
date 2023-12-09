<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\GitHub;

class HomeController extends Controller
{
    public function index(){
        $this->data['title'] = 'Trang chủ';
        return view('cliens.home', $this->data);


        /*
        $this->data['welcome'] = "học lập trình tại nhà ông sơn <b>kkkk</b>";
        $this->data['content'] = "
        <h3>nhập môn laravel</h3>
        <p>kiến thức 1</p>
        <p>kiến thức 2</p>
        ";
        $this->data['index'] = 1;
        $this->data['number'] = 26102001;
        return view('home', $this->data);
        */
    }
    public function products(){
        $this->data['title'] = 'Sản phẩm';
        return view('cliens.product', $this->data);

    }
    public function getadd(){
        $this->data['title'] = 'Thêm sản phẩm';

        return view('cliens.add', $this->data);
    }
    public function postadd(Request $request){
        dd($request);
    }
    public function putadd(Request $request){
        dd($request);
    }
    public function getarr(){
        $cocntenarr = [
            'Name' => 'Tuấn',
            'Họ' => 'Khuất',
            'academy' => 'Nhà ông sơn'
        ];
        return $cocntenarr;
    }

    public function downloadimage(Request $request){
        if(!empty($request->image)){
            $image = trim($request->image);
            return response()->streamDownload(function () {
                echo GitHub::api('repo')
                            ->contents()
                            ->readme('laravel', 'laravel')['contents'];
            }, 'laravel-readme.md');
        }
    }
}
