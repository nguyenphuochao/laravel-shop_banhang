@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lí Khuyến Mãi</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-success">
					<div class="panel-heading">Danh sách khuyến mãi</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/khuyenmai/add/')}}" class="btn btn-primary">Thêm Khuyến Mãi</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="17%">Tên chương trình </th>
											<th width="17%">Quà tặng</th>
											<th>Sản phẩm áp dụng</th>
											<th>Ngày bắt đầu</th>
											<th>Ngày kết thúc</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($km as $key=>$b)
											<td>{{$key+1}}</td>
											<td>{{$b->name}}</td>
											<td>{{$b->gift}}</td>
											<td>{{$b->pro_name}}</td>
											<td>{{$b->start_date}}</td>
											<td>{{$b->end_date}}</td>
											<td>
												<a href="{{asset('admin/khuyenmai/edit/'.$b->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/khuyenmai/delete/'.$b->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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