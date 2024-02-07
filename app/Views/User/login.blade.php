@extends('User.user')
@section('content')
<div class="container login">
            <div class="form-login">
                <img width="100%" src="app/Views/asset/img/signin.jpg" alt="">
                <div class="form-submit" >
                <form action="{{Route('/login')}}" method="post">
                    <h2>ĐĂNG NHẬP</h2>
                    <input type="email" name="email" placeholder="Địa chỉ email của bạn *" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
    required>
                    <input type="password" name="pass" placeholder="Mật khẩu *" required minlength="3" maxlength="100">
                    <p><a href="{{Route('/quenmk')}}">Bạn quên mật khẩu ?</a></p>
                    <button type="submit" name="dangnhap" value="Đăng nhập">Đăng nhập</button>
                    <p>Hoặc tiếp tục với </p>
                    <button><i class='bx bxl-facebook-circle'></i> FaceBook</button>
                    <button><i class='bx bxl-apple'></i> Apple</button>
                    <button><i class='bx bxl-google'></i> Google</button>
                    <p>Bạn chưa có tài khoản ? <a href="{{Route('/dangky')}}"> Đăng ký</a></p>
                </div>
                </form>
            </div>
    </div>
    @endsection
