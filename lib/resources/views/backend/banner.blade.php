@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lí Banner</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-success">
					<div class="panel-heading">Danh sách banner</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/banner/add/')}}" class="btn btn-primary">Thêm Banner</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="10%">Tên </th>
											<th>Nội dung</th>
											<th width="15%">Hình ảnh</th>
											<th>Link</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($banner as $b)
											<td>{{$b->id}}</td>
											<td>{{$b->name}}</td>
											<td>{{$b->noidung}}</td>
											
											<td>
												<img height="100" src="{{asset('source/image/slide/'.$b->image)}}" class="thumbnail">
											</td>
											<td>{{$b->link}}</td>
											<td>
												<a href="{{asset('admin/banner/edit/'.$b->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/banner/delete/'.$b->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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