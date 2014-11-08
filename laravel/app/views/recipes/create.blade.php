@extends("layouts.masterProfile")
@section("content")
<div class="container">
        <div class="col-lg-12">
            <h1>สร้างเมนูอาหาร</h1>
            <hr>
              {{ Form::open(array('url'=>'recipe/create','method' => 'post')) }}
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputMenuName">ชื่อเมนู</label>
                    <input type="text" class="form-control" name="name" placeholder="menu name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputTime">เวลาในการทำ</label>
                    <input type="email" class="form-control" name="mail" placeholder="time">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputMethod">วิธีการทำ</label>
                    <input type="text" class="form-control" name="username" placeholder="Method">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputPrepare">ขั้นตอนการทำ</label>
                    <input type="text" class="form-control" name="username" placeholder="Preparation">
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



