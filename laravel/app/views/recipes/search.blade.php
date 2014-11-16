@extends("layouts.masterRecipe")
@section("content")
<div class="container">
  <div class="col-lg-12">
    <h1>ตัวช่วยการค้นหา</h1>
    <hr>
    {{ Form::open(array('url'=>'recipe/search','method' => 'get')) }}
    <div class="row">
      <div class="col-lg-3">
        <input type="text" class="form-control" placeholder="ชื่อเมนู" name="name" >
      </div>
      <div class="col-lg-3">
        <select class="form-control" name="type">
      เลือกวิธีการทำ
      <!-- onchange="location.href='http://www.cartoonclub-th.com/fuuka/' + this.value + '/'" -->
         <option value="0" selected=" selected">--เลือกวิธีการทำ--</option>
         <option value="ตำ">ตำ</option>
         <option value="ต้ม">ต้ม</option>
         <option value="ตุ๋น">ตุ๋น</option>
         <option value="นึ่ง">นึ่ง</option>
         <option value="ผัด">ผัด</option>
         <option value="ทอด">ทอด</option>
         <option value="ปิ้งย่าง">ปิ้งย่าง</option>
         <option value="ยำ">ยำ</option>
         <option value="ลวก">ลวก</option>
         <option value="หุง">หุง</option>
        </select>
      </div>
    <div class="col-lg-3">
      <select class="form-control" name="time">
         เลือกเวลาในการทำ
         <!-- onchange="location.href='http://www.cartoonclub-th.com/fuuka/' + this.value + '/'" -->
         <option value="0" selected="selected">--เลือกเวลาในการทำ--</option>
         <option value="1">น้อยกว่า 15นาที</option>
         <option value="2">16  นาที ถึง 30  นาที</option>
         <option value="3">30  นาที ถึง 1   ชม.</option>
         <option value="4"> 1  ชม. ถึง 1.30ชม.</option>
         <option value="5">1.30ชม. ถึง 2   ชม.</option>
         <option value="6"> 2  ชม. ถึง 2.30ชม.</option>
         <option value="7">2.30ชม. ถึง 3   ชม.</option>
         <option value="8"> 3  ชม. ถึง 3.30ชม.</option>
         <option value="9">3.30ชม. ถึง 4   ชม.</option>
         <option value="10"> 4  ชม. ถึง 4.30ชม.</option>
         <option value="11">4.30ชม. ถึง 5   ชม.</option>
         <option value="12">มากกว่า 5ชั่วโมง</option>
      </select>
    </div>
  <div class="col-lg-3">
      <select class="form-control" name="cal">
        เลือกปริมาณแคลอรี่
        <!-- onchange="location.href='http://www.cartoonclub-th.com/fuuka/' + this.value + '/'" -->
        <option value="0" selected="selected">--เลือกปริมาณแคลอรี่--</option>
        <option value="1">น้อยกว่า 100 kcal</option>
        <option value="2"> 101- 200 kcal</option>
        <option value="3"> 201- 350 kcal</option>
        <option value="4"> 351- 500 kcal</option>
        <option value="5"> 501-1000 kcal</option>
        <option value="6">1001-1500 kcal</option>
        <option value="7">1501-2000 kcal</option>
        <option value="8">2001-3000 kcal</option>
        <option value="9">มากกว่า3000 kcal</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-2">
      <input type="submit" class="btn btn-default" value="ค้นหา" >
    </div>
  </div>
  {{ Form::close() }}
  <hr>
  <div class="row">
         <div class="col-md-12"><h2>เมนูอาหาร</h2></div>
          @foreach($recipes as $recipe)
            <div class="col-sm-3 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="{{'../recipe/show/'.$recipe['id']}}"><img src={{"../../app/storage/pic/recipe/".$recipe['recipe_picture']}} class="img-responsive"></div></a>
                <div class="panel-body ">
                  <a href="{{'../recipe/show/'.$recipe['id']}}"><p class="lead text-center">{{$recipe['name']}}</p></a>
                </div>
              </div>
            </div><!--/col-->
          @endforeach
          </div><!--/articles-->
        </div>
</div>
@stop

