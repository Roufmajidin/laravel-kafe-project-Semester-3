@extends('admin.master.master')
@section('title', 'Data Menu')
@section('content')
<div class="col-12 md-6">
    <div class="card">

        
        <div class="card">
                    

        <table class="table table-striped">
        <tr>
                               

                                 
                               
                               <th>#</th>
                               <th>User_id</th>
                               <th>Jumlah Pesan</th>
                               
                              
                               <th>tanggal_pesan</th>
                               <th>Aksi</th>
                            
                           </tr>
        
                            @foreach($pesanan as $data)
                            <tr>
                            <td>#</td>
                            <td>{{$data->user_id}}</td>
                            <td>{{$data->jumlah_pesan}}</td>
                            <td>{{$data->created_at}}</td>
                            </tr>
                            @endforeach
</table>


@stop