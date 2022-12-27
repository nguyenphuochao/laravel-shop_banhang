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
					<div class="panel-heading">Đổi mật khẩu</div>
					
					<div class="panel-body">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Mật khẩu mới</label>
										<input required type="password" name="password" class="form-control" placeholder="Hãy nhập 6 kí tự"/>
									</div>
									<div class="form-group" >
										<label>Nhập lại mật khẩu mới</label>
										<input required type="password" name="repassword" class="form-control" >
									</div>
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/user/edit/'.$user->id)}}" class="btn btn-danger">Hủy bỏ</a>
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