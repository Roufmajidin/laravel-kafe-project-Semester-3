@extends('admin.master.master')
@section('content')
                            
<div class="row" style="">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Input Text</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Penerima</label>
            
            @foreach ($penerima as $data )
           

            <p class="form-control" disabled="">{{ $data->no_meja }}


          </div>
          <form class="form-group" method="POST" action="/kirim_pesanUser/{{ $data->id }}">
            {{ @csrf_field() }}
            <label>Isi Pesan</label>
            <input type="text" class="form-control" name="isi_pesan" placeholder="isi">

          <div class="form-group mt-2">

            <button type="submit" class="btn btn-info">Kirim</button>
          </div>
          </form>

          @endforeach





@stop