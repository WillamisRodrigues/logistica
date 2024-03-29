@extends('layouts.app')

@section('title','Home | Logistica')

@section('content')
    @include('layouts.menus.menu')
    @include('layouts.menus.aside')
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <small>Luna Admin Theme<br>Dashboard<br> <span class="c-white">v.1.4</span></small>
                        </div>
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">Luna Admin Theme</h3>
                            <small>
                                Special minimal admin theme with Dark UI style for monitoring or administration web applications.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">

                        <div class="panel-body">
                            <h2 class="m-b-none">
                                206 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +20%</span>
                            </h2>

                            <div class="small">% New Sessions</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">10:22pm</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                140 <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> 5%</span>
                            </h2>

                            <div class="small">Total visitors</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">9:10am</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                262 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +56%</span>
                            </h2>

                            <div class="small">Total users</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">05:42pm</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                62% <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +18%</span>
                            </h2>

                            <div class="small">Bounce Rate</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">04:00am</span></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-xs-12">
                    <div class="panel panel-filled" style="position:relative;height: 114px">
                        <div style="position: absolute;bottom: 0;left: 0;right: 0">
                            <span class="sparkline"></span>
                        </div>
                        <div class="panel-body">
                            <div class="m-t-sm">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-xs">See locations</a>
                                </div>
                                <div class="c-white"><span class="label label-accent">+45</span> New visitor</div>
                                <span class="small c-white">120,312 <i class="fa fa-play fa-rotate-270 text-warning"> </i> -22%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="panel-body h-200 list">
                                    <div class="stats-title">
                                        <h4><i class="fa fa-bar-chart text-warning" aria-hidden="true"></i> Traffic source</h4>
                                    </div>
                                    <div class="small">
                                        Total users from the beginning of activity. See detailed charts for more information locations and traffic source.
                                    </div>

                                    <div class="sparkline3"></div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <small class="stat-label">Today</small>
                                            <h4 class="m-t-xs">170,20 <i class="fa fa-level-up text-warning"></i></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <small class="stat-label">Last month %</small>
                                            <h4 class="m-t-xs">%20,20 <i class="fa fa-level-down c-white"></i></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <small class="stat-label">Year</small>
                                            <h4 class="m-t-xs">2180,50 <i class="fa fa-level-up text-warning"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel-body">
                                    <div class="text-center slight">
                                    </div>

                                    <div class="flot-chart" style="height: 160px;margin-top: 5px">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>

                                    <div class="small text-center">All active users from last month.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Street Address</th>
                                    <th>% Share</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Abraham</td>
                                    <td>076 9477 4896</td>
                                    <td>294-318 Duis Ave</td>
                                    <td>
                                        <div class="sparkline8"></div>
                                    </td>
                                    <td>Vosselaar</td>
                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                </tr>
                                <tr>
                                    <td>Phelan</td>
                                    <td>0500 034548</td>
                                    <td>680-1097 Mi Rd.</td>
                                    <td>
                                        <div class="sparkline10"></div>
                                    </td>
                                    <td>Lavoir</td>
                                    <td><a href="#" class="btn btn-default btn-xs active">View</a></td>
                                </tr>
                                <tr>
                                    <td>Raya</td>
                                    <td>(01315) 27698</td>
                                    <td>Ap #289-8161 In Avenue</td>
                                    <td>
                                        <div class="sparkline11"></div>
                                    </td>
                                    <td>Santomenna</td>
                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                </tr>
                                <tr>
                                    <td>Azalia</td>
                                    <td>0500 854198</td>
                                    <td>226-4861 Augue. St.</td>
                                    <td>
                                        <div class="sparkline12"></div>
                                    </td>
                                    <td>Newtown</td>
                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-b-accent">
                        <div class="panel-body text-center p-m">
                            <h2 class="font-light">
                                +280k downloads
                            </h2>
                            <small>New downloads from the last month.</small>
                            <br>
                            120,312 <span class="slight"><i class="fa fa-play fa-rotate-270 c-white"> </i> -22%</span>

                            <div class="sparkline7 m-t-xs"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End main content-->
@endsection