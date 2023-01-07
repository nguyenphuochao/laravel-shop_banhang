<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 180 Cao Lỗ,Phường 4,Quận 8</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
					@if(Auth::check() && Auth::user()->quyen==0 && Auth::user()->active==1)
						<li><a href="{{route('info_user')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
						@else 	<li><a href="{{route('login')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
						@endif
						@if(Auth::check() && Auth::user()->quyen==0 && Auth::user()->active==1)

						<li><a href="">Xin chào bạn {{Auth::user()->fullname}}</a></li>
						
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
						@else
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
						<li><a href="{{route('dangki')}}">Đăng kí</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="source/image/slide/logo.jpg" width="200px" alt=""></a>	@if(Session::has('kich_hoat'))
					<div class="alert alert-{{Session::get('kich_hoat')}}">{{Session::get('message')}}</div>
					@endif
					@if(Session::has('flags'))
					<div  class="alert alert-{{Session::get('flags')}}" style="width:600px">{{Session::get('message')}}</div>
					@endif
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
				
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}
							@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
									@if(Session::has('cart'))
							<div class="beta-dropdown cart-body">
							
								@foreach($product_cart as $product)
								<div class="cart-item">
									<a class="cart-item-delete"  onclick="DelCart({{$product['item']->id}})" href="javascript:"> <i class="fa fa-times"></i></a>
									<div class="media">
										
										<a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['pro_name']}}</span>
									
											<span class="cart-item-amount">{{$product['qty']}}*<span> @if ($product['item']['promotion_price']==0) {{number_format($product['item']['unit_price'])}} @else{{number_format($product['item']['promotion_price'])}} @endif</span>
										</div>
									</div>
								</div>
								@endforeach
							

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} VNĐ</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('view-cart')}}" class="beta-btn primary text-center" style="width:100%">Xem giỏ hàng <i class="fa fa-chevron-right"></i></a>
									</div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center" style="width:100%">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a href="#">Loại sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
								
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
						<li><a href="{{route('tintuc')}}">Tin tức</a></li>
						<li><a href="admin/home">Trang quản trị</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<script>
			function DelCart(id){
			$.ajax({
			url: "del-cart/"+id,
			type: "GET",
			
			
			}).done(function(response){
				console.log(response);
				location.reload();  
				alertify.success('Xóa giỏ hàng thành công');

			});
		
		}
	</script>