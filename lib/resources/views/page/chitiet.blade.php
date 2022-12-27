@extends('master')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->pro_name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
						<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h1>{{$sanpham->pro_name}}</h1></p><br>
								<p class="single-item-price">
								@if($sanpham->promotion_price!=0)
												<span class="flash-del">{{number_format($sanpham->unit_price)}}</span>
												<span class="flash-sale">{{number_format($sanpham->promotion_price)}}</span>
												@else
												<span style="color:red">{{number_format($sanpham->unit_price)}}</span> 
												@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">										
								<p style="font-weight:normal;margin-bottom:9px">Danh mục: {{$sanpham->product_type->name}}</p>
								<p style="font-weight:normal;margin-bottom:9px">Bảo hành: {{$sanpham->baohanh}}</p>
								<p style="font-weight:normal;margin-bottom:9px">Phụ kiện: {{$sanpham->phukien}}</p>
								<p style="font-weight:normal;margin-bottom:9px">Tình trạng: {{$sanpham->tinhtrang}}</p>
								<p style="font-weight:bolder;margin-bottom:9px;"><span style="color:#B40404;font-weight:bolder">Khuyến mãi,ưu đãi:@if(count($km)) </span>
								@foreach($km as $k)
								
								<span style="font-weight:normal;margin-bottom:9px"><button>{{$k->gift}}</button> </span>
								<span>(từ {{date('d/m/Y',strtotime($k->start_date))}} đến {{date('d/m/Y',strtotime($k->end_date))}})</span>
							
								@endforeach
							@else <span style="color:black;font-weight:500"> Không có </span> @endif
							</p>
								
								<p style="font-weight:normal;margin-top:9px">Trạng thái:
								 @if($sanpham->trangthai==0) Hết hàng @else Còn hàng  @endif</p><br>

								
							<th scope="row"> <span style="font-weight:bolder;margin-top:9px">Số lượng: </span><input id="quanty-item-{{$sanpham->id}}" type="number" value="1" min="1" name="quanti" required> </th>
							</div>
							<div class="space20">&nbsp;</div>

						
							<div class="single-item-options">
						
								<a onclick="AddCartItem({{$sanpham->id}})" href="javascript:"><button type="submit" title="Đặt ngay" style="background-color:#B40404;width:500px;height:70px">
										<span style="color:white;font-size:25px;font-weight:bold">Đặt ngay</span>
										<p style="color:white;font-family: Helvetica, Arial, sans-serif;">Giao hàng tân nơi hoặc nhận tại của hàng</p>
									</button></a>
						
							
								<!-- <a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a> -->
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-detail">Thông số kĩ thuật</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{!!$sanpham->description!!}</p>
							
						</div>
						<div class="panel" id="tab-detail">
							<p>{!!$sanpham->parameter!!}</p>
							
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự</h4>

						<div class="row">	
							@foreach($sanpham_tuongtu as $sp)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chitiet',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp->pro_name}}</p>
										<p class="single-item-price">
										@if($sp->promotion_price!=0)
												<span class="flash-del">{{number_format($sp->unit_price)}}</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}}</span>
												@else
												<span>{{number_format($sp->unit_price)}}</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('chitiet',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitiet',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm giá dưới 10 triệu</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($sp_duoi_10trieu as $km)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitiet',$km->id)}}"><img src="source/image/product/{{$km->image}}" alt=""></a>
									<div class="media-body">
										{{$km->pro_name}}
										<p class="single-item-price">
											@if($km->promotion_price!=0)
												<span class="flash-del">{{number_format($km->unit_price)}}</span>
												<span class="flash-sale">{{number_format($km->promotion_price)}}</span>
												@else
												<span>{{number_format($km->unit_price)}}</span>
												@endif
											</p>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($new_product as $new)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitiet',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt=""></a>
									<div class="media-body">
										{{$new->pro_name}} <br>
										<p class="single-item-price">
											@if($new->promotion_price!=0)
												<span class="flash-del">{{number_format($new->unit_price)}}</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}}</span>
												@else
												<span>{{number_format($new->unit_price)}}</span>
												@endif
											</p>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->

		<h3 style="color:#EF431C">Bình Luận</h3><br>
		<form  method="post">

			@if(session('thongbao'))

			 <section class='alert alert-success'>{{session('thongbao')}}</section>

			@endif

			<div class="form-group">
				<label for="my-input">Email:</label>
				<input id="my-input" class="form-control" type="text" name="email" required>
			</div>
			<div class="form-group">
				<label for="my-input">Tên:</label>
				<input id="my-input" class="form-control" type="text" name="name" required>
			</div>
			<div class="form-group">
				<label for="my-input">Bình luận:</label>
				<textarea required name="description"></textarea>
			</div>
			<div class="form-group">
			<input type="submit" name="submit" value="Gửi" class="btn btn-primary">
			</div>
			{{csrf_field()}}
		</form>
			<p style="font-weight:bolder">Tìm thấy {{count($data)}} bình luận ở đây</p>
			<hr>
			@foreach($data as $comment)	
		<p style="font-weight:bold">{{$comment->name}}</p>
		<span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>
		<p>{{$comment->noi_dung}}</p>
		<hr>
		@endforeach
		
 <script>
        function AddCartItem(id){
          
      $("#quanty-item-"+id).val();
           
           $.ajax({
               url:'add-cart-detail/'+id+'/'+  $("#quanty-item-"+id).val(),
               type:'GET',

           }).done(function(response){
            console.log(response);
				location.reload();  
                alertify.success('Thêm vào giỏ hàng thành công');
				
           });
        
        }
      
       
    </script>
@endsection
