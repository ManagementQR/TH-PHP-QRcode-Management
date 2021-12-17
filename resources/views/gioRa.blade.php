@extends('layout')
@section('content')   
    <style>
        .qrcode_style{
            padding-left: 20px;
        }
    </style>             
    @php
        $user_name = Session::get('username');
        $qrcode_username = URL::to('/addCheckOut/'.$user_name);
    @endphp
    <p class="qrcode_style">{{QrCode::size(100)->generate($qrcode_username)}}</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Giờ ra</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div id="dataTable_length" class="dataTables_lenght">
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div id="dataTable_filter" class="dataTables_filter">
                        Tìm kiếm:
                        <form action="{{URL::to('/searchOut')}}" method="GET">
                            <label style="width: 270px">
                                <input type="search" name="keyword" value="@if(isset($_GET['keyword'])) {{$_GET['keyword']}} @endif"  class="form-control form-control-sm" placeholder="Nhâp ngày cần tìm: dd-MM-yyyy"/>
                            </label>
                            <input type="hidden" value="{{Session::get('username')}}" name="username"/>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Giờ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($checkout as $co)
                            <tr>
                                <td>{{date('d-m-Y', strtotime($co->gioRa))}}</td>
                                <td>{{date('H:i:s', strtotime($co->gioRa))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$checkout->appends(request()->all())->links()}}
            
        </div>
    </div>
@endsection