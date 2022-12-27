@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Khách hàng</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách khách hàng</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
							
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="20%">Tên khách hàng</th>
                                            <th width="10%">Giới tính</th>
                                            <th width="20%">Email</th>
                                            <th width="20%">Địa chỉ</th>
                                            <th width="20%">Phone Number</th>
											<th width="20%">Ngày đặt hàng	</th>										
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                          @foreach($khachhang as $kh)
										<tr>
										
											<td>{{$kh->id}}</td>
                                            <td>{{$kh->fullname}}</td>
											<td>{{$kh->gender}}</td>
                                            <td>{{$kh->email}}</td>
                                            <td>{{$kh->address}}</td>
                                            <td>{{$kh->phone}}</td>
                                            <td>{{$kh->created_at}}</td>
											<td>
			
                                            <a href="{{asset('admin/khachhang/delete/'.$kh->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
                                        
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection