@if(Session::has('thongbao'))
<p class="alert alert-success"> {{Session::get('thongbao')}}</p>
@endif
