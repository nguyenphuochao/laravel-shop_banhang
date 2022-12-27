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
				
            @if(count($errors)>0)
                    <div class="alert alert-danger">@foreach($errors->all() as $err) 
                             {{$err}} 
                        @endforeach
                    </div>
                         @endif
		                    @if(Session::has('flag'))
					<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
					@endif
				<div class="panel panel-info  " style="margin-top:20px" >
					<div class="panel-heading" style="font-size:20px">Đổi mật khẩu</div>
					
					<div class="panel-body">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-top:10px">
								<div class="col-xs-12">
									<div class="form-group" >
										<label>Mật khẩu mới*</label>
										<input required type="password" name="password" class="form-control" placeholder="Mật khẩu phải 6 kí tự"/> 
									</div>
									<div class="form-group" >
										<label>Nhập lại mật khẩu</label>
										<input required type="password" name="repassword" class="form-control" />
									</div>
									<br>

									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{route('info_user')}}" class="btn btn-danger">Hủy bỏ</a>
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