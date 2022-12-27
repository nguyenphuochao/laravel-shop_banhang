@extends('backend.master')
@section('main')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
                        <form id="myform" method="get">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/add')}}" class="btn btn-primary" style="margin-left:100px">Thêm sản phẩm</a>

							<!-- 	<span style="margin-left:250px">
					
							<label for="cars">Lọc sản phẩm:</label>
								<select id="loc">
								<option value="macdinh" selected>Mặc định</option>
								<option value="thuong">Theo sản phẩm thường</option>
								<option value="sale">Theo sản phẩm sale</option>
								
								</select>
						
					</span> -->
			</form>					

								<form class="navbar-form navbar-left" method="get" action="{{asset('admin/product/timkiem')}}">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search" name="key">
											<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<i class="glyphicon glyphicon-search"></i>
											</button>
											</div>
										</div>
										</form>
									<h4 style="font-weight:bold;margin-top:40px">Hiển thị {{$count}} sản phẩm trong danh sách</h4>								
								@if(session('thongbao'))
								 <section class='alert alert-success'>{{session('thongbao')}}</section>
									@endif
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="15%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th width="7%">Sale</th>
											<th>Nổi bật</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($productlist as $pro)
											<td>{{$pro->id}}</td>
											<td>{{$pro->pro_name}}</td>
											<td>@if($pro->promotion_price!=0)
												<p style="text-decoration-line:line-through">{{number_format($pro->unit_price)}} VNĐ</p>
												<p>{{number_format($pro->promotion_price)}} VNĐ</p>
											@else
												{{number_format($pro->unit_price)}} VNĐ
											@endif</td>
											<td>
												<img height="100" src="{{asset('source/image/product/'.$pro->image)}}" class="thumbnail">
											</td>
											<td>{{$pro->name}}</td>
											<td>@if($pro->promotion_price!=0){{"Có"}} @else Không @endif</td>
											<td>@if($pro->new==1)<span style="font-family: wingdings; font-size: 200%;color:#15ea15;">&#10004;</span>
											@else <span style="font-family: wingdings; font-size: 200%;color:red;">&#120;</span>
											 @endif</td>
											<td>
												<a href="{{asset('admin/product/edit/'.$pro->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/product/delete/'.$pro->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>
								
								</table>	
							
							</div>
							<div class="row">{{$productlist->links("pagination::bootstrap-4")}}</div>	
						
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->


	<script src="https://code.jquery.com/jquery-3.6.0.min.js">
				$(document).ready(function() {
		   $('#loc').on('change', function() {
		      document.forms[myform].submit();
		   });
		});
	</script>
    @endsection