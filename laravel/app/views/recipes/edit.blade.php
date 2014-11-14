@extends("layouts.masterRecipe")
@section("content")
<div class="container">
        <div class="col-lg-12">
            <h1>แก้ไขเมนูอาหาร</h1>
            <hr>
              {{ Form::open(array('url'=>'recipe/create','method' => 'post', 'files' => true)) }}
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
                    <label for="recipePicture">เปลี่ยนรูปภาพอาหาร</label>
                    {{Form::file('recipePicture')}}
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputMenuName">ชื่อเมนูใหม่</label>
                    <input type="text" class="form-control" name="name" placeholder="Menu name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-2">
                    <label for="inputHour">เวลาในการทำ (ชั่วโมง)</label>
                    <!-- <input type="text" class="form-control" name="timeH" placeholder="ชั่วโมง"> -->
                    <input type="text" class="span2" name="timeH" data-slider-min="0" data-slider-max="24" value="0" id="sl1">
                  </div><!-- /.col-lg-4 -->
                  <div class="form-group col-lg-2">
                  <label for="inputMintue"> นาที </label>
                    <!-- <input type="text" class="form-control" name="timeM" placeholder="นาที"> -->
                    <input type="text" class="span2" name="timeM" data-slider-min="0" data-slider-max="59" value="0" id="sl2">                  
                  </div><!-- /.col-lg-4 -->
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputMethod">วิธีการทำ</label>
                    <input type="text" class="form-control" name="method" placeholder="ทอด,ต้ม,ย่าง...">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="inputPrepare">ขั้นตอนการทำ</label>
                    <textarea class="form-control" rows="5" id="area1" name="prepare">{{$recipe->prepare}}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group col-lg-4">
                      <label for="inputIngredient">ส่วนผสม</label>
                      <input type="text" class="form-control" name="ingredient[]" placeholder="Ingredient Name">
                    </div>
                    <div class="form-group col-lg-2">
                      <label for="inputQuantity">จำนวน</label>
                      <input type="text" class="form-control" name="quantity[]" placeholder="Quantity">
                    </div>
                    <div class="form-group col-lg-2">
                      <label for="inputUnit">หน่วย</label>
                      <input type="text" class="form-control" name="unit[]" placeholder="Unit">
                    </div>
                  </div>
                  <div id="ingredient"> <!-- add more ingredient --> </div> 

                </div>
                <div class="form-actions">
                  <input type="submit" value="แก้ไขเมนู" class="btn btn-primary">
                </div>
            {{ Form::close() }}

        </div>
        <div class="col-lg-4">
          <button type="button" class="btn btn-primary" onclick="toggler('ingredient');">เพิ่มส่วนผสม</button>
          <button type="button" class="btn btn-danger" onclick="deToggler('ingredient');">ลบส่วนผสม</button>
        </div>
        <hr>
              <p><a class="btn btn-danger" href="{{ route('remove-user') }}" role="button">ลบบัญชีผู้ใช้</a></p>
            <br>
    </div><hr />
   
    <script type="text/javascript">

    $('#sl1').slider({
          formater: function(value) {
            return value+' ชม.';
          }
        });
    $('#sl1').slider('setValue', 0);

    $('#sl2').slider({
          formater: function(value) {
            return value+' นาที';
          }
        });
    $('#sl2').slider('setValue', 0);
    </script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() {new nicEditor(
        {buttonList : ['bold','italic','underline','strikeThrough','html','image']}).panelInstance('area1');}
      );
    </script>
   
@stop

