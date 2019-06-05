 <!-- Header-->
 <nav class="navbar navbar-expand-md navbar-default fixed-top">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="index.html">
               <img src="{{asset('images/logo-gracom.png')}}" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
            <form class="navbar-form  mr-auto">
                <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
            </form>
            <ul class="nav navbar-nav">
                <li class="nav-item uppercase-link">
                    <a href="versions.html" class="nav-link">Sair
                        <span class="label label-warning pull-right">2</span>
                    </a>
                </li>
                <li class="nav-item profil-link">
                    <a href="login.html">
                        <span class="profile-address">luna@company.io</span>
                        <img src=" {{asset('images\profile.jpeg')}}" class="rounded-circle" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>