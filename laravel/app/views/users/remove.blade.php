@extends("layouts.masterProfile")
@section("content")
<div class="container">
   <div class="col-lg-12">
      <h1>ลบบัญชีผู้ใช้</h1>
      <hr>
      {{ Form::open(array('url'=>'user/remove','class'=>'form-edit','method' => 'post')) }}
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
               <label for="inputPassword">ยืนยันรหัสผ่าน</label>
               <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
            </div>
         </div>
         <div class="row">
            <div class="form-group col-lg-4">
               <label for="verifyPassword">รหัสผ่าน(อีกครั้ง)</label>
               <input type="password" class="form-control" name="password_again" placeholder="รหัสผ่าน(อีกครั้ง)">
            </div>
         </div>
            <div class="form-actions">
               <input type="submit" value="ยืนยันลบบัญชีผู้ใช้" class="btn btn-danger">
            </div>
      {{ Form::close() }}
   </div>
</div>
<hr />
@stop