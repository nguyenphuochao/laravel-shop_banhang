<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang quản trị</title>
<base href="{{asset('/backend')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="{{asset('public/editor/ckeditor/ckeditor.js')}}"></script>
<script src="js/lumino.glyphs.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{asset('admin/home')}}">PhuocHao Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">

				
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  Xin chào bạn  {{Auth::user()->fullname}} <span class="caret"></span></a>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{asset('admin/home/')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
	<!-- 		<li><a href="{{asset('admin/thuoctinh/')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Thuộc tính</a></li> -->
			<li><a href="{{asset('admin/product/')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="{{asset('admin/category/')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li><a href="{{asset('admin/khuyenmai/')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Khuyến Mãi</a></li>
			<li><a href="{{asset('admin/khachhang/')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  Khách hàng</a></li>
			<li><a href="{{asset('admin/banner/')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Banner</a></li>
			<li><a href="{{asset('admin/user/')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  User</a></li>
			<li><a href="{{asset('admin/binhluan/')}}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"/></svg>Bình luận</a></li>
			<li><a href="{{asset('admin/dondathang/')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"/></svg>  Đơn đặt hàng</a></li>
			<li><a href="{{asset('admin/tintuc/')}}"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg> Tin tức</a></li>
			<li><a href="{{asset('admin/lienhe/')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Liên Hệ</a></li>
			<li><a href="{{asset('admin/thongtincuahang/')}}"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg> Thông tin cửa hàng</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	@yield('main')
		  
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		// Chang Image add product
  function changeImg(input){
      //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
      if(input.files && input.files[0]){
          var reader = new FileReader();
          //Sự kiện file đã được load vào website
          reader.onload = function(e){
              //Thay đổi đường dẫn ảnh
              $('#avatar').attr('src',e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(document).ready(function() {
      $('#avatar').click(function(){
          $('#img').click();
      });
  });
	</script>	
</body>

</html>
