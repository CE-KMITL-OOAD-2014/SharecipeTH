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
                  <div class="col-lg-4">
                    <label for="inputTime">เวลาในการทำ</label>
                    <input type="text" class="form-control" name="name" placeholder="time">
                  </div><!-- /.col-lg-4 -->
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <label for="br"></label>
                    <select class="form-control" id="sel1">
                      <option>นาที</option>
                      <option>ชั่วโมง</option>
                    </select>
                  </div><!-- /.col-lg-4 -->
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
                    <textarea class="form-control" rows="4" name="prepare"></textarea>
                  </div>
                </div>
                
                <div class="form-actions">
                <!-- <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up </button> -->
                  <input type="submit" value="สร้างเมนู" class="btn btn-primary">
                </div>
            {{ Form::close() }}
        </div>
    </div><hr />
   
@stop