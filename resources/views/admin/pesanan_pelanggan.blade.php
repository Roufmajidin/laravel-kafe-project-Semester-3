@extends('admin.master.master')
@section('title', 'Data Menu')
@section('content')

    <div class="col-12 md-6">



        <div class="card">


            <table class="table table-striped">
                <tr>

                    <th>#</th>
                    <th>Nama Menu</th>
                    <th>Foto</th>
                    <th>Jumlah Pesan</th>
                    <th>Total Harga</th>
                    <th>Meja</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>

                </tr>



                <?php
                $no = 1;
                ?>

                @foreach ($pesanan_detail as $data)
                    <tr>

                        <td>{{ $no }}</td>
                        <td>{{ $data->menu['nama_menu'] }}</td>
                        <td><img src="{{ asset('storage/' . $data->menu->foto) }}" style='width:100px'></td>


                        <td>{{ $data->jumlahOrder }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->keterangan }}</td>


                        @if ($data->status == 1)
                            <td><a href="/kirim_pesan/{{ $data->id }}" class="btn btn-success"><i class="fas fa-check">
                            </td>
                        @else
                            <td><a href="/kirim_pesan/{{ $data->id }}" class="btn btn-danger"><i class="fas fa-check">
                            </td>
                        @endif
                    </tr>
                @endforeach


            </table>

        </div>
    </div>
    </div>













@stop
