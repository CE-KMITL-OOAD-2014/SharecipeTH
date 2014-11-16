@extends("layouts.masterProfile")
@section("content")
<div class="container">
  <hr>
    {{ Form::open(array('url'=>'user/report','method' => 'post')) }}
    @if(Session::has('error'))
      <div class="row">
        <div class="form-group col-lg-6">
          <div class='alert alert-danger'>
            <div class="alert-box error">
              <h3>แจ้งเตือน</h3>
              {{ Session::get('error') }}
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="row">
      <div class="form-group col-lg-6">
        <label for="inputPrepare">ติดต่อเรา</label>
        <textarea class="form-control" rows="4" name="report"></textarea>
      </div>
    </div>
    <div class="form-actions">
      <input type="submit" value="ส่งรายงาน" class="btn btn-default">
    </div>  
    {{ Form::close() }}
</div>
@stop