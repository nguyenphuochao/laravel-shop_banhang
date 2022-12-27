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
					<div class="panel-heading">Thêm sản phẩm</div>
				 @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
					<div class="panel-body">
					<form role="form" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="200px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="accessories" class="form-control">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="warranty" class="form-control">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" placeholder="Nhập 0 nếu không có khuyến mãi">
									</div>
									<div class="form-group" >
										<label>Số lượng</label>
										<input required type="number" name="number" class="form-control" >
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>						
										<select  name="status" class="form-control" required>
											<option  value="">Chọn trạng thái</option>
											<option value="1">Còn hàng</option>
											<option value="0">Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Mô tả</label>
										<textarea class="ckeditor" required name="description"></textarea>
									</div>
									<div class="form-group" >
										<label>Thông số kĩ thuật</label>
										<textarea class="ckeditor" required name="parameter"></textarea>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select  name="cate" class="form-control" required>
											<option value="">Vui lòng chọn chọn danh mục</option>
											@foreach($catelist as $cate)
											<option value="{{$cate->id}}">{{$cate->name}}</option>
											@endforeach
					                    </select>
									</div>

									<!-- <div class="form-group">
										<label for="">Màu sắc</label>
										<div class="checkbox">
										
											<label for=""><input type="checkbox" value="red" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:red"></span></label>
											<label for=""><input type="checkbox" value="pink" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:pink"></span></label>
											<label for=""><input type="checkbox"  value="yellow" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:yellow"></span></label>
											<label for=""><input type="checkbox"  value="blue" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:blue"></span></label>
											<label for=""><input type="checkbox"   value="green" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:green"></span></label>
											<label for=""><input type="checkbox"   value="black" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:black"></span></label>
											<label for=""><input type="checkbox"   value="purple" name="checkbox[]"><span class="glyphicon glyphicon-phone" style="font-size:30px;color:purple"></span></label>
										
											
										</div>
									</div>
									<div class="form-group">
										<label for="">Dung lượng</label>
										<div class="checkbox">
										
											<label for=""><input type="checkbox" value="4" name="c[]">4GB</label>
											<label for=""><input type="checkbox" value="8" name="c[]">8GB</label>
											<label for=""><input type="checkbox" value="16" name="c[]">16GB</label>
											<label for=""><input type="checkbox" value="32" name="c[]">32GB</label>
											<label for=""><input type="checkbox" value="64" name="c[]">64GB</label>
											<label for=""><input type="checkbox" value="128" name="c[]">128GB</label>
											<label for=""><input type="checkbox" value="256" name="c[]">256GB</label>
											<label for=""><input type="checkbox" value="512" name="c[]">512GB</label>
											
										
									
										</div>
									</div> -->
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" name="featured" value="1">
										Không: <input type="radio" checked name="featured" value="0">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/product/')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection