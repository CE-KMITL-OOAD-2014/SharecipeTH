@extends("layouts.master")
@section("content")

<div class="col-lg-12">
  <h1>เข้าสู่ระบบ</h1>
  <hr>
    {{ Form::open(array('url'=>'user/login','class'=>'form-signin','method' => 'post')) }}
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
          <label for="exampleInputEmail1">ชื่อผู้ใช้</label>
          {{ Form::text('username','',array(
          'class'=>'form-control','placeholder'=>'Username')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-4">
          <label for="Password">รหัสผ่าน</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      </div>
    <div class="form-actions">
      <input type="submit" value="ล๊อกอิน" class="btn btn-default">
    </div>
  {{ Form::close() }}
</div>

@stop

