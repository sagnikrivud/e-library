<header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <!-- <img class="navbar-brand-full" src="<?php echo url('/');?>/Images/brand/logo.png" width="89" height="25" alt="CoreUI Logo"> -->
       <!--  <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo"> -->
      </a>
     <!--  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button> -->
     <!--  <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul> -->
      <center>
<style type="text/css">body {
    background: black;
}

.clock {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: #17D4FE;
    font-size: 20px;
    font-family: Orbitron;
    letter-spacing: 2px;
   


}</style>
<html>
  <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
</html>
<script type="text/javascript">
  function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + "-" + m + "-" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>
      </center>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <!-- <span class="badge badge-pill badge-danger">5</span> -->
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="<?php echo url('/');?>/Images/brand/logo.png" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
           <!--  <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div> -->
            <!-- <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a> -->
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="{{ route('logout') }}">
              <i class="fa fa-lock"></i> Logout</a>
           <!--  <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a> -->
           <!--  <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a> -->
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            
          </div> -->
        </li>
      </ul>
      <!-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>