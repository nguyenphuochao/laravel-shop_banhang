
@extends('master')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$ten_loai->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Loại sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
						@foreach($loai as $l)
							<li><a href="{{route('loaisanpham',$l->id)}}">{{$l->name}}</a></li>
							
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Các Sản Phẩm </h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theoloai)}} </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@if($sp_theoloai !=NULL)
								@foreach($sp_theoloai as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										@if($sp->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chitiet',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt="" height="220px"></a>
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
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								@endif
							</div>
						
							<div class="space40">&nbsp;</div>
							
							
						</div> <!-- .beta-products-list -->


						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
						<h4>Sản Phẩm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_khac)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_khac as $k)
								<div class="col-sm-4">
									<div class="single-item">
										@if($k->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chitiet',$k->id)}}"><img src="source/image/product/{{$k->image}}" alt="" height="220px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$k->pro_name}}</p>
											<p class="single-item-price">
												@if($k->promotion_price!=0)
												<span class="flash-del">{{number_format($k->unit_price)}}</span>
												<span class="flash-sale">{{number_format($k->promotion_price)}}</span>
												@else
												<span>{{number_format($k->unit_price)}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$k->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet',$k->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach

								

					</div>
					<div class="row">{{$sp_khac->links("pagination::bootstrap-4")}}</div>
					</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
			

    @endsection