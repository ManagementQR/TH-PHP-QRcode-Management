@extends('admin_layout')
@section('admin_content')

    <h4 style="color: red; font-weight: bold; font-family: Tahoma; margin-bottom: 20px;"><i class="fas fa-calendar-alt"></i></i>&ensp;Thống Kê Số Ngày Làm Việc Của Nhân Viên Trong Một Tháng</h4>

    <?php $message = Session::get('message');
    if (isset($message)){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Thất bại! </strong> <?php echo $message;
        Session::put('message', null); // chỉ cho hiển thị một lần ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>

    <form method="get" action="{{ URL::to('/work-days-month') }}">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <!-- Form code begins -->
            <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Ngày bắt đầu</label>
                <input class="form-control" id="date_start" name="date_start" placeholder="MM-DD-YYYY" type="date"/>
            </div>
            <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Ngày kết thúc</label>
                <input class="form-control" id="date_end" name="date_end" placeholder="MM/DD/YYY" type="date"/>
            </div>
            <div class="form-group"> <!-- Submit button -->
                <button class="btn btn-primary " name="submit" type="submit">Xác Nhận</button>
            </div>
        <!-- Form code ends -->
    </div>
    </form>

    <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table" style="color: black;">
                <thead>
                <tr style="background: rgb(8, 27, 133); color: white;">
                    <th scope="col">STT</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số Ngày Làm Việc</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($all_user)) { ?>
                <?php $i = 1; ?>
                @foreach($all_user as $key => $user)
                    <tr>
                        <td class="tm-product-name"><?php echo $i;?></td>
                        <td>{{ $user->username }}</td>

                    </tr>
                    <?php $i += 1; ?>
                @endforeach
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- table container -->
    </div>

@endsection