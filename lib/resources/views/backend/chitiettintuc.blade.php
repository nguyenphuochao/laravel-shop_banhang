@extends('backend.master')
    @section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết tin tức</h1>
			</div>
		</div><!--/.row-->
          
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					
					<div class="panel-body">
                        <div class="container">
					<form role="form" method="post" >
						<fieldset>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
                                    <h2><strong>{{$chitiet->title}}</strong></h2>
                                    <strong style="color:blue">Thực hiện bởi: {{$chitiet->tacgia}} - <span style="color: black">Cập nhật vào ngày: {{$chitiet->updated_at}}</span></strong>
                                    <div>{!!$chitiet->news_detail!!}</div>
								
									<a href="{{asset('admin/tintuc/')}}" class="btn btn-danger">Trở về</a>
								</div>
							</div>
                         </div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
    
	</div>	<!--/.main-->
    @endsection