@extends('share.__layout')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{url('css/user_css.css')}}">
@stop
@Section('center')
<div class="center-content-re col-md-8">
    <div class="center_content ">
    	<div class="titlepage">
    		<h3>Đăng ký</h3>
    		<p>Cảm ơn bạn đã đăng ký vào hệ thống của chúng tôi!</p>
    	</div>
        <div clas="group-control mrbt_10">
        	<label>Họ và tên: </label>
        	<input type='text' name="name" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Tên đăng nhập: </label>
        	<input type='text' name="username" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Mật khẩu: </label>
        	<input type='password' name="password" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Nhập lại mật khẩu: </label>
        	<input type='password' name="etpassword" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Email: </label>
        	<input type='email' name="email" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Địa chỉ: </label>
        	<input type='text' name="address" class="form-control" />
        </div>
        <div clas="group-control">
        	<label>Số điện thoại: </label>
        	<input type='number' name="numberphone" class="form-control" />
        </div>
    </div>
</div>
@stop