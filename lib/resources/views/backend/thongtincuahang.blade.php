@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lí Thông Tin cửa Hàng</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-success">
					<div class="panel-heading">Danh sách thông tin cửa hàng</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
                            @if(Session::has('mess'))
					<div class="alert alert-success">{{Session::get('mess')}}</div>
					@endif
								<a href="{{asset('admin/thongtincuahang/add/')}}" class="btn btn-primary">Thêm Thông Tin</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="10%">Tiêu đề </th>
											<th width="50%">Mô tả</th>
											<th width="10%">Ngày tạo</th>
											<th>Ngày cập nhật</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($about as $b)
											<td>{{$b->id}}</td>
											<td>{{$b->title}}</td>
											<td>{!!$b->mo_ta!!}</td>
											<td>{{$b->created_at}}</td>
											<td>{{$b->updated_at}}</td>
											<td>
												<a href="{{asset('admin/thongtincuahang/edit/'.$b->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/thongtincuahang/delete/'.$b->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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