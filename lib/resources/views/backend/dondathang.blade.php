@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn đặt hàng</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-info ">
					<div class="panel-heading">Danh sách đơn đặt hàng</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
					
								<table class="table table-bordered" style="margin-top:auto;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="15%">Người đặt hàng</th>
											<th width="20%">Địa chỉ nhận hàng</th>
											<th width="20%">Ngày đặt hàng</th>
											<th>Email</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($customers as $cus)
											<td>{{$cus->id}}</td>
											<td>{{$cus->fullname}}</td>
											<td>{{$cus->address}}</td>
											
											<td>{{$cus->created_at}}</td>
											<td>{{$cus->email}}</td>
											<td>@if($cus->trangthai==0) {{"Chưa giao"}} @elseif($cus->trangthai==1) {{"Đang giao"}} @elseif($cus->trangthai==2) {{"Đã giao"}} @else {{"Đã hủy"}} @endif</td>
											<td>
												<a href="{{asset('admin/dondathang/chitiet/'.$cus->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi tiết</a>
												<a href="{{asset('admin/dondathang/delete/'.$cus->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>
								
								</table>	
													
							</div>
							<div>{{$customers->links("pagination::bootstrap-4")}}</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection