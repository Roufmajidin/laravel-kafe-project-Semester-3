@extends('admin.master.master')
@section('title', 'edit Menu')
@section('content')
    <div class="col-12 md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('edit-proses/' . $menu->id) }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Nama Menu</label>
                                <input type="text" class="form-control" placeholder="Nama Menu"
                                    value="{{ $menu->nama_menu }}" name="nama_menu">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label>Harga </label>
                                <input type="number" class="form-control" placeholder="{{ $menu->harga }}"
                                    value="{{ $menu->harga }}" name="harga">
                            </div>
                        </div>

                    </div>
                    <div class="row">




                        <div class="row">
                            <div class="col ml-3">
                                <div class="form-group">
                                    <label for="">foto</label>
                                    <input type="file" class="form-control" value=""
                                        placeholder="{{ $menu->foto }}" name="foto">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" class="form-control" placeholder="" value="{{ $menu->stok }}"
                                    name="stok">
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
