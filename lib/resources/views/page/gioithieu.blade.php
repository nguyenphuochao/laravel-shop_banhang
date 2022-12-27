@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Giới thiệu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Giới thiệu</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="our-history">
				<h2 class="text-center wow fadeInDown" >Giới thiệu về shop PhuocHao Mobile</h2>
				<div class="space35">&nbsp;</div>
				@foreach($about as $b)	
			<div class="title" style="font-size:30px;margin-bottom:10px;font-weight:400">{{$b->title}}</div>
						<div style="margin-bottom:10px">{!!$b->mo_ta!!}</div>
		
		@endforeach
		
		<div class="btn btn-success " style="margin-left:50% "><a href="{{route('trang-chu')}}">Chọn mua sản phẩm</a></div>

			
		</div> <!-- #content -->
	</div> <!-- .container -->

	
@endsection