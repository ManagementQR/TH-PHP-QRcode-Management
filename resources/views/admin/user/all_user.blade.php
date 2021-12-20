@extends('admin_layout')
@section('admin_content')

    <h4 style="color: red; font-weight: bold; font-family: Tahoma; margin-bottom: 20px;"><i class="fas fa-users"></i>&ensp;Quản Lý Tài Khoản Người Dùng</h4>

    <?php $message = Session::get('message');
    if (isset($message)){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Thành Công! </strong> <?php echo $message;
        Session::put('message', null); // chỉ cho hiển thị một lần ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>

    <form action="{{URL::to('/search-user')}}" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right; padding-bottom: 10px;">
        {{csrf_field()}}
        <div class="input-group">
            <input type="text" class="form-control bg-gray-300 border-0 small" placeholder="Nhập user cần tìm kiếm ..."
                   aria-label="Search" aria-describedby="basic-addon2" id = 'username_search' name='username_search'>
            <div class="input-group-append">
                <button name="search_username" class="btn btn-primary" type="submit" style="background: #38d39f; border: 1px #38d39f solid;">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>


    <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table" style="color: black;">
                <thead>
                <tr style="background: rgb(8, 27, 133); color: white;">
                    <th scope="col">STT</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Mật Khẩu</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($all_user as $key => $user)
                    <tr>
                        <td class="tm-product-name"><?php echo $i;?></td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <?php
                            if (isset($user)){
                            if($user->status==1){
                            ?>
                            <a href="{{URL::to('/block-user/'.$user->username)}}"><span class="far fa-eye"></span></a>&ensp; Active
                            <?php
                            }else{ ?>
                            <a href="{{URL::to('/active-user/'.$user->username)}}"><span class="far fa-eye-slash"></span></a>&ensp;Block
                            <?php
                            } } ?>
                        </td>
                        <td>
                            <a href="{{URL::to('/edit-user/'.$user->username)}}" class="tm-product-delete-link">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i += 1; ?>
                @endforeach
                </tbody>
            </table>
            <span style="width: 100%;">{{ $all_user->appends(['sort' => 'username'])->links() }}</span>
        </div>
        <!-- table container -->
    </div>

@endsection