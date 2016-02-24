<div class="row">
    <div class="col-*-*">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <!-- navbar header -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Online Leave Application</a>
                </div>

                <!-- navbar left -->
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#/welcome">Home</a></li>
                  <li><a href="#/applyLeave">Leave</a></li>
                  <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                        <span class="caret"></span>Setting</a>
                        <ul class="dropdown-menu">
                            <li><a href="#/category">Category</a></li>
                            <li><a href="#/employees">Employee</a></li>
                            <li><a href="#/role">Role</a></li> 
                        </ul>
                  </li> 
                  <li><a href="{{url('/hello')}}">About us</a></li>
                </ul>

                <!-- navbar right -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>