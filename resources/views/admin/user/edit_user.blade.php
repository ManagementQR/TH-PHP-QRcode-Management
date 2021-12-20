@extends('admin_layout')
@section('admin_content')

    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Cập Nhật Tài Khoản Người Dùng</h2>
            </div>
        </div>
        <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                @foreach($edit_user as $key => $edit_value)
                    <form action="{{URL::to('/update-user/'.$edit_value->username)}}" class="tm-edit-product-form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="name">Username</label>
                            <input
                                    id="Username"
                                    name="Username"
                                    type="text"
                                    readonly="readonly"
                                    class="form-control validate"
                                    value="{{$edit_value->username}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Họ và Tên</label>
                            <input
                                    id="fullname"
                                    name="fullname"
                                    type="text"
                                    class="form-control validate"
                                    value="{{$edit_value->fullname}}"
                                    oninvalid="this.setCustomValidity('Họ và tên không được để trống!')"
                                    oninput="this.setCustomValidity('')"
                                    required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="category">Giới tính</label>
                            <select class="custom-select tm-select-accounts"
                                    id="category_status"
                                    name="category_status">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Mật khẩu</label>
                            <input
                                    id="password"
                                    name="password"
                                    type="text"
                                    class="form-control validate"
                                    value="{{$edit_value->password}}"
                                    oninvalid="this.setCustomValidity('Mật khẩu không được để trống!')"
                                    oninput="this.setCustomValidity('')"
                                    required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Địa chỉ</label>
                            <input
                                    id="address"
                                    name="address"
                                    type="text"
                                    class="form-control validate"
                                    value="{{$edit_value->address}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Ngày sinh</label>
                            <input
                                    id="dateOfBirth"
                                    name="dateOfBirth"
                                    type="date"
                                    class="form-control validate"
                                    value="{{$edit_value->dateOfBirth}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Hỉnh ảnh người dùng</label>
                            <input
                                    id="avatarImg"
                                    name="avatarImg"
                                    type="file"
                                    class="form-control validate"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Số điện thoại</label>
                            <input
                                    id="phoneNumber"
                                    name="phoneNumber"
                                    type="text"
                                    class="form-control validate"
                                    value="{{$edit_value->phoneNumber}}"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Email</label>
                            <input
                                    id="email"
                                    name="email"
                                    type="text"
                                    class="form-control validate"
                                    value="{{$edit_value->email}}"/>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block text-uppercase" name="add_category" style="margin-bottom: 25px;">Cập Nhật Tài Khoản</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>

@endsection