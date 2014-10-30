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
              <li><a href="#home">หน้าหลัก</a></li>
              <li><a href="#popular">เมนูยอดนิยม</a></li>
              <li><a href="#contactus">ติดต่อเรา</a></li>
            </ul>
      
<!--login -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="user/login">เข้าสู่ระบบ/สมัครสมาชิก</a></li>
             <!--  <li class="dropdown" id="menuLogin">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">เข้าสู่ระบบ/สมัครสมาชิก</a>
                <div class="dropdown-menu" style="padding:17px;">
                  <label>เข้าสู่ระบบ</label>
                  <form id="formlogin" class="form in collapse" style="height: auto;">
                   <input name="username" id="username" type="text" placeholder="ชื่อผู้ใช้" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Enter your username" required="">
                   <br><br>
                   <input name="password" id="password" type="password" placeholder="รหัสผ่าน" title="Enter your password" required="">
                  <br>
                  <button type="submit" id="btnLogin" class="btn btn-default navbar-btn">เข้าสู่ระบบ</button> 
                  <br>
                  <a data-toggle="modal" role="button" href="#forgotPassword">ลืมรหัสผ่าน?</a>
                  </form>
                  <label><br>สมัครสมาชิก (ผู้ใช้ใหม่)</label>
                  <form id="formregister" class="form in collapse" style="height: auto;">
                    <input name="email" id="inputEmail" type="email" placeholder="Email" title="Enter your email" required="">
                    <br><br>
                    <input name="username" id="inputusername" type="text" placeholder="username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Choose a username" required=""><br>
                    <br>
                    <input name="password" id="inputpassword" type="password" placeholder="Password" title="Choose password" required=""> 
                    <br><br>
                    <input name="verify" id="inputverify" type="password" placeholder="Password (again)" title="Enter password again" required=""><br>                                  
                    <br>
                    <button type="submit" id="btnRegister" class="btn btn-primary">สมัครสมาชิก</button>
                  </form>
                </div>
              </li>

              <li class="dropdown hide" id="menuUser">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Manage your profile">
                    <i class="icon-user icon-xxlarge"> </i> <span id="lblUsername"></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#addnewrecipe">เพิ่มสูตรอาหาร</a></li>
                    <li><a href="/logout">ออกจากระบบ</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">จัดการบัญชีของคุณ</li>
                    <li><a href="#editprofile">แก้ไขข้อมูลส่วนตัว</a></li>
                    <li><a href="#deleteaccount">ลบบัญชีผู้ใช้</a></li>
                </ul>
              </li> -->

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

