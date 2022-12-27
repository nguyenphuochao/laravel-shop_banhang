<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
class DonDatHangController extends Controller
{
    //trang xem danh sách khách hàng có đơn đặt hàng
    public function getDonDatHang(){
        $customers = DB::table('users')
        ->join('customer', 'users.id', '=', 'customer.id_user')
        ->select('*')
        ->paginate(10);
                 $this->data['customers'] = $customers;
            
        return view('backend.dondathang',$this->data);
    }
    //trang xóa đơn đặt hàng theo id khách hàng
    public function getDeleteDonDatHang($id){
        Customer::destroy($id);
        return back();
    }
    //xem chi tiết đơn dặt hàng
    public function getChiTiet(Request $req,$id){
                    $customerInfoUser = DB::table('customer')
                    ->join('users', 'customer.id_user', '=', 'users.id')
                    ->select('customer.*','users.fullname as name','users.phone as phone','users.address as address','users.email as email')
                    ->where('customer.id', '=', $id)
                    ->first();
               

                    $customerInfo = DB::table('customer')
                    ->join('bills', 'customer.id', '=', 'bills.id_customer')
                    ->select('customer.*', 'bills.id as bill_id','bills.id_customer as bill_idcus','bills.date_order as bill_order', 'bills.total as bill_total', 'bills.payment as bill_payment', 'bills.note as bill_note')
                    ->where('customer.id', '=', $id)
                    ->first();
                       
                    $billInfo = DB::table('bills')
                        ->join('bill_detail', 'bills.id', '=', 'bill_detail.id_bill')
                        ->leftjoin('products', 'bill_detail.id_product', '=', 'products.id')
                        ->where('bills.id_customer', '=', $id)
                        ->select('bills.*', 'bill_detail.*', 'products.pro_name as product_name')
                        ->get();
                        
                        $this->data['customerInfo'] = $customerInfo;
                        $this->data['billInfo'] = $billInfo;
                        $this->data['customerInfoUser'] = $customerInfoUser;
                      
                        
                  
                return view('backend.chitietdonhang',$this->data);
    }
    //xử lí đơn đặt hàng
    public function postXuLi(Request $req,$id) {
        $trangthai=Customer::find($id);
          $trangthai->trangthai=$req->status;
          $trangthai->save();
          return redirect()->intended('admin/dondathang');            
    }
}
