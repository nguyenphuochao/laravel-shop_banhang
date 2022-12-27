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
				
				<div class="panel panel-success">
					<div class="panel-heading">Thêm tin tức</div>
					@include('errors.note')
					<div class="panel-body">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Nội dung tóm tắt</label>
										<input required type="text" name="noidung" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình ảnh</label>
										
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="200px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Loại tin</label><br>
										Phổ biến: <input type="radio" name="tintuc" value="1" >
										Nổi bật: <input type="radio" checked name="tintuc" value="0">
									</div>
									<div class="form-group" >
									<label>Mô tả chi tiết</label>
									<textarea class="ckeditor" required name="chitiet"></textarea>
								</div>
								<div class="form-group" >
									<label>Ngưởi viết bài</label>
								<input type="text"  name="tacgia">
							</div>  
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/tintuc/')}}" class="btn btn-danger">Hủy bỏ</a>
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