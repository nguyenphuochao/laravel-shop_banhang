@if(Session::has('error'))
<p class="alert alert-danger"> {{Session::get('error')}}</p>

@endif

@foreach($errors->all() as $errors)
<p class="arlert alert-danger">{{$errors}}</p>
@endforeach