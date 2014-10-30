@extends("layouts.master")
@section("content")
<div class="container">
        <div class="col-lg-12">
            <h1>ลงทะเบียน</h1>
            <hr>
              {{ Form::open(array('url'=>'user/register','method' => 'post')) }}
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputEmail">อีเมล</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputUsername">ชื่อผู้ใช้</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputPassword">รหัสผ่าน</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="verifyPassword">รหัสผ่าน(อีกครั้ง)</label>
                    <input type="password" class="form-control" name="password_again" placeholder="Password(again)">
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="ลงทะเบียน" class="btn btn-primary">
                </div>
            {{ Form::close() }}
        </div>
    </div><hr />
   
@stop



