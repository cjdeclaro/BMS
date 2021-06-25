        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>" aria-expanded="false">
                                <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Blotter</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="<?= base_url('add-blotter') ?>" class="sidebar-link" style="padding-left: 20px"><i class="fa fa-plus"></i><span class="hide-menu"> Add New </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('blotter-records') ?>" class="sidebar-link" style="padding-left: 20px"><i class="fa fa-list"></i><span class="hide-menu"> View All </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('reports') ?>" aria-expanded="false">
                                <i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Reports</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->