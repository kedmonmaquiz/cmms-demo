<div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                           
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="/home">
                                    <i class="ri-honour-line"></i> <span data-key="t-widgets">Home</span>
                                </a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Tables</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTables">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarUsers">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Users</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarUsers">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/all-users" class="nav-link" data-key="t-all-users">All Users</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void()" class="nav-link" data-key="t-add-user">Add User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarEquipments" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEquipments">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Equipments</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEquipments">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/all-equipments" class="nav-link" data-key="t-all-equipments">All Equipments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void()" class="nav-link" data-key="t-add-equipment">Add Floors</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarFloors" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarFloor">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Floors</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarFloors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/all-floors" class="nav-link" data-key="t-all-floors">All Floors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void()" class="nav-link" data-key="t-add-floor">Add Floors</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarTasks" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTask">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tasks">Tasks</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/all-tasks" class="nav-link" data-key="t-all-tasks">All Tasks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/add-task" class="nav-link" data-key="t-add-task">Add Floors</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>