@extends('master')
@section('content')
		<div class="container-fluid">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div><!--/.row-->
		
		<div class="row">

			<div class="col-xs-12 col-md-12 col-lg-10">
				
		@if(Session::has('flag'))
					<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
					@endif
				<div class="panel panel-primary  "  style="margin-top:20px" >
					<div class="panel-heading" style="font-size:20px">Thông tin tài khoản</div>
					
					<div class="panel-body">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-top:10px">
								<div class="col-xs-12">
									<div class="form-group" >
										<label>Email</label>
										<input required type="email" name="email" class="form-control"  readonly="" value="{{$user->email}}"/> 
									</div>
									<div class="form-group" >
										<label>Fullname</label>
										<input required type="text" name="fullname" class="form-control" value="{{$user->fullname}}" >
									</div>
									<div class="form-group" >
										<label>Address</label>
										<input required type="text" name="address" class="form-control" value="{{$user->address}}">
									</div>
									<div class="form-group" >
										<label>Phone</label>
										<input required type="number" name="phone" class="form-control" value="{{$user->phone}}" >
									</div>
									<div>
									<button class="btn btn-default"><a href="{{route('doi-mat-khau')}}">Đổi Mật Khẩu </a></button>
									</div>
									<br>

									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{route('trang-chu')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
</div>
</div>
    @endsection
	@section('script')
		<script language="javascript">	
		$(document).ready(function(){
			$("#changePassword").change(function(){
				if($(this).is(":checked"))
				{
					$(".password").removeAttr('disabled');
				}
				else{
					$(".password").attr('disabled','');
				}
			})
		});
	</script>
	@endsection