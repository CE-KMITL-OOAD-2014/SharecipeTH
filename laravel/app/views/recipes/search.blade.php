@extends("layouts.masterRecipe")
@section("content")
<div class="container">
 <div class="col-lg-12">
            <h1>แก้ไขเมนูอาหาร</h1>
            <hr>

            {{ Form::open(array('url'=>'recipe/create','method' => 'post', 'files' => true)) }}
            {{ Form::close() }}
            <select class="form-control col-lg-4" >
            เลือกวิธีการทำ
            <!-- onchange="location.href='http://www.cartoonclub-th.com/fuuka/' + this.value + '/'" -->
            <option value="0" selected=" selected">--เลือกวิธีการทำ--</option>
            <option value="1">ตำ</option>
            <option value="2">ต้ม</option>
            <option value="3">ตุ๋น</option>
            <option value="4">นึ่ง</option>
            <option value="5">ผัด</option>
            <option value="6">ทอด</option>
            <option value="7">ปิ้งย่าง</option>
            <option value="8">ยำ</option>
            <option value="9">ลวก</option>
            <option value="10">หุง</option></select>

            <select class="form-control col-lg-4" >
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
           <option value="12">มากกว่า 5ชั่วโมง</option></select>

           <select class="form-control col-lg-4" >
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
            <option value="9">มากกว่า3000 kcal</option></select>
              <!-- <div class="btn-group" role="group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              เลือกกรรมวิธีการทำ
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
              <li><a href="#">ตำ</a></li>
              <li><a href="#">ต้ม</a></li>
              <li><a href="#">ตุ๋น</a></li>
              <li><a href="#">นึ่ง</a></li>
              <li><a href="#">ผัด</a></li>
              <li><a href="#">ทอด</a></li>
              <li><a href="#">ปิ้งย่าง</a></li>
              <li><a href="#">ยำ</a></li>
              <li><a href="#">ลวก</a></li>
              <li><a href="#">หุง</a></li>

              </ul>
              </div> -->
        </div><hr/>
   
@stop

