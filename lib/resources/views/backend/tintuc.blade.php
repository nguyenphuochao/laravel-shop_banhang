@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tin tức</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
          
				<div class="panel panel-warning">
					<div class="panel-heading">Danh sách tin tức</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
							<a href="{{asset('admin/tintuc/add')}}" class="btn btn-primary">Thêm tin</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="15%">Tiêu đề</th>
                                            <th width="35%">Nội dung</th>
                                            <th width="16%">Hình</th>
                                            <th width="5%">Trạng thái</th>
											<th width="5%">Ngày đăng</th>
 				
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                          @foreach($tintuc as $kh)
										<tr>
											<td>{{$kh->id}}</td>
                                            <td>{{$kh->title}}</td>
											<td>{{$kh->content}}</td>
											<td>
												<img height="100" src="{{asset('source/image/tintuc/'.$kh->image)}}" class="thumbnail">
											</td>
                                            <td>

											@if($kh->new==1)	
												{{"Phổ biến"}}
												@else
												{{"Nổi bật"}}
												@endif
												</td>
											<td>{{$kh->created_at}}</td>
                                            
											<td>
			
                                            <a href="{{asset('admin/tintuc/edit/'.$kh->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="{{asset('admin/tintuc/delete/'.$kh->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											<a href="{{asset('admin/tintuc/chi-tiet-tin-tuc/'.$kh->id)}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi tiết</a>
											</td>
										</tr>
                                        
										@endforeach
									</tbody>
								</table>							
							</div>
							<div>{{$tintuc->links("pagination::bootstrap-4")}}</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection