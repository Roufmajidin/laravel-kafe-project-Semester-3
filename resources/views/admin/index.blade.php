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
            <thead>
                <tr>
                    <th>nama menu

                    <th>Harga</th>
                    {{-- <th>keterangan</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>


            </tbody>


            {{-- @foreach ($menu as $i) --}}
            {{-- <tr style="font-size:12px;">
                <td>{{ $i->nama_menu }}</td>
                <td><img src="{{ asset('storage/' . $i->foto) }}" style='width:100px'></td>
                <td>Rp. {{ number_format($i->harga) }}</td>

                <td>
                    {{-- <a href="/edit/{{ $i->id }}" class="btn-sm btn-success"><i class="fa fa-edit"
                            style="font-size:10px;"></i></a> --}}
            {{-- <button type="button" class="btn btn-primary hapus">hapus</button> --}}

            {{-- </td> --}}

            {{-- </tr> --}}
            {{-- @endforeach --}}

        </table>
    </div>
    </div>

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
    {{-- modal delete konfirm --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <p style="text-align: center">Menghapus <span class="isi"></span></p>
                <input type="hidden" id="deleting_id">

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btnKonfirmHapus">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        $(document).on('click', '.hapus', function() {
            // var id = $(this).val();
            var id = $(this).val();
            $('#deleteModal').modal('show');
            $('#modalTitle').html('Delete data')
            $('.isi').html(id);
            $('#deleting_id').val(id)

        })
        $(document).on('click', '.btnKonfirmHapus', function(e) {
            e.preventDefault();
            $(this).text('Deleting..');
            var id = $('#deleting_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                dataType: "JSON",
                url: "hapus-menu/" + id,
                success: function() {
                    semuaData();
                    $('.btnKonfirmHapus').html('yes');

                    $('.close').click();
                }

            })

        })

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
                    semuaData();
                    // getDataFromDB();
                }
            });
        });

        semuaData();

        function semuaData() {

            $.ajax({
                type: "GET",
                datType: 'JSON',
                url: "/data-produk-ajax",
                success: function(response) {
                    // console.log(data)
                    $('tbody').html("");
                    $.each(response.data, function(key, item) {
                        $('tbody').append('<tr>\
                                        <td>' + item.nama_menu + '</td>\
                                        <td>' + item.harga + '</td>\
                                        <td><button type="button" value="' + item.id + '" class="btn btn-primary hapus">Hapus</button>\
                                        <button type="button" value="' + item.id + '" class="btn btn-primary" id="">Edit</button></td>\
                                        \</tr>');

                    });


                    // bkUp
                    // var data = ""
                    // $.each(response, function(key, value) {
                    //     // console.log(value.nama_menu);


                    //     data = data + "<tr>"
                    //     data = data + "<td>"+value.nama_menu+"</td>"
                    //     data = data + "<td>"+value.harga+"</td>"

                    //     data = data + "<td>"

                    //     data = data +
                    //         "<a href='#' class='btn btn-secondary hapusData'>hapus</a>"
                    //     data = data +
                    //         "<button type='button' class='btn btn-primary'>Detail</button>"

                    //     data = data + "</td>"

                    //     data = data + "</tr>"



                    // })
                    // $('tbody').html(data);

                }


            })
        }
        // semuaData();
    </script>
@endpush
