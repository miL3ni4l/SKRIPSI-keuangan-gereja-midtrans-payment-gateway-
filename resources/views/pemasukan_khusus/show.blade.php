@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@extends('layouts2.app')

@section('content')
  <div class="content-header">
                        <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-12">
                                  <div class="col-md-12 col-sm-12 col-12">
                                    <ol class="breadcrumb float-sm-right">
                                      <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                      <li class="breadcrumb-item"><a href="/pemasukan_khusus">Pemasukan Khusus</a></li>
                                      <li class="breadcrumb-item active">{{$pemasukan_khusus->kode_pemasukan_khusus}}-{{$pemasukan_khusus->detail_kategori->kategori}}</li>
                                    </ol>
                                  </div>
                              </div> 
                          </div>
                        </div>
  </div>

  <section class="content-header">
    <div class="container-fluid">
      <div class="row">

            <div class=" table-responsive col-md-12 col-sm-6 col-12">    
              <div class="card card-secondary">
                <div class="card-body">
                  <div class="col-md-12">
                  
                    <div class="card card-primary card-outline">
                      <div class="mailbox-read-info">
                        <h5>
                          <b>{{$pemasukan_khusus->kode_pemasukan_khusus}}-{{$pemasukan_khusus->detail_kategori->kategori}} 
                                    @if($pemasukan_khusus->status == '1')
                                        <i class="fa fa-check-square" style="color:green" ></i>
                                      @else
                                        <i class="fa fa-times" style="color:red"></i>
                                    @endif
                          </b>
                          <span class="mailbox-read-time float-right">{{ $pemasukan_khusus->updated_at->diffForHumans() }}</span>
                        </h5>
                      </div>

                      <div class="mailbox-read-message">
                        <p>Hello <b><i>{{Auth::user()->name}}</i></b>,</p>

                        <p>
                          Pemasukan ini dilakukan pada tanggal <b>{{$pemasukan_khusus->tanggal->format('d-M-Y')}}</b> dengan kategori <b>{{$pemasukan_khusus->detail_kategori->kategori}}</b>
                          nominal <b>{{ "Rp.".number_format($pemasukan_khusus->nominal).",-" }} </b>
                          dimasukan ke dalam <b>{{$pemasukan_khusus->kas->kas}}</b>.
                        </p>

                        <p>
                          Keterangan :
                          <p><i>
                          {{$pemasukan_khusus->keterangan}}
                          </i> </p>
                        </p>

                        <p>Bukti pemasukan_rutin :</p>
                        <img width="250" height="250" @if($pemasukan_khusus->cover) src="{{ asset('images/PemasukanKhusus/'.$pemasukan_khusus->cover) }}" @endif />      
                      </div>
                    </div>
      
                  </div>
                </div>
              </div>
                                
            </div>
          
      </div>
    </div>
  </section>

  
@endsection


