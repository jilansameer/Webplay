<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{ asset('css/material-kit.css?v=2.0.3') }}">

<!-- <nav class="navbar navbar-color-on-scroll navbar-expand-lg bg-dark fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav"> -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top " color-on-scroll="100" id="sectionsNav">
                      <div class="container">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-translate">
                              <a class="navbar-brand" href=" {{ url("home") }} ">Webify</a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                  <span class="navbar-toggler-icon"></span>
                                  <span class="navbar-toggler-icon"></span>
                              </button>
                          </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a href="{{ url('allroom') }}" class="nav-link">
                                        Rooms
                                    </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="{{ url('rooms') }}" class="nav-link">
                                          Create Classroom
                                      </a>
                                  </li>

                                  <!-- <li class="nav-item">
                                      <a href="#pablo" class="btn btn-rose btn-raised btn-fab btn-round">
                                          <i class="material-icons">email</i>
                                      </a>
                                  </li> -->
                                  <li class="dropdown nav-item">
                                      <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                                          <div class="profile-photo-small">
                                              <img src="../img/faces/marc.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                                          </div>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right">
                                          <!-- <h6 class="dropdown-header">Dropdown header</h6> -->
                                          <a href="{{ url('profile') }}" class="dropdown-item">Me</a>
                                          <!-- <a href="#pablo" class="dropdown-item">Settings and other stuff</a> -->
                                          <a href="{{ route('logout') }}" class="dropdown-item">Sign out</a>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          <!-- /.navbar-collapse -->
                      </div>
                      <!-- /.container-->
                  </nav>
