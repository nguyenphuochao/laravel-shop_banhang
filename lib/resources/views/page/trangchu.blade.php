@extends('master')
@section('content')


<div class="fullwidthbanner-container">

					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
			@foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;"><a href="{{$sl->link}}">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;" alt="{{$sl->noidung}}">
													</div>
												</div>

												</a></li>
						@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
				</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Nổi Bật</h4>
							<div class="beta-products-details">
								<p style="font-weight:bolder" class="pull-left">Tìm thấy {{count($new_product)}}</p>
								<div class="clearfix"></div>
							</div>
						
							<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item" >
									@if($new->promotion_price!=0)
										<div class="ribbon-wrapper" ><div class="ribbon sale" >Sale</div></div>
										@endif
										<div class="single-item-header" >
											<a href="{{route('chitiet',$new->id)}}"><img height="250px" src="source/image/product/{{$new->image}}"   alt="" ></a>
										</div>
										<div class="single-item-body">
										<b>	<p class="single-item-title">{{$new->pro_name}}</p></b>
											<p class="single-item-price">
											@if($new->promotion_price!=0)
												<span class="flash-del">{{number_format($new->unit_price)}}</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}}</span>
												@else
												<span>{{number_format($new->unit_price)}}</span>
												@endif
											</p>
										
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" onclick="AddCart({{$new->id}})" href="javascript:"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

								@endforeach

							
							</div>
							<div> {{$new_product->links("pagination::bootstrap-4")}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Giảm Giá</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($sanpham_khuyenmai)}}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sanpham_khuyenmai as $km)
								<div class="col-sm-3">
									<div class="single-item">
									@if($km->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header" style="width:100px,height:150px">
											<a href="{{route('chitiet',$km->id)}}"><img height="250px" src="source/image/product/{{$km->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$km->pro_name}}</p>
											<p class="single-item-price">
											@if($km->promotion_price!=0)
												<span class="flash-del">{{number_format($km->unit_price)}}</span>
												<span class="flash-sale">{{number_format($km->promotion_price)}}</span>
												@else
												<span>{{number_format($km->unit_price)}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" onclick="AddCart({{$km->id}})" href="javascript:"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$km->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row"> {{$sanpham_khuyenmai->links("pagination::bootstrap-4")}}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
			

	<script>
		function AddCart(id){
			$.ajax({
			url: "add-to-cart/"+id,
			type: "GET",
			
			
			}).done(function(response){
				console.log(response);
				window.location.reload()
				alertify.success('Thêm vào giỏ hàng thành công');

			});
			
		}
	
	</script>

    @endsection