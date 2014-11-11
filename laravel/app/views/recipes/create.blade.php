@extends("layouts.masterRecipe")
@section("content")
<div class="container">
        <div class="col-lg-12">
            <h1>สร้างเมนูอาหาร</h1>
            <hr>
              {{ Form::open(array('url'=>'recipe/create','method' => 'post')) }}
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputMenuName">ชื่อเมนู</label>
                    <input type="text" class="form-control" name="menu" placeholder="Menu name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="inputTime">เวลาในการทำ</label>
                    <input type="text" class="form-control" name="time" placeholder="Time">
                  </div><!-- /.col-lg-4 -->
                  <div class="form-group col-lg-2">
                    <label for="inputTime">หน่วยเวลา</label>
                    <select class="form-control" id="sel1" name="tUnit">
                      <option>นาที</option>
                      <option>ชั่วโมง</option>
                    </select>
                  </div><!-- /.col-lg-4 -->
                  <div class="form-group col-lg-2">
                    <label for="inputTime">นาที</label>
                    <select class="selectpicker" data-size="5">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
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
                    <textarea class="form-control" rows="5" name="Prepare"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group col-lg-4">
                      <label for="inputPrepare">ส่วนผสม</label>
                      <input type="text" class="form-control" name="ingredient" placeholder="Ingredient">
                    </div>
                    <div class="form-group col-lg-2">
                      <label for="inputPrepare">จำนวน</label>
                      <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                    </div>
                    <div class="form-group col-lg-2">
                      <label for="inputPrepare">หน่วย</label>
                      <input type="text" class="form-control" name="unit" placeholder="Unit">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient1" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient1" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity1" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit1" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient2" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient2" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity2" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit2" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient3" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient3" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity3" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit3" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient4" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient4" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity4" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit4" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient5" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient5" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity5" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit5" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient6" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient6" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity6" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit6" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient7" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient17" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity7" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit7" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="ingredient8" style="display: none">
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="ingredient8" placeholder="Ingredient">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="quantity8" placeholder="Quantity">
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" name="unit8" placeholder="Unit">
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="สร้างเมนู" class="btn btn-primary">
                </div>
            {{ Form::close() }}
            <br>
        </div>
        <div class="col-lg-4">
          <button type="button" class="btn btn-primary" onclick="toggler('ingredient');">เพิ่มส่วนผสม</button>
          <button type="button" class="btn btn-danger" onclick="deToggler('ingredient');">ลบส่วนผสม</button>
        </div>
    </div><hr />
   
@stop

