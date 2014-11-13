@extends("layouts.masterProfile")
@section("content")
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
  bkLib.onDomLoaded(function() {new nicEditor(
    {buttonList : ['bold','italic','underline','strikeThrough','html']}).panelInstance('area1');
  });
</script>
<div class="container">
        <div class="col-lg-12">
            <h1>แก้ไขข้อมูลส่วนตัว</h1>
            <hr>
              {{ Form::open(array('url'=>'user/edit','class'=>'form-edit','method' => 'post','files'=>true)) }}
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
                    <label for="inputUsername">ชื่อ </label>
                    <input type="text" class="form-control" name="name" placeholder="ชื่อใหม่">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputEmail">อีเมล </label>
                    <input type="email" class="form-control" name="email" placeholder="อีเมลใหม่">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="inputInfo">ข้อมูลผู้ใช้</label>
                    <textarea class="form-control" rows="5" id="area1" name="info">{{Auth::user()->info}}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputPassword">รหัสผ่านเดิม</label>
                    <input type="password" class="form-control" name="old_password" placeholder="พาสเวิร์ดเดิม">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputPassword">รหัสผ่าน</label>
                    <input type="password" class="form-control" name="password" placeholder="พาสเวิร์ดใหม่">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="verifyPassword">รหัสผ่าน(อีกครั้ง)</label>
                    <input type="password" class="form-control" name="password_again" placeholder="พาสเวิร์ดใหม่(อีกครั้ง)">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="picture">รูปภาพประจำตัว</label>
                    {{Form::file('profilePicture')}}
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="แก้ไขข้อมูล" class="btn btn-primary">
                </div>
            {{ Form::close() }}
          <hr>
              <p><a class="btn btn-danger" href="{{ route('remove-user') }}" role="button">ลบบัญชีผู้ใช้</a></p>
        </div>
    </div><hr />
   
@stop



