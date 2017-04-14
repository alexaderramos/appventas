
@if(count ($errors)>0)
  <div class="col-md-6 col-md-offset-3">
    <div class="alert-danger" role="role">
     <strong>Errores</strong>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
    @endif
    </div>
@if (Session::has('update'))
  <div class="alert-success" role="alert">
   <strong>{{Session::get('update')}}</strong>
  </div>
@endif
@if (Session::has('delete'))
  <div class="alert-danger" role="alert">
   <strong>{{Session::get('delete')}}</strong>
  </div>
@endif
@if(Session::has('save'))
  <div class="alert-success" role="alert">
   <strong>{{Session::get('save')}}</strong>
  </div>
@endif
