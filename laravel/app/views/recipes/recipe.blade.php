@extends("layouts.masterRecipeShow")
@section("content")
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
  <br>
  <div class="modal fade" id="picture">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Menu Picture</h4>
        </div>
        <div class="modal-body">
          <p><img class="img-responsive" src = {{"../../../app/storage/pic/recipe/".$recipe->recipe_picture}} ></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div class="row col-lg-10 col-lg-offset-1">
    <div class="well">
      <div class="media">
      		 <a data-toggle="modal" data-target="#picture" ><img class="img-responsive col-lg-4" src={{"../../../app/storage/pic/recipe/".$recipe->recipe_picture}}></a>
    		<div class="media-body">
          <br>
      		<h4 class="media-heading">{{$recipe->name}}
          <small>By <b>{{$recipe->user->name}}</b></small>
          </h4><hr>
          <ul class="list-inline list-unstyled">
            <li><span><i class="glyphicon glyphicon-time"></i> {{$recipe->time_hour}} ชม. {{$recipe->time_minute}} นาที</span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> {{$recipe->comment()->count()}} comments</span>
            <li>|</li>
            <li> 
              <span><div id="stars" class="starrr" data-rating='3'></div></span>
            </li>
            <li>|</li>
            <li>
            <small>calories</small>
            </li>  
            <li>|</li>
            <li>
              <span class="label label-info">{{$recipe->ingredient()->count()}} ingredient(s)</span>
            </li>
            
  		    </ul>
          
          <p>{{$recipe->prepare}}</p>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="well col-lg-offset-2 col-lg-8 ">
  <h3>ส่วนผสม</h3>
   @foreach($recipe->ingredient as $ingredient) 
    <!-- <div class="well well-sm"> -->
      <p><b>{{$ingredient->name}}</b>       {{$ingredient->quantity}}     <small>{{$ingredient->unit}}</small></p>
       
    <!-- </div> -->
    @endforeach
  </div>
  <div class="row col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
  
  @foreach($recipe->comment as $comment) 
  <!-- <div class="well well-sm"> -->
    <div class="media">
      <a href={{"../../profile/".$comment->user->username}}>
        <img class="img-responsive col-lg-4 col-md-4 col-sm-4 col-xs-4" src={{"../../../app/storage/pic/user/".$comment->user->profilePicture}} >
      </a>
      <div class="media-body"> 
        <h4 class="media-heading">{{$comment->user->name}}
            <small>{{$comment->created_at}}</small>
        </h4>
        {{$comment->comment}}
      </div>
    </div>
  <!-- </div> -->
  @endforeach
  <hr>
  <!-- Blog Comments -->
    <!-- Comments Form -->
    <div class="well">
        <h4>คอมเมนต์เมนูอาหาร</h4>
            {{ Form::open(array('url'=>'recipe/comment','method' => 'get')) }}
            <div class="form-group">
              <textarea class="form-control" rows="3" name="comment"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="recipe_id" value="{{$recipe->id}}">
            </div>
            <input type="submit" value="โพสท์คอมเมนต์" class="btn btn-lg btn-success">
         {{ Form::close() }}
    </div>
    
</div>

<script type="text/javascript">
var __slice = [].slice;

(function($, window) {
    var Starrr;

    Starrr = (function() {
        Starrr.prototype.defaults = {
            rating: void 0,
            numStars: 5,
            change: function(e, value) {}
        };

        function Starrr($el, options) {
            var i, _, _ref,
                _this = this;

            this.options = $.extend({}, this.defaults, options);
            this.$el = $el;
            _ref = this.defaults;
            for (i in _ref) {
                _ = _ref[i];
                if (this.$el.data(i) != null) {
                    this.options[i] = this.$el.data(i);
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on('mouseover.starrr', 'i', function(e) {
                return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('mouseout.starrr', function() {
                return _this.syncRating();
            });
            this.$el.on('click.starrr', 'i', function(e) {
                return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('starrr:change', this.options.change);
        }

        Starrr.prototype.createStars = function() {
            var _i, _ref, _results;

            _results = [];
            for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                _results.push(this.$el.append("<i class='fa fa-star-o'></i>"));
            }
            return _results;
        };

        Starrr.prototype.setRating = function(rating) {
            if (this.options.rating === rating) {
                rating = void 0;
            }
            this.options.rating = rating;
            this.syncRating();
            return this.$el.trigger('starrr:change', rating);
        };

        Starrr.prototype.syncRating = function(rating) {
            var i, _i, _j, _ref;

            rating || (rating = this.options.rating);
            if (rating) {
                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                    this.$el.find('i').eq(i).removeClass('fa-star-o').addClass('fa-star');
                }
            }
            if (rating && rating < 5) {
                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                    this.$el.find('i').eq(i).removeClass('fa-star').addClass('fa-star-o');
                }
            }
            if (!rating) {
                return this.$el.find('i').removeClass('fa-star').addClass('fa-star-o');
            }
        };

        return Starrr;

    })();
    return $.fn.extend({
        starrr: function() {
            var args, option;

            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function() {
                var data;

                data = $(this).data('star-rating');
                if (!data) {
                    $(this).data('star-rating', (data = new Starrr($(this), option)));
                }
                if (typeof option === 'string') {
                    return data[option].apply(data, args);
                }
            });
        }
    });
})(window.jQuery, window);

$(function() {
    return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
</script>
@stop