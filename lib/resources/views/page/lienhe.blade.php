@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9544103877597!2d106.6756434146222!3d10.73799719234761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f62a90e5dbd%3A0x674d5126513db295!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgU8OgaSBHw7Ju!5e0!3m2!1svi!2s!4v1635569301103!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
			@if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                        @endif
				<div class="col-sm-8">
					<h2>Mẫu liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Nếu Quý khách có bất kỳ thắc mắc nào liên quan đến các sản phẩm, dịch vụ của chúng tôi, vui lòng tham khảo mục Câu Hỏi Thường Gặp Câu Hỏi Thường Gặp để tìm hiểu thêm về các câu hỏi thường gặp liên quan đến sản phẩm và dịch vụ của chúng tôi để tìm nhanh câu trả lời. Ngoài ra Quý khách cũng có thể lựa chọn cách thức liên lạc phù hợp để chúng tôi có thể hỗ trợ Quý khách tốt nhất.</p>
					<div class="space20">&nbsp;</div>
					<form action="{{route('lienhe')}}" method="post" class="contact-form">	
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-block">
							<input name="fullname" type="text" placeholder="Tên của bạn(bắt buộc)">
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Emai của bạn(bắt buộc)">
						</div>
						<div class="form-block">
							<input name="title" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="content" placeholder="Tin nhắn của bạn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ nhà</h6>
					<p>
						180 cao lỗ, p4, q8 <br>
						TPHCM
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Yêu cầu kinh doanh</h6>
					<p>
					Giải quyết các yêu cầu khác về kinh doanh, thương mại mà pháp luật có quy định. <br>
						<a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Thuê người làm</h6>
					<p>
					Chúng tôi luôn tìm kiếm những người tài năng
		tham gia vào đội ngũ của chúng tôi. <br>
						<a href="hr@betadesign.com">hr@betadesign.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
        @endsection