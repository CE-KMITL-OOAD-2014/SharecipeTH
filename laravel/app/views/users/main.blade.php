@extends("layouts.masterProfile")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container" id="main">
   <div class="row">
   <div class="col-md-4 col-sm-6">
        <div class="panel panel-default">
	        <div class="panel-heading"><a href="#" class="pull-right" > 
	          	<span class="glyphicon glyphicon-wrench"></span> Edit </a> <h4>Profile</h4>
	        </div>
   			<div class="panel-body">
              	<img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=70" class="img-circle"> <a href="{{ route('profile') }}">{{Auth::user()->name}}</a>
              	<div class="clearfix"></div>
              <hr>
              <p> info </p>
            </div>
   		</div>

	</div>
  	<div class="col-md-6 col-sm-6">
          
          <div class="well"> 
             <form class="form">
              <h4>สร้างเมนูอาหาร</h4>
              <div class="row">
                <div class="col-xs-4 pull-right" ><a class="btn btn-success center-block" href="#">สร้าง</a></div>
              </div>
            </form>
          </div>    
  	</div>
  	
  </div><!--/row-->
  
  <hr>
  
  <div class="row">
  	<div class="col-md-12"><h2>Posts</h2></div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Upgrade to Bootstrap 3</h4></div>
   			<div class="panel-body">
              <img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=70" class="img-circle pull-right"> <a href="#">Guidance and Tools</a>
              <div class="clearfix"></div>
              <hr>
              <p>Migrating from Bootstrap 2.x to 3 is not a simple matter of swapping out the JS and CSS files.
              Bootstrap 3 is a major overhaul, and there are a lot of changes from Bootstrap 2.x. <a href="http://bootply.com/bootstrap-3-migration-guide">This guidance</a> is intended to help 2.x developers transition to 3.
              </p>
              <h5><a href="http://google.com/+bootply">More on Upgrading from +Bootply</a></h5>
              
            </div>
         </div> 
    </div>
     <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Profiles</h4></div>
   			<div class="panel-body">
              Check out some of our member profiles..
              <hr>
              <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="//placehold.it/80">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                		<p><span class="label label-info">10 photos</span> <span class="label label-primary">89 followers</span></p>
                        <p>
                           <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                           <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                        </p>
                    </div>
                </div>
               </div>
            </div>
         </div> 
    </div>
     <div class="col-md-4 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Inspiration</h4></div>
   			<div class="panel-body">
              <img src="//placehold.it/150" class="img-circle pull-right"> <a href="#">Articles</a>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <img src="http://placehold.it/120x90/3333CC/FFF" class="img-responsive img-thumbnail pull-right">
              <p>The more powerful (and 100% fluid) Bootstrap 3 grid now comes in 4 sizes (or "breakpoints"). Tiny (for smartphones), Small (for tablets), Medium (for laptops) and Large (for laptops/desktops).</p>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <img src="http://placehold.it/120x90/33CC33/FFF" class="img-responsive img-thumbnail pull-left" style="margin-right:5px;">
              <p>Mobile first" is a responsive Web design practice that prioritizes consideration of smart phones and mobile devices when creating Web pages.</p>
              
              
            </div>
         </div> 
    </div><!--/articles-->
    </div>
    
    <hr>
  
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
        <div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/450X300/DD3333/EE3333" class="img-responsive"></div>
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
      </div><!--/col-->
     
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