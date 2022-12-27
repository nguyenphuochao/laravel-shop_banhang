@extends('master');
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">lấy lại mật khẩu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Quên mật khẩu</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('quenmatkhau')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
				@if(Session::has('flag'))
				<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                   @endif
					<div class="col-sm-6">
						<div class="form-group">
							<label for="email">Vui lòng cung cấp email để lấy lại mật khẩu</label><br><br>
							<input type="email" name="email" required>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Xác nhận</button>
                            
						
						
						</div>
					
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
    @endsection