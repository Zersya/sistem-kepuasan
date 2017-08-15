<html>
  <head>
    <title>AKP | Kepuasan</title>
  </head>



    @extends('templates.index')

    @section('content')
    <img src="{{ asset('images/smileIcon.png') }}" width="60" >
    {!! Form::open(array('url' => '/')) !!}
    <div class="form-group">
      {!! Form::label('lpendapat', 'Pendapat') !!}
      <br>
      {!! Form::text('pendapat', null, array('class'=>'form-control','placeholder'=>'Masukan Pendapat Anda')) !!}
    </div>
    <div class="form-group">
      {!! Form::button('Puas', array('type'=>'Submit', 'value'=>'Puas', 'name'=>'status')) !!}
      {!! Form::button('Tidak Puas', array('type'=>'Submit', 'value'=>'Tidak Puas', 'name'=>'status')) !!}
    </div>
    {!! Form::close() !!}
    @stop
</html>
