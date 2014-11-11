@extends("layouts.masterProfile")
@section("content")
<div class="container">
        <div class="col-lg-12">
            <h1>แก้ไขข้อมูลส่วนตัว</h1>
            <hr>
              {{ Form::open(array('url'=>'user/register','class'=>'form-signup','method' => 'post')) }}
              @if($errors->all())
              <div class='alert alert-danger'>
                    <h3>แจ้งเตือน</h3>
                    @foreach($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </div>
                @endif
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputUsername">ชื่อ "{{Auth::user()->name}}"</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputEmail">อีเมล "{{Auth::user()->email}}"</label>
                    <input type="email" class="form-control" name="mail" placeholder="Enter email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputUsername">ชื่อผู้ใช้ "{{Auth::user()->username}}"</label>
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
                <!-- <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up </button> -->
                  <input type="submit" value="ลงทะเบียน" class="btn btn-primary">
                </div>
            {{ Form::close() }}
        </div>
    </div><hr />
   
@stop



