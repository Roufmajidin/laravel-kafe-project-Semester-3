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

                        <td>{{ $data->id }}</td>
                        <td>{{ $data->menu['nama_menu'] }}</td>
                        <td><img src="{{ asset('storage/' . $data->menu->foto) }}" style='width:100px'></td>


                        <td>{{ $data->jumlahOrder }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->keterangan }}</td>


                        {{-- @if ($data->status == 0) --}}
                        {{-- <td class="activateDiv">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                                <button id="activateButton" type="submit" class="btn btn-primary activateButton"
                                    data-id="{{ $data->id }}">konfirm</button>

                            </td>


                            <td class="deactivateDiv" style="display: none">
                             <input type="hidden" name="id" value="{{ $data->id }}">
                                <button id="activateButton" type="submit" class="btn btn-success activateButton"
                                    data-id="{{ $data->id }}">Selesai</button>

                            </td> --}}

                        {{-- @else --}}

                        {{-- <td class="deactivateDiv">
                             <input type="hidden" name="id" value="{{ $data->id }}">

                                <button id="activateButton" type="submit" class="btn btn-success activateButton"
                                    data-id="{{ $data->id }}">Selesai</button>

                            </td> --}}
                        {{-- @endif --}}

                        {{-- jquery 2 coba belajar --}}

                        <td>
                            <input type="checkbox" data-toggle="toggle" data-on="Di proses" class="toogle-class"
                                data-id="{{ $data->id }}" data-off="Proses Menu?"
                                {{ $data->status == true ? 'checked' : '' }}>
                        </td>
                    </tr>
                @endforeach


            </table>

        </div>
    </div>
    </div>

@endsection
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script>
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
</script> --}}

@push('scripts')
    <script>
        $(function() {
            $('#toggle-two').bootstrapToggle({
                on: 'diproses',
                off: 'pesanan M'
            });
        })
    </script>
    <script>
        $('.toogle-class').on('change', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            // console.log(status);
            var user_id = $(this).data('id');
            console.log(user_id);
            $.ajax({

                type: 'GET',
                dataType: 'JSON',
                url: '{{ route('kirim_pesanUser') }}',
                data: {
                    'status': status,
                    'user_id': user_id
                },
                success: function(data) {
                    console.log(data);

                }

            })


        });
    </script>
@endpush
