@extends('admin.master.master')
@section('title', 'Data Menu')


@section('content')




    <a href="/tambah-produk" class="btn btn-secondary mb-3">Tambah Data</a>

    <div class="card">
        <table class="table">
            <tr>
                <th>nama menu
                <th>
                <th>Harga</th>
                <th>keterangan</th>
                <th>Aksi</th>

                @foreach ($menu as $i)
            <tr style="font-size:12px;">
                <td>{{ $i->nama_menu }}</td>
                <td><img src="{{ asset('storage/' . $i->foto) }}" style='width:100px'></td>
                <td>Rp. {{ number_format($i->harga) }}</td>

                <td>
                    <a href="/edit/{{ $i->id }}" class="btn-sm btn-success"><i class="fa fa-edit"
                            style="font-size:10px;"></i></a>
                    <a href="/hapus/{{ $i->id }}" class="btn-sm btn-success"><i class="fa fa-trash"
                            style="font-size:10px;"></i></a>


                </td>

            </tr>
            @endforeach
        </table>
    </div>

















@stop
