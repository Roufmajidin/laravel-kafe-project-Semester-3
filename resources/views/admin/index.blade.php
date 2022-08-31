@extends('admin.master.master')
@section('title', 'Data Menu')


@section('content')





    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" id="tambah">tambah</button>

        </div>
    </div>
    <br>



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
                    {{-- <a href="/edit/{{ $i->id }}" class="btn-sm btn-success"><i class="fa fa-edit"
                            style="font-size:10px;"></i></a> --}}
                    <button type="button" class="btn btn-primary hapus">hapus</button>

                </td>

            </tr>
            @endforeach
        </table>
    </div>
    </div>
    {{-- MODAL TAMBAH --}}
    <!-- Button trigger modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama : </label>
                        <input type="text" class="form-control" id="nama_menu">
                    </div>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga : </label>
                        <input type="text" class="form-control" id="harga">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary btnBuat">Buat</button>
                </div>
            </div>
        </div>
    </div>



@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
@push('scripts')
    <script>
        $("#tambah").on('click', function() {
            $("#modalTambah").modal('show');
        });

        $(".btnBuat").on('click', function() {
            var nama_menu = $("#nama_menu").val();
            var harga = $("#harga").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: '{{ url('/tambah-produk-proses') }}',
                data: {
                    'nama_menu': nama_menu,
                    'harga': harga,
                },
                success: function(e) {
                    // resetModal();
                    $(".close").click();
                    // getDataFromDB();
                }
            });
        });
        $(".hapus").on('click', function() {
            alert("hapus");
            console.log("halo");
        })


        // });
    </script>
@endpush
