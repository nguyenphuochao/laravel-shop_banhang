@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-info">
					<div class="panel-heading">Danh sách user</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/user/add')}}" class="btn btn-primary">Thêm user</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="25%">Email</th>
											<th>Fullname</th>
											<th width="30%">Address</th>
											<th>Phone</th>
											<th>Level</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($user as $pro)
											<td>{{$pro->id}}</td>
											<td>{{$pro->email}}</td>
											<td>{{$pro->fullname}}</td>
											<td>{{$pro->address}}</td>
                                            <td>{{$pro->phone}}</td>
											<td>
											@if($pro->quyen==1)
												{{"Admin"}}
											@else
												{{"Thường"}}

											@endif
												</td>
											<td>
												<a href="{{asset('admin/user/edit/'.$pro->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/user/delete/'.$pro->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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