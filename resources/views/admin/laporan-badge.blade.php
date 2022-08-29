@extends('admin.master.master')
@section('title', 'Master Data')


@section('content')    
                
                    <div class="card-header"> 
                        <div class="row">
                        <div class="col-12 col-md-8 col-lg-12 mb-2">
                      
         
                        <?php 
                            $p = \App\Models\Pesanan::sum('jumlah_pesan');
                            $m_aktif = \App\Models\Pesanan::count('jumlah_pesan');
                            $p_j = \App\Models\PesananDetail::sum('jumlah_harga');
                            $pending = \App\Models\PesananDetail::sum('status', 0);
                            $sukses = \App\Models\PesananDetail::sum('status', 1);  
                  



                        ?>
  
                      <button type="button" class="btn btn-primary btn-icon icon-left btn-lg mb-2">
                        <i class="fas fa-user" style="font-size:120px;"></i> Menu Keluar <span class="badge badge-transparent">{{ $p}}</span>
                      </button>
                      <button type="button" class="btn btn-primary btn-icon icon-left btn-lg mb-2">
                        <i class="fas fa-user" style="font-size:120px;"></i> Meja Aktif <span class="badge badge-transparent">{{ $m_aktif}}</span>
                      </button>

                      <button type="button" class="btn btn-danger btn-icon icon-left btn-lg mb-2">
                        <i class="fas fa-plane" style="font-size:120px;"></i> Total <span class="badge badge-transparent">Rp {{number_format ($p_j) }}</span>
                      </button>
                      <button type="button" class="btn btn-warning btn-icon icon-left btn-lg mb-2">
                        <i class="fas fa-plane" style="font-size:120px;"></i> Pending Pesanan <span class="badge badge-transparent">{{ $pending }}</span>
                      </button>
                      <button type="button" class="btn btn-success btn-icon icon-left btn-lg mb-2">
                        <i class="fas fa-plane" style="font-size:120px;"></i> Menu Sukses <span class="badge badge-transparent">{{ $sukses }}</span>
                      </button>
                    </div>


                </div>

@stop