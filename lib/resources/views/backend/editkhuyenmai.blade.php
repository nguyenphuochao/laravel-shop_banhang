@extends('backend.master')
    @section('main')
		
                      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                        <div class="row">
                          <div class="col-lg-12">
                            <h1 class="page-header">Khuyến Mãi</h1>
                          </div>
                        </div><!--/.row-->
                        
                        <div class="row">
                          <div class="col-xs-12 col-md-12 col-lg-12">
                            
                            <div class="panel panel-success">
                              
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                              <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">Form Sửa Khuyến Mãi</h3>
                        </div>
                        <div class="panel-body">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-8 ">
                                  <label for="">Tên chương trình khuyến mãi</label>
                                  <input type="text" placeholder="Nhập tên" class="form-control" name="name" value="{{$km->name}}">
                                </div>
                                <div class="form-group col-md-4 ">
                                  <label for="">Thời gian bắt đầu</label>
                                  <input type="date" placeholder=""  class="form-control" name="date_start"  value="{{$km->start_date}}">
                                </div>
                            </div>
                            <div class="form-group col-md-4"> 
                            
                            <label>Sản phẩm</label>
                            <select required name="cate" class="form-control">
                                @foreach($cate as $cate)
                                <option value="{{$cate->id}}" @if($km->id_pro==$cate->id) selected @endif>{{$cate->pro_name}}</option>
                                
                                @endforeach
                            </select>
                        </div>
                              <div class="form-group col-md-4">
                                <label for="">Nội dung quà tặng</label>
                                <input type="text" class="form-control" name="gift"  value="{{$km->gift}}">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="">Thời gian kết thúc</label>
                                <input type="date" class="form-control" name="date_end"  value="{{$km->end_date}}">
                              </div>
                           <div class="form-group col-md-8">
                            <label for="">Số lượng sản phẩm áp dụng</label>
                            <input type="number" class="form-control" name="number"  value="{{$km->number}}">
                          </div>
                                <div class="form-group col-md-12">
                                <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                <a href="{{asset('admin/khuyenmai/')}}" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                                {{csrf_field()}}
                        </form>
                        <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div><!--/.row-->
                      </div>	<!--/.main-->
    @endsection