@extends('master');
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Lấy lại mật khẩu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Lấy lại mật khẩu</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('laymatkhau')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>

					@if(count($errors)>0)
                    <div class="alert alert-danger">@foreach($errors->all() as $err) 
                             {{$err}} 
                        @endforeach
						@endif
					</div>

					@if(Session::has('flag'))
					<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
				@endif
					<div class="col-sm-6">
						<div class="form-block">
							<label for="email">Mật khẩu mới*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Xác nhận mật khẩu mới*</label>
							<input type="password" name="repassword"  required><br><br>
						
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Reset</button>
								
						
						</div>
					
					</div>
					<div class="col-sm-3"></div>
				</div>
			
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
    @endsection