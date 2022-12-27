<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\PageController@getIndex' );

                        //admin                      
Route::group(['namespace'=>'App\Http\Controllers\Admin'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
Route::group(['prefix'=>'resetpasswordadmin'],function(){
    Route::get('/','LoginController@getReset');
    Route::post('/','LoginController@postReset');
});
Route::group(['prefix'=>'resetpass'],function(){
    Route::get('laymatkhauadmin','LoginController@getLayMatKhau')->name('laymatkhauadmin');
    Route::post('laymatkhauadmin','LoginController@postLayMatKhau');
});
                        //danh muc
    Route::get('logout','HomeController@getLogout');
    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
        Route::get('home','HomeController@getHome');
        Route::group(['prefix'=>'category'],function(){
            Route::get('/','CategoryController@getCate');
            Route::post('/','CategoryController@postCate');
            Route::get('edit/{id}','CategoryController@getEditCate');
            Route::post('edit/{id}','CategoryController@postEditCate');
            Route::get('delete/{id}','CategoryController@getDeleteCate');
            
        });                 
                        //product  
    Route::group(['prefix'=>'product'],function(){
        Route::get('/','ProductController@getProduct');
        Route::get('add','ProductController@getAddProduct');
        Route::post('add','ProductController@postAddProduct');

        Route::get('edit/{id}','ProductController@getEditProduct');
        Route::post('edit/{id}','ProductController@postEditProduct');
            
        Route::get('delete/{id}','ProductController@getDeleteProduct');
        Route::get('timkiem','ProductController@getTimKiem');
        });
                        //khachang
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('/','KhachhangController@getKhachhang');
        Route::get('delete/{id}','KhachhangController@getDeleteKhachhang');
        Route::post('binhluan/{id}','PageController@postComment');
        });
                         //banner
    Route::group(['prefix'=>'banner'],function(){
        Route::get('/','BannerController@getBanner');

        Route::get('add','BannerController@getAddBanner');
        Route::post('add','BannerController@postAddBanner');
        
        Route::get('edit/{id}','BannerController@getEditBanner');
        Route::post('edit/{id}','BannerController@postEditBanner');

        Route::get('delete/{id}','BannerController@getDeleteBanner');

        });                 //user
    Route::group(['prefix'=>'user'],function(){
        Route::get('/','UserController@getUser');

        Route::get('add','UserController@getAddUser');
        Route::post('add','UserController@postAddUser');
        
        Route::get('edit/{id}','UserController@getEditUser');
        Route::post('edit/{id}','UserController@postEditUser');

        Route::get('edit/password/{id}','UserController@getEditPasswordUser');
        Route::post('edit/password/{id}','UserController@postEditPasswordUser');

        Route::get('delete/{id}','UserController@getDeleteUser');
         });               //binh luan
     Route::group(['prefix'=>'binhluan'],function(){
        Route::get('/','KhachhangController@getBinhLuan');
        Route::get('delete/{id}','KhachhangController@getDeleteBinhLuan');
            });             //đặt hàng
    Route::group(['prefix'=>'dondathang'],function(){
        Route::get('/','DonDatHangController@getDonDatHang');
        Route::get('delete/{id}','DonDatHangController@getDeleteDonDatHang');
        Route::get('chitiet/{id}','DonDatHangController@getChiTiet');
        Route::post('chitiet/{id}','DonDatHangController@postXuLi');
        
          

    });                   //tin tức
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('/','TinTucController@getTinTuc');

        Route::get('add','TinTucController@getAddTinTuc');
        Route::post('add','TinTucController@postAddTinTuc');
        
        Route::get('edit/{id}','TinTucController@getEditTinTuc');
        Route::post('edit/{id}','TinTucController@postEditTinTuc');

        Route::get('delete/{id}','TinTucController@getDeleteTinTuc');
                        
        Route::get('chi-tiet-tin-tuc/{id}','TinTucController@getXemChiTietTinTuc');

        });             
                         //lienhe
    Route::group(['prefix'=>'lienhe'],function(){
        Route::get('/','KhachhangController@getLienHe');
        Route::get('delete/{id}','KhachhangController@getDeleteLienHe');
    });                   //thông tin cửa hàng
    Route::group(['prefix'=>'thongtincuahang'],function(){
        Route::get('/','ThongTinCuaHangController@getThongTin');
        Route::get('add','ThongTinCuaHangController@getAddThongTin');
        Route::post('add','ThongTinCuaHangController@postAddThongTin');

        Route::get('edit/{id}','ThongTinCuaHangController@getEditThongTin');
        Route::post('edit/{id}','ThongTinCuaHangController@postEditThongTin');

        Route::get('delete/{id}','ThongTinCuaHangController@getDeleteThongTin');
        });   
    Route::group(['prefix'=>'thuoctinh'],function(){
        Route::get('/','ThuocTinhController@getThuocTinh');
        Route::get('add','ThuocTinhController@getAddThuocTinh');
        Route::post('add','ThuocTinhController@postAddThuocTinh');

        // Route::get('edit/{id}','ThuocTinhController@getEditThongTin');
        // Route::post('edit/{id}','ThuocTinhController@postEditThongTin');

        // Route::get('delete/{id}','ThuocTinhController@getDeleteThongTin');
        });    
    Route::group(['prefix'=>'khuyenmai'],function(){
        Route::get('/','KhuyenMaiController@getKhuyenMai');
        Route::get('add','KhuyenMaiController@getAddKhuyenMai');
        Route::post('add','KhuyenMaiController@postAddKhuyenMai');

        Route::get('edit/{id}','KhuyenMaiController@getEditKhuyenMai');
        Route::post('edit/{id}','KhuyenMaiController@postEditKhuyenMai');


        Route::get('delete/{id}','KhuyenMaiController@getDeleteKhuyenMai');
       
        });                                      
    }); 
}); 








//trang chủ
Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'App\Http\Controllers\PageController@getIndex'
]);

Route::get('loaisanpham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'App\Http\Controllers\PageController@getLoaiSanPham'
]);
Route::get('chitiet/{id}',[
    'as'=>'chitiet',
    'uses'=>'App\Http\Controllers\PageController@getChiTiet'
]);
Route::post('chitiet/{id}',[
    'as'=>'binhluan',
    'uses'=>'App\Http\Controllers\PageController@postBinhLuan'
]);
Route::get('add-cart-detail/{id}/{quanty}',[
    'as'=>'add-cart-detail',
    'uses'=>'App\Http\Controllers\PageController@postAddCartDetail'
]);
Route::get('lienhe',[
    'as'=>'lienhe',
    'uses'=>'App\Http\Controllers\PageController@getLienHe'
]);
Route::post('lienhe',[
    'as'=>'lienhe',
    'uses'=>'App\Http\Controllers\PageController@postLienHe'
]);
//tin tức
Route::get('tintuc',[
    'as'=>'tintuc',
    'uses'=>'App\Http\Controllers\PageController@getTinTuc'
]);
//chi tiết tin tức
Route::get('chi-tiet-tin-tuc/{id}',[
    'as'=>'chitiet_tintuc',
    'uses'=>'App\Http\Controllers\PageController@getChiTietTinTuc'
]);
//giới thiệu
Route::get('gioithieu',[
    'as'=>'gioithieu',
    'uses'=>'App\Http\Controllers\PageController@getGioiThieu'
]);
Route::get('dang-ki',[
    'as'=>'dangki',
    'uses'=>'App\Http\Controllers\PageController@getDangki'
]);
// Route::post('dang-ki',[
//     'as'=>'dangki',
//     'uses'=>'App\Http\Controllers\PageController@postDangki'
// ]);
Route::post('dang-ki',[
    'as'=>'dangki',
    'uses'=>'App\Http\Controllers\PageController@postXacNhanDangKi'
]);
Route::get('xac-nhan-tai-khoan',[
    'as'=>'xac_nhan_dang_ki',
    'uses'=>'App\Http\Controllers\PageController@getXacNhanDangKi']);

//đăng nhập
Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\PageController@getLogin'
])->middleware('CheckLogedInUser');
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\PageController@postLogin'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'App\Http\Controllers\PageController@postLogout'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'App\Http\Controllers\PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'App\Http\Controllers\PageController@getDeleteCart'
]);
//view cartupdate
Route::get('view-cart',[
    'as'=>'view-cart',
    'uses'=>'App\Http\Controllers\PageController@getViewCart'
]);
//update cart
Route::get('update-to-cart/{id}/{quanty}',[
    'as'=>'update',
    'uses'=>'App\Http\Controllers\PageController@getUpdateCart'
]);
Route::get('dat-hang',[   
    'as'=>'dathang',
    'uses'=>'App\Http\Controllers\PageController@getCheckout'
])->middleware('CheckLogedOutUser');
Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'App\Http\Controllers\PageController@postCheckout'
]);


Route::get('search',[
    'as'=>'search',
    'uses'=>'App\Http\Controllers\PageController@getSearch'
]);
//Sửa thông tin khách hàng
Route::get('infouser',[
    'as'=>'info_user',
    'uses'=>'App\Http\Controllers\PageController@getInfoUser'
])->middleware('CheckLogedOutUser');
Route::post('infouser',[
    'as'=>'info_user',
    'uses'=>'App\Http\Controllers\PageController@postInfoUser'
]);
Route::get('infouser/doi-mat-khau',[
    'as'=>'doi-mat-khau',
    'uses'=>'App\Http\Controllers\PageController@getChangePassInfoUser'
]);
Route::post('infouser/doi-mat-khau',[
    'as'=>'doi-mat-khau',
    'uses'=>'App\Http\Controllers\PageController@postChangePassInfoUser'
]);


// quên mật khẩu
Route::get('quenmatkhau',[
    'as'=>'quenmatkhau',
    'uses'=>'App\Http\Controllers\PageController@getQuenMatKhau'
]);
Route::post('quenmatkhau',[
    'as'=>'quenmatkhau',
    'uses'=>'App\Http\Controllers\PageController@postQuenMatKhau'
]);
Route::get('resetpassword',[
    'as'=>'laymatkhau',
    'uses'=>'App\Http\Controllers\PageController@getLayMatKhau'])->name('laymatkhau');

Route::post('resetpassword',[
    'as'=>'laymatkhau',
    'uses'=>'App\Http\Controllers\PageController@postLayMatKhau'
]);

