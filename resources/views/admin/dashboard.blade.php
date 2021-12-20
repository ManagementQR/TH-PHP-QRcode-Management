@extends('admin_layout')
@section('admin_content')

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h4 mb-0 text-gray-800" style=" font-style: italic; font-family:monospace;">"Hệ thống quản lý kiểm soát việc ra vào cửa thông qua quét mã QR"</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Số Lượng Người Vào Cửa
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">100.000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Số Lượng Người Ra Cửa
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">98.090</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-running fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Nhiệm Vụ
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Yêu Cầu Xử Lý
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Dự Án</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">
                                    Di Chuyển Máy Chủ <span class="float-right">20%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">
                                    Theo Dõi Bán Hàng <span class="float-right">40%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">
                                    Cơ Sở Dữ Liệu Khách Hàng <span class="float-right">60%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">
                                    Chi Tiết Thanh Toán <span class="float-right">80%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">
                                    Thiết Lập Tài Khoản <span class="float-right">Complete!</span>
                                </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Color System -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        Primary
                                        <div class="text-white-50 small">#4e73df</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-success text-white shadow">
                                    <div class="card-body">
                                        Success
                                        <div class="text-white-50 small">#1cc88a</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-info text-white shadow">
                                    <div class="card-body">
                                        Info
                                        <div class="text-white-50 small">#36b9cc</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-warning text-white shadow">
                                    <div class="card-body">
                                        Warning
                                        <div class="text-white-50 small">#f6c23e</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-danger text-white shadow">
                                    <div class="card-body">
                                        Danger
                                        <div class="text-white-50 small">#e74a3b</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-secondary text-white shadow">
                                    <div class="card-body">
                                        Secondary
                                        <div class="text-white-50 small">#858796</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        Light
                                        <div class="text-black-50 small">#f8f9fc</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-dark text-white shadow">
                                    <div class="card-body">
                                        Dark
                                        <div class="text-white-50 small">#5a5c69</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Hình Minh Họa</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                         src="{{asset('public/backend/images/scan_qr.jpg')}}" alt="...">
                                </div>
                                <p>
                                    Có không ít người lo lắng liệu cách sử dụng QR code có đủ an toàn hay không? Nhưng trên thực tế, QR code có an toàn hay không sẽ phụ thuộc vào nội dung mã hóa trên mỗi mã QR. Bởi vì cũng có rất nhiều kẻ xấu tận dụng mã QR để nhúng những URL độc hại, chứa những phần mềm độc hại để khi có người khác quét vào sẽ dẫn đến tình trạng mất thông tin, dữ liệu,…
                                </p>
                                <a target="_blank" rel="nofollow" href="https://undraw.co/">
                                    Xem Thêm Hình Ảnh Minh Họa
                                </a>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Phương Pháp Tiếp Cận Phát Triển</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Trang quản trị sử dụng rộng rãi các lớp tiện ích Bootstrap 4 để giảm bớt CSS cồng kềnh và hiệu suất trang kém. Các lớp CSS tùy chỉnh được sử dụng để tạo các thành phần tùy chỉnh và các lớp tiện ích tùy chỉnh.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>

@endsection