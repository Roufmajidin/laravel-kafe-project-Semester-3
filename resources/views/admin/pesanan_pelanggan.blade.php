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


                        @if ($data->status == 0)
                            <td class="activateDiv">
                                <button id="activateButton" type="submit" class="btn btn-primary activateButton"
                                    data-id="{{ $data->id }}">konfirm</button>

                            </td>


                            <td class="deactivateDiv" style="display: none">
                                <button id="activateButton" type="submit" class="btn btn-success activateButton"
                                    data-id="{{ $data->id }}">Selesai</button>

                            </td>

                        @else
                           <td class="deactivateDiv">
                                <button id="activateButton" type="submit" class="btn btn-success activateButton"
                                    data-id="{{ $data->id }}">Selesai</button>

                            </td>
                        @endif
                    </tr>
                @endforeach


            </table>

        </div>
    </div>
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.activateButton').on('click', function() {
            const id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('kirim_pesanUser') }}',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    // console.log("masuk");
                    $('.activateDiv').hide();
                    $('.deactivateDiv').show();


                }

            });

        })

    });
</script>
