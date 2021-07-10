            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
            <div class="float-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-user-modal" class="btn btn-sm btn-light"><i class="fa fa-plus"></i> Add User</button>
                    </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Users</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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

                <div class="card">
                    <div class="card-body">
                    
                        <table id="users-table" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Middle Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" colspan="9">
                                        <i class="fa fa-spin fa-spinner"></i> loading user data
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

            <div id="add-user-modal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-fullscreen" role="dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <div class="float-start">
                                <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                            </div>
                            <h5 class="modal-title text-center mx-auto">ADD NEW USER</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-5 mx-auto">
                                    <form id="add-user-form">
                                        <div class="form-group">
                                            <label>Username:</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" name="lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" name="firstname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="text" name="middlename" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone #:</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Role:</label>
                                            <select name="role" class="form-control">
                                                <option value="">-- choose role --</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="BPSO">BPSO</option>
                                            </select>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="edit-user-modal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-fullscreen" role="dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <div class="float-start">
                                <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                            </div>
                            <h5 class="modal-title text-center mx-auto">EDIT USER</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-5 mx-auto">
                                    <form id="edit-user-form">
                                        <div class="form-group">
                                            <label>Username:</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" name="lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" name="firstname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="text" name="middlename" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone #:</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Role:</label>
                                            <select name="role" class="form-control">
                                                <option value="">-- choose role --</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="BPSO">BPSO</option>
                                            </select>
                                        </div>
                                        <div class="d-grid">
                                            <input type="hidden" name="id">
                                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>