@extends("layouts.masterRecipeShow")
@section("content")
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
  <br>
  <div class="row col-lg-8 col-lg-offset-2">
    <div class="well">
      <div class="media">
      	<a class=" col-lg-4" href="#">
      		<img class="img-responsive" src={{"../../../app/storage/pic/recipe/".$recipe->recipe_picture}}> 
    		</a>
    		<div class="media-body">
          <br>
      		<h4 class="media-heading">{{$recipe->name}}</h4>
          <p class="text-right">By Francisco</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
  Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
  dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
  Aliquam in felis sit amet augue.</p>
          <ul class="list-inline list-unstyled">
            <li><span><i class="glyphicon glyphicon-time"></i> {{$recipe->time_hour}} ชม. {{$recipe->time_minute}} นาที</span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            <li>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>           
  		    </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@stop