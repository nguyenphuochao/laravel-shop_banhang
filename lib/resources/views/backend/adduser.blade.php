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
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm User</div>
					
					<div class="panel-body">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Nhập Email</label>
										<input required type="email" name="email" class="form-control">
									</div>
									<div class="form-group" >
										<label>Fullname</label>
										<input required type="text" name="fullname" class="form-control">
									</div>
									<div class="form-group" >
										<label>Address</label>
										<input required type="text" name="address" class="form-control">
									</div>
									<div class="form-group" >
										<label>Phone</label>
										<input required type="text" name="phone" class="form-control">
									</div>
									<div class="form-group" >
										<label>Password</label>
										<input required type="password" name="password" class="form-control">
									</div>
									<div class="form-group" >
										<label>Nhập lại password</label>
										<input required type="password" name="repassword" class="form-control">
									</div>
									
									<div class="form-group" >
										<label>Quyền người dùng</label><br>
										Admin: <input type="radio" name="thanhvien" value="1" >
										Thường: <input type="radio" checked name="thanhvien" value="0">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/user/')}}" class="btn btn-danger">Hủy bỏ</a>
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