@extends('admin.master.master')
@section('title', 'History Pemesanan')
@section('content')       
<div class="col-12 md-6">
      <div class="card">
   
        
       
                
              
      <table class="table table-striped">
                
            
                  
                      
                                <table class="table table-striped" >
                                <tr>
                                    <th>#</th>
                                    <th>Nama User</th>
                                    <th>Level</th>
                                    <th>Keterangan</th>
                                
                                
                                
                                </tr>
                                        <?php
                                        $no = 1
                                        ?>
                                        @foreach($user as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->level}}</td>
                                            
                                    

                                        </tr>
                                        @endforeach

                        
                        

                                </table>

                            </div>
                        </div>
@stop