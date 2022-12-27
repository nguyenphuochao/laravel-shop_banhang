@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Tin Tức</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Tin tức</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<div class="container">
	<br>
        <div class="row" >
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                       <h6 style="color:red;font-weight:bold">BÀI VIẾT NỔI BẬT</h6>
                    </li>
                        @foreach($noibat as $v)
                    <li href="" class="list-group-item menu1">
                    <div class="row">
						   <div class="col-md-4"><a href="{{route('chitiet_tintuc',$v->id)}}"> <img width="200px" height="200%" class="img-responsive" src="{{asset('source/image/tintuc/'.$v->image)}}" alt=""> </a></div>
                           <div class="col-md-8"><b>{{$v->title}}</b></div>
                           <p style="float:right">{{$v->created_at}}</p>
					   </div>
                    </li>
                    <ul>
                        @endforeach
			
            </div>

            <div class="col-md-9 ">
                <div class="panel">
                    <div class="panel-heading" >
                        <h4><b>BẢNG TIN PHỔ BIẾN</b></h4>
                    </div>
                @foreach($tintuc as $news)
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="{{asset('source/image/tintuc/'.$news->image)}}" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{$news->title}}</h3>
                            <p>{{$news->content}}</p>
                            <a class="btn btn-primary" href="{{route('chitiet_tintuc',$news->id)}}">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                @endforeach
                   

                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->
@endsection