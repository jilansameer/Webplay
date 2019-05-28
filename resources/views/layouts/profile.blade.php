@extends('layouts.app')
@section('navigation')
    @include('layouts.dark-nav')
@endsection
@section('content')


<body class="profile-page ">

    <div class="page-header header-filter"  data-parallax="true" style="background-image: url('../img/examples/card-blog5.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="../img/faces/marc.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">{{ Auth::user()->name }}</h3>
                                <!-- <h6>Client</h6> -->
                                <!-- <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a> -->
                            </div>
                        </div>
                        <div class="follow">
                            <button class="btn btn-fab btn-primary btn-round" rel="tooltip" title="Edit Picture">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                    </div>

                    </div>
                </div>
                <!-- <div class="description text-center">
                    <p>To be provided by the client </p>
                </div> -->
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <!--
                      color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                  -->
                                <li class="nav-item">
                                    <a class="nav-link active" href="#work" role="tab" data-toggle="tab">
                                        <i class="material-icons">palette</i> Classes
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#connections" role="tab" data-toggle="tab">
                                        <i class="material-icons">people</i> Connections
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#media" role="tab" data-toggle="tab">
                                        <i class="material-icons">camera</i> Media
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active work" id="work">
                        <div class="row">
                            <div class="col-md-7 ml-auto mr-auto ">
                                <h4 class="title">To be provided by the client</h4>
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../img/examples/olu-eleu.jpg')">
                                            <a href=""></a>
                                            <div class="card-body">
                                                <label class="badge badge-warning">Yellow</label>
                                                <a href="">
                                                    <h2 class="card-title">Yellow</h2>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../img/examples/olu-eltu.jpg')">
                                            <a href=""></a>
                                            <div class="card-body">
                                                <label class="badge badge-danger">Red</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Red</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../img/examples/olu-eetu.jpg')">
                                            <a href=""></a>
                                            <div class="card-body">
                                                <label class="badge badge-info">Blue</label>
                                                <a href="">
                                                    <h2 class="card-title">Blue</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../img/examples/olu-eltu.jpg')">
                                            <a href=""></a>
                                            <div class="card-body">
                                                <label class="badge badge-success">Green</label>
                                                <a href="">
                                                    <h2 class="card-title">Green</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mr-auto ml-auto stats">
                                <h4 class="title">Stats</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>Something</b> Here</li>
                                    <li>
                                        <b>Something</b> Here</li>
                                    <li>
                                        <b>Something</b> Here</li>
                                    <li>
                                        <b>Something</b> Here</li>
                                </ul>
                                <hr>
                                <h4 class="title">To be provided by the client</h4>
                                <p class="description">To be provided by the client</p>
                                <hr>
                                <!-- <h4 class="title">Focus</h4>
                                <span class="badge badge-primary">To be provided by the client</span>
                                <span class="badge badge-rose">To be provided by the client</span> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../img/faces/avatar.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">To be provided by the client</h4>
                                                <h6 class="card-category text-muted">To be provided by the client</h6>
                                                <p class="card-description">
                                                    To be provided by the client
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto ml-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../img/faces/marc.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">To be provided by the client</h4>
                                                <h6 class="card-category text-muted">To be provided by the client</h6>
                                                <p class="card-description">
                                                  To be provided by the client
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../img/faces/kendall.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">To be provided by the client</h4>
                                                <h6 class="card-category text-muted">To be provided by the client</h6>
                                                <p class="card-description">
                                                    To be provided by the client
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../img/faces/card-profile2-square.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">To be provided by the client</h4>
                                                <h6 class="card-category text-muted">To be provided by the client</h6>
                                                <p class="card-description">
                                              To be provided by the client
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="tab-pane text-center gallery" id="media">
                        <div class="row">
                            <div class="col-md-3 ml-auto">
                                <img src="../img/examples/mariya-georgieva.jpg" class="rounded">
                                <img src="../img/examples/clem-onojegaw.jpg" class="rounded">
                            </div>
                            <div class="col-md-3 mr-auto">
                                <img src="../img/examples/clem-onojeghuo.jpg" class="rounded">
                                <img src="../img/examples/olu-eletu.jpg" class="rounded">
                                <img src="../img/examples/cynthia-del-rio.jpg" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
