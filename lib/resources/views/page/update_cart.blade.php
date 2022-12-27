@extends('master');
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Cập nhật giỏ hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Cập nhật giỏ hàng</span>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="list-cart">
			@if(Session::has('thongbao'))
				<div class="alert alert-success">{{Session::get('thongbao')}}</div>
				@endif
                <form action="" method="post" class="beta-form-checkout">
				    <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Tùy chọn</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                      
                    @if(Session::has('cart'))
                    <?php $i=1; ?>
                            @foreach($product_cart as $cart)
                         
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td><img src="source/image/product/{{$cart['item']['image']}}" alt="" height="100px"></td>
                        <td>{{$cart['item']['pro_name']}}</td>
                        <td>@if ($cart['item']['promotion_price']==0) {{number_format($cart['item']['unit_price'])}} @else{{number_format($cart['item']['promotion_price'])}} @endif</td>
                        <th scope="row"> <input id="quanty-item-{{$cart['item']->id}}" type="number" value="{{$cart['qty']}}" min="1" name="quanti"> </th>
                        <td>{{number_format($cart['price'])}}</td>
                        <td>
                            <a href="{{route('xoagiohang',$cart['item']['id'])}}" class="btn btn-danger">Xóa</a>
                            <a onclick="SaveListItemCart({{$cart['item']->id}})" href="javascript:" class="btn btn-warning">Sửa</a>
                                   
                    </td>   
                       
                        </tr>
                        @endforeach
                             @endif
                            
                    </tbody>
                    @if(Session::has('cart'))
                         <td colspan="5" style="font-weight:bold;font-size:20px">Tổng {{number_format(Session('cart')->totalQty)}} sản phẩm thành tiền:</td>
                             <td style="font-weight:bolder;font-size:18px;color:red">{{number_format(Session('cart')->totalPrice)}} VNĐ</td>
                             @endif
                           
                    </table> 
                            @if(Session::has('cart')) 
                  <div><button type="submit" style="margin-left:950px"><a class="beta-btn primary" href="{{route('dathang')}}" >Đặt hàng <i class="fa fa-chevron-right"></i></button></a></div><br>
                    @else
                    <h1 style="text-align: center;">Giỏ hàng trống</h1><br>
                         @endif
						</div> <!-- .your-order -->
					</div>
				</div>
                
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
   

    <script>
        function SaveListItemCart(id){
          
        
            $("#quanty-item-"+id).val();
           $.ajax({
               url:'update-to-cart/'+id+'/'+  $("#quanty-item-"+id).val(),
               type:'GET',

           }).done(function(response){
            console.log(response);
				location.reload();  
                alertify.success('Cập nhật giỏ hàng thành công');
				
           });
        
        }
      
       
    </script>
    @endsection