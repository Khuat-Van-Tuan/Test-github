<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homecontrollers;
use App\Http\Controllers\Categorriescontroller;
use App\Http\Controllers\admin\productscontroller;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getadd'])->name('themsanpham');
//Route::post('/them-san-pham', [HomeController::class, 'postadd']);
Route::put('/them-san-pham', [HomeController::class, 'putadd']);

Route::get('/lay-thong-tin', [HomeController::class, 'getarr']);



Route::get('download-anh', [HomeController::class, 'downloadimage'])->name('download-image');








//start unit 1
// Route::get('/', 'App\Http\Controllers\homecontrollers@index');
// Route::get('/chuyen-muc', [homecontrollers::class, 'chuyenmucmoi']);


// Route::prefix('baitap1')->group(function(){
//     Route::get('/trang-chu', function(){
//         return view('trangchu');
//     });
//     Route::prefix('san-pham')->middleware('checkmasanpham')->group(function(){
//         Route::get('/', function(){
//             return view('sanpham');
//         })->name('sanpham');
//         Route::get('/chi-tiet-san-pham/{masanpham}', function($masanpham=null){
//             //return view('chitietsanpham');
//             return "mã sản phẩm là: ".$masanpham;
//         })->name('sanpham.chitietsanpham');
//     });
    
//     Route::get('/gioi-thieu', function(){
//         return view('gioithieu');
//     })->name('gioithieu');
    
//     Route::get('/lien-he', function(){
//         return view('lienhe');
//     });
    
//     Route::get('/tin-tuc', function(){
//         return view('tintuc');
//     });
// });
//End unit1

//start unit2

//     Route::get('/', function(){
//         return 'k dang nhap duoc';
//     })->name('home');


// Route::get('/',[homecontrollers::class, 'index'])->name('home')->middleware('auth.admin.products');
// Route::get('san-pham/{id}', [homecontrollers::class, 'getProducts']);

// Route::middleware('auth.admin')->prefix('category')->group(function(){
//     //Danh sách chuyên mục
//     Route::get('/',[Categorriescontroller::class, 'index']);

//     //lấy chi tiết 1 chuyên mục (áp dụng sửa bản ghi)
//     Route::get('/edit/{id}',[Categorriescontroller::class, 'getCategory']);

//     //xử lý sửa bản ghi (phương thức post)
//     Route::post('/edit/{id}',[Categorriescontroller::class, 'updadeCategory']);

//     //hiển thị show from
//     Route::get('/add',[Categorriescontroller::class, 'showFromCategory'])->name('category.formaddsanpham');

//     //xử lý thêm bản ghi (phương thức post)
//     Route::post('/add',[Categorriescontroller::class, 'addCategory'])->name('category.addsanpham');

//     //delete bản ghi
//     Route::delete('/delate/{id}',[Categorriescontroller::class, 'delateCategory']);

//     //hiển thị form upload
//     Route::get('/upload',[Categorriescontroller::class, 'getFile']);

//     //xử lý file
//     Route::post('/upload',[Categorriescontroller::class, 'handleFile'])->name('category.upload');


// });


// Route::middleware('auth.admin')->prefix('admin')->group(function(){
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('products', productscontroller::class)->middleware('auth.admin.products');

// });





