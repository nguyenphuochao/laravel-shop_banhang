@extends('backend.master')
    @section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thuộc tính</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-success">
					<div class="panel-heading">Thêm thuộc tính</div>
					@include('errors.note')
					<div class="panel-body">
					<form role="form" method="POST" >
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên thuộc tính</label>
                                            <select id="inputName" class="form-control" name="name">
                                                <option value="color">Màu sắc</option>
                                                <option value="dungluong">Dung lượng</option>
                                            </select>
                                        </div>
								
									<div class="form-group value1" >
										<label>Giá trị</label>
										<input  type="color" name="value" class="form-control" id="v1" >
									</div>
                                    <div class="form-group value2" style="display:none" >
										<label>Giá trị</label>
										<input  type="text" name="" class="form-control" id="v2" value="" >
									</div>
								
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/banner/')}}" class="btn btn-danger">Hủy bỏ</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#inputName').change(function(event){
           var _ip = $('#inputName').val();
           if(_ip=='dungluong'){
               $('.value2').show();
               $('#v2').attr({
                   name:'value',
               });
               $('.value1').hide();
               $('#v1').attr({
                   name:'',
               });
           }else{
            $('.value1').show();
               $('#v1').attr({
                   name:'value',
           });
           $('.value2').hide();
               $('#v2').attr({
                   name:'',
           });
         }
        });
    </script>
    @endsection