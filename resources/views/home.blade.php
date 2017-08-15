@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Selamat Datang . . . <br>
                    <div id="chart-div">
                    </div>
                      {!! $lava->render('ColumnChart', 'Data', 'chart-div') !!}
                      <table class="tableContent" style="width:100%;">
                        <tr>
                          <th>No</th>
                          <th>Pendapat</th>
                          <th>Status</th>
                          <th>Tanggal</th>
                        </tr>
                        @foreach($dataLengkap as $key => $value)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $value->pendapat }}</td>
                          <td>{{ $value->status }}</td>
                          <td>{{ $value->tanggal }}</td>
                        </tr>
                        @endforeach
                      </table>
                      <br>
                    {!! Form::open(array('url' => Route('truncate'), 'method' => 'DELETE')) !!}
                    {!! Form::button('Hapus Semua', array('type'=>'Submit', 'value'=>'Hapus Semua', 'name'=>'truncate')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
