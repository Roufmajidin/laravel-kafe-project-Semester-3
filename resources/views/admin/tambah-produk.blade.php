@extends('admin.master.master')
@section('title', 'Tambah Produk')


@section('content')

    <div class="col-12 md-6">
        <div class="card">




            <div class="card-body">
                <form action="tambah-produk" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Nama Menu</label>
                                <input type="text" class="form-control" placeholder="Nama Menu" value=""
                                    name="nama_menu">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label>Harga </label>
                                <input type="number" class="form-control" placeholder="" value="" name="harga">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col pr-3">
                            <div class="form">
                                <label for="">foto</label>
                                <input type="file" class="form-control" placeholder="foto" value="" name="foto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pr-3">
                            <div class="form">
                                <label for="">stok</label>
                                <input type="text" class="form-control" placeholder="stok" value="" name="stok">
                            </div>
                        </div>
                    </div>


            </div>

            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    </div>
    </div>

@stop
