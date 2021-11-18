@if(count($errors)>0)
    <ul>
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger"><li>{{$error}}</li></div>  
    @endforeach
    </ul>
@endif
@if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@endif