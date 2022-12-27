@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lí Thuộc Tính</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-success">
					<div class="panel-heading">Danh sách thuộc tính</div>
					<div class="panel-body">
                        
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/thuoctinh/add/')}}" class="btn btn-primary">Thêm Thuộc Tính</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th with="10%">ID</th>
											<th width="30%">Tên thuộc tính </th>
											<th>Giá trị</th>
										
											<th width="20%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										
											<td></td>
											<td></td>
											<td></td>

											<td>
												<a href="" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
									
										
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