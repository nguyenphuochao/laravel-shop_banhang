@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-info ">
					<div class="panel-heading">Chi tiết đơn hàng</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
					
							<table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{$customerInfoUser->name}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{$customerInfoUser->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{$customerInfoUser->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{$customerInfoUser->address}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$customerInfoUser->email}}</td>
                                </tr>
                                <tr>
                                    <td>Giới tính</td>
                                    <td>{{$customerInfoUser->gender}}</td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>{{$customerInfoUser->note}}</td>
                                </tr>
                                <tr>
                                    <td>Hình thức thanh toán</td>
                                    <td>{{$customerInfo->bill_payment}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" >STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                            </thead>
                            <tbody>
                            @foreach($billInfo as $key => $bill)
                                <tr>   
                                    <td>{{$key+1}}</td>
                                    <td>{{$bill->product_name}}</td>
                                    <td>{{$bill->quantity}}</td>
                                    <td>{{number_format($bill->unit_price)}}</td>
                                </tr>
                                @endforeach
                          
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red">{{number_format($customerInfo->bill_total)}} VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
													
					</div>



                    <div class="col-md-12">
                <form  method="post">
               
                    
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div class="form-inline">
                            <label>Trạng thái giao hàng: </label><br>
                            <select name="status" class="form-control input-inline" style="width: 200px">
                                <option value="0">Chưa giao</option>
                                <option value="1">Đang giao</option>
                                <option value="2">Đã giao</option>
                                 <option value="3">Đã hủy</option>
                               
                            </select>

                            <input type="submit" value="Xử lý" class="btn btn-primary">
                        </div>
                    </div>
                    {{csrf_field()}}
                    </form>
                </div>


						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection