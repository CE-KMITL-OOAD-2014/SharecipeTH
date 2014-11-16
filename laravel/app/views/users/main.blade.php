@extends("layouts.masterProfile")
@section("content")
<div class="container">
<?php
    $user = Auth::user();
    // $recipes = $user->recipe->toArray();
  ?>
   <br>
   <div class="row">
      <div class="col-lg-12">
         <div class="container" id="main">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="panel panel-default">
                     <div class="panel-heading"><a href="{{ route('editProfile') }}" class="pull-right" > 
                        <span class="glyphicon glyphicon-wrench"></span> แก้ไข </a> <h4>Profile</h4>
                     </div>
               		<div class="panel-body">
                        <a href="{{ route('profile') }}"><img class="img-circle" width="60" src = {{asset("/pic/user/$user->profilePicture")}} ></a> <a href="{{ route('profile') }}"> <b>{{ Auth::user()->name}}</b></a>
                        <div class="clearfix"></div>
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
            </div><!--/row-->
         </div>
      </div>
   </div>
      
      <div class="row"><hr>
        	<div class="col-md-12"><h2>เมนูใหม่</h2></div>
         @foreach($recipes as $recipe)
            <div class="col-sm-3 col-xs-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail " align="center">
                     <a href="{{'../recipe/show/'.$recipe['id']}}"><img src={{ asset("pic/recipe/$recipe->recipe_picture")}} class="img-responsive"></a>
                  </div>
                  <div class="panel-body ">
                     <a href="{{'../recipe/show/'.$recipe['id']}}"><p class="lead text-center">{{$recipe['name']}}</p></a>
                  </div>
               </div><!--/col-->
            </div>
         @endforeach
      </div>
   <hr>
@stop