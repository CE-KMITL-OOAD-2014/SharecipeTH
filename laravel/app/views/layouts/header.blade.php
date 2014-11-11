@section("header")
<div class="container">
  <div class="header">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" rel="home" href="#">SharecipeTH</a>
        </div>
    
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#popular">เมนูยอดนิยม</a></li>
              <li><a href="{{ route('report') }}">ติดต่อเรา</a></li>
            </ul>
      
<!--login -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
            </ul>
  <!--search-->
            <form class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="ค้นหา" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
  <!--end search-->
        </div>
      </div>
    </div>
  </div>
</div>
@show

