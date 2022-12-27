@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liên Hệ</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-warning ">
					<div class="panel-heading">Danh sách liên hệ</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
						
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="20%">Fullname</th>
											<th>Email</th>
											<th width="20%">Tiêu đề</th>
											<th>Nội dung</th>
											<th>Ngày gửi</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										
											@foreach($lienhe as $key=> $c)
											<td>{{$key+1}}</td>
											<td>{{$c->fullname}}</td>
											<td>{{$c->email}}</td>
											<td>{{$c->title}}</td>
                                            <td>{{$c->content}}</td>
											<td>{{date('d/m/Y H:i',strtotime($c->created_at))}}</td>
										
												
											<td>
							
												<a href="{{asset('admin/lienhe/delete/'.$c->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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