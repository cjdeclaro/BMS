            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="container-fluid">

                <div class="row">
                    
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Cases</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0">
                                        <i class="ti-arrow-up text-success"></i> <?= $total_blotters ?>
                                    </h2>
                                    <span class="text-muted">Total</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cases Today</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0">
                                        <i class="ti-arrow-up text-primary"></i> <?= $blotters_today ?>
                                    </h2>
                                    <span class="text-muted">Total</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-12">
                    
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex col-md-10 mb-md-0 mb-3 align-self-center">Overview</div>
                                <hr>
                                <table id="blotters-table" class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Blotter #</th>
                                            <th class="text-center">Reporting Person</th>
                                            <th class="text-center">Suspect</th>
                                            <th class="text-center">Victim</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                
                </div>

            </div>