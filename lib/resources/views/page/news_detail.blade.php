@extends('master');
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Chi Tiết Tin Tức</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Tin tức</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<div class="container"><br>
        <h1><strong>{{$chitiet->title}}</strong></h1><br>
        <p ><strong style="color:blue"> Thực hiện bởi {{$chitiet->tacgia}} - {{$chitiet->created_at}}</strong></p><br>
		{!!$chitiet->news_detail!!}
       
<p style="font-weight:bolder;font-size:19px;margin-top: 10px;">Bạn cũng có thể chọn cho mình một mẫu smartphone giá rẻ tại PhuocHao store bằng cách nhấp vào nút mua dưới đây nhé!</p><br>
<div class="btn btn-success" style="margin-left:50% "><a href="{{route('trang-chu')}}">Chọn mua sản phẩm</a></div>
<hr>
<h5>Bài viết tin tức khác</h5>
<div class="container">
<div class="form-row">
@foreach($news as $new)
   <a href="{{route('chitiet_tintuc',$new->id)}}"><div class="col 12 col-sm-6 col-md-4 "><img src="{{asset('source/image/tintuc/'.$new->image)}}" alt="" height="100px"width="340px"><div style="font-size:17px;font-weight:bolder"></a>
    {{$new->title}}
    </div>
 <p>{{$new->created_at}}</p></div>
 @endforeach
	</div>
</div>
<br>



@endsection