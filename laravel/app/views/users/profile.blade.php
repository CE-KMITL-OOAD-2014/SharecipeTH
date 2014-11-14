@extends("layouts.masterProfile")
@section("content")
<div class="container">
  <?php
    $user = Auth::user();
    /*return var_dump(User::find(1)->recipe->toArray());*/
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
            ยินดีต้อนรับ {{Auth::user()->name}} 
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
          <p><img class="img-responsive" src = {{"../../app/storage/pic/user/".Auth::user()->profilePicture}} ></p>
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
          <div class="col-md-10 col-sm-10">
            <div class="panel panel-default">
              <div class="panel-heading"><a href="{{ route('editProfile') }}" class="pull-right" > 
                <span class="glyphicon glyphicon-wrench"></span> แก้ไข </a> <h4>Profile</h4>
              </div>
              <div class="panel-body">
                <a data-toggle="modal" data-target="#picture" ><img class="img-circle "  width="150" src = {{"../../app/storage/pic/user/".Auth::user()->profilePicture}} ></a> <a href="{{ route('profile') }}">{{$user->name}}</a> <span class="label label-info">{{Auth::user()->recipe()->count()}} recipes</span>
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
                        {{Auth::user()->info}}
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
            <div class="col-sm-4 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail">
                  <img src="http://api.randomuser.me/portraits/med/men/20.jpg" class="img-responsive"></div>
                <div class="panel-body">
                  <p class="lead">Hacker News</p>
                  <p>120k Followers, 900 Posts</p>
                  <p>
                    <img src="http://api.randomuser.me/portraits/med/men/20.jpg" width="28px" height="28px">
                    <img src="http://api.randomuser.me/portraits/med/men/21.jpg" width="28px" height="28px">
                    <img src="http://api.randomuser.me/portraits/med/men/14.jpg" width="28px" height="28px">
                  </p>
                </div>
              </div>
            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail"><img src="//placehold.it/450X300/DD66DD/EE77EE" class="img-responsive"></div>
                <div class="panel-body">
                  <p class="lead">Bootstrap Templates</p>
                  <p>902 Followers, 88 Posts</p>
                  <p>
                    <img src="http://api.randomuser.me/portraits/med/men/4.jpg" width="28px" height="28px">
                    <img src="http://api.randomuser.me/portraits/med/men/24.jpg" width="28px" height="28px">
                  </p>
                </div>
              </div>
            </div><!--/col-->

            <div class="col-sm-4 col-xs-6">
             <div class="panel panel-default">
              <div class="panel-thumbnail"><img src="//placehold.it/450X300/2222DD/2222EE" class="img-responsive"></div>
              <div class="panel-body">
                <p class="lead">Social Media</p>
                <p>19k Followers, 789 Posts</p>

                <p>
                  <img src="http://api.randomuser.me/portraits/med/women/4.jpg" height="28px">
                  <img src="http://api.randomuser.me/portraits/med/men/4.jpg" width="28px" height="28px">
                </p>
              </div>
            </div>
          </div><!--/articles-->
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-12"><h2>Playground</h2></div>
        <div class="col-md-12">
          <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
         <div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Buttons &amp; Labels</h4></div>
           <div class="panel-body">
            <div class="row">
              <div class="col-xs-4"><a class="btn btn-default center-block" href="#">Button</a></div>
              <div class="col-xs-4"><a class="btn btn-primary center-block" href="#">Primary</a></div>
              <div class="col-xs-4"><a class="btn btn-danger center-block" href="#">Danger</a></div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-4"><a class="btn btn-warning center-block" href="#">Warning</a></div>
              <div class="col-xs-4"><a class="btn btn-info center-block" href="#">Info</a></div>
              <div class="col-xs-4"><a class="btn btn-success center-block" href="#">Success</a></div>
            </div>
            <hr>
            <div class="btn-group btn-group-sm"><button class="btn btn-default">1</button><button class="btn btn-default">2</button><button class="btn btn-default">3</button></div>              
            <hr>
            <div class="row">
              <div class="col-md-4">
                <span class="label label-default">Label</span>
                <span class="label label-success">Success</span>

              </div>
              <div class="col-md-4">
               <span class="label label-warning">Warning</span>  
               <span class="label label-info">Info</span>
             </div>
             <div class="col-md-4">
              <span class="label label-danger">Danger</span>
              <span class="label label-primary">Primary</span>
            </div>
          </div>

        </div>
      </div> 
      </div>
      <div class="col-md-6 col-sm-6">
       <div class="panel panel-default">
         <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Progress Bars</h4></div>
         <div class="panel-body">

          <div class="progress">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" style="width: 80%"></div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
          </div>

        </div>
      </div> 
      </div>
      <div class="col-md-6 col-sm-6">
       <div class="panel panel-default">
         <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Tabs</h4></div>
         <div class="panel-body">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
            <li><a href="#B" data-toggle="tab">Section 2</a></li>
            <li><a href="#C" data-toggle="tab">Section 3</a></li>
          </ul>
          <div class="tabbable">
            <div class="tab-content">
              <div class="tab-pane active" id="A">
                <div class="well well-sm">I'm in Section A.</div>
              </div>
              <div class="tab-pane" id="B">
                <div class="well well-sm">Howdy, I'm in Section B.</div>
              </div>
              <div class="tab-pane" id="C">
                <div class="well well-sm">I've decided that I like wells.</div>
              </div>
            </div>
          </div> <!-- /tabbable -->

          <div class="col-sm-12 text-center">
            <ul class="pagination center-block" style="display:inline-block;">
              <li><a href="#">«</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>

        </div>
      </div> 
      </div><!--playground-->

      <br>

      <div class="clearfix"></div>

      </div>
    </div>
  </div>
</div>
</div>
@stop