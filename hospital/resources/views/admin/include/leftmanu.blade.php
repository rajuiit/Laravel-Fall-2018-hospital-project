
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ asset(url('/home')) }}"><i class="fa fa-dashboard fa-fw"></i> DeshBoard </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Doctors Apointment <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset(url('/doctor/inhospital')) }}">In Hospital</a>
                                </li>
                                <li>
                                    <a href="{{ asset(url('/apointment/inhome')) }}">In Home</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Reservation <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset(url('/reservation/patentbed')) }}">Emergency Patient bed</a>
                                </li>
                                <li>
                                    <a href="{{ asset(url('/reservation/relative')) }}">For Relative Rooms</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Pathologiest Apointment <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset(url('/pathologies/inhospital')) }}">In Hospital</a>
                                </li>
                                <li>
                                    <a href="{{ asset(url('/pathologies/inhome')) }}">In Home</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> All Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset(url('/report/doctor')) }}">Doctor Prescription</a>
                                </li>
                                <li>
                                    <a href="{{ asset(url('/report/pathologiest')) }}">Pathologiest Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>