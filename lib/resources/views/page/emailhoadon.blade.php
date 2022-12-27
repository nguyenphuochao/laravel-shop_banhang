<div id="wrap-inner">
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							<p>
								<span class="info">Khách hàng: {{$info['name']}}</span>
							
							</p>
							<p>
								<span class="info">Email:{{$info['email']}} </span>
							
							</p>
							<p>
								<span class="info">Điện thoại: {{$info['phone']}} </span>
								
							</p>
							<p>
								<span class="info">Địa chỉ:{{$info['address']}} </span>
							
							</p>
						</div>						
						<div id="hoa-don">
							<h3>Hóa đơn mua hàng</h3>							
							<table border="1" cellspacing="0">
								<tr>
									<td width="30%">Tên sản phẩm</td>
									<td width="25%">Giá</td>
									<td width="20%">Số lượng</td>
									
								</tr>
							
								@foreach ($hoadon->items as $key => $cart) 
								<tr>
									<td>{{$cart['item']['pro_name']}}</td>
									<td class="price">{{number_format($cart['price'])}} VNĐ</td>
									<td>{{$cart['qty']}}</td>
								
								</tr>
						@endforeach
				
						
								<td>Tổng tiền:</td>
								<td colspan="3" align="right">{{number_format($hoadon->totalPrice)}}</td>
							
							</table>
						</div>
						<div id="xac-nhan">
							<br>
							<p align="justify">
								<b>Quý khách đã đặt hàng thành công!</b><br />
								• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
								• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
								<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
							</p>
						</div>
					</div>					