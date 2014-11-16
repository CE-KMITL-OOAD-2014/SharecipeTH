@extends("layouts.masterProfile")

@section("content")
<div class="container">
  <?php
    $user = Auth::user();
    // $recipes = $user->recipe->toArray();
  ?>
  <br>
  <div class="row">
    <div class="col-lg-6">
      @if(Session::has('success'))
        <div class='alert alert-info'>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="alert-box success">
            <h2>{{ Session::get('success') }}</h2>
          </div>
        </div>
      @endif
      @if(Session::has('login'))
        <div class='alert alert-info'>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="alert-box login">
            <h2>{{ Session::get('login') }}</h2>
            ยินดีต้อนรับ {{$user->name}} 
          </div>
        </div>
      @endif
    </div>    
  </div>
  <div class="modal fade" id="picture">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Profile Picture</h4>
        </div>
        <div class="modal-body">
          <p><img class="img-responsive" src = {{ asset("/pic/user/$user->profilePicture")}} ></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div class="row">
    <div class="col-lg-12">
      <div class="container" id="main">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading"><a href="{{ route('editProfile') }}" class="pull-right" > 
                <span class="glyphicon glyphicon-wrench"></span> แก้ไข </a> <h4>Profile</h4>
              </div>
              <div class="panel-body">
                <a data-toggle="modal" data-target="#picture" ><img class="img-circle "  width="150" src = {{asset("/pic/user/$user->profilePicture")}} ></a> <a href="{{ route('profile') }}"><b>{{$user->name}}</b></a> <span class="label label-info">{{$user->recipe()->count()}} recipe(s)</span>
                <div class="clearfix"></div>
                <hr>
                <div class="panel-group col-lg-6" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ข้อมูล
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        {{$user->info}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="well"> 
                    <form class="form">
                      <h4>สร้างเมนูอาหาร</h4>
                      <div class="row">
                        <div class="col-xs-4 pull-right" ><a class="btn btn-success center-block" href="{{ route('create') }}">สร้าง</a></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--/row-->
        <hr>
        <div class="row">
         <div class="col-md-12"><h2>เมนูของฉัน</h2></div>
          @foreach($user->recipe as $recipe)
            <div class="col-sm-3 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <a href="{{'../recipe/show/'.$recipe['id']}}"><img src={{ asset("pic/recipe/$recipe->recipe_picture")}} class="img-responsive"></div></a>
                <div class="panel-body ">
                  <a href="{{'../recipe/show/'.$recipe['id']}}"><p class="lead text-center">{{$recipe['name']}}</p></a>
                </div>
              </div>
            </div><!--/col-->
          @endforeach
          </div><!--/articles-->
        </div>
      </div>
      <hr>
      </div>
    </div>
  </div>
</div>
</div>
@stop