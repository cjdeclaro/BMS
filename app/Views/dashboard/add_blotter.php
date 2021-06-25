            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Add Blotter</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Blotter</li>
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
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body wizard-content">
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform">
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Reporting Person</strong></li>
                                                <li id="personal"><strong>Suspect Data</strong></li>
                                                <li id="payment"><strong>Victim Data</strong></li>
                                                <li id="confirm"><strong>Narrative of Incident</strong></li>
                                            </ul> <!-- fieldsets -->
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Last Name:</label>
                                                            <input type="text" name="lastname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>First Name:</label>
                                                            <input type="text" name="firstname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Middle Name:</label>
                                                            <input type="text" name="middlename" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Nick Name:</label>
                                                            <input type="text" name="nickname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" class="form-control">
                                                                <option value="">-- choose --</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Birthday:</label>
                                                            <input type="date" name="citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Phone Number:</label>
                                                            <input type="text" name="phone" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Home Number:</label>
                                                            <input type="text" name="home" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Email Address:</label>
                                                            <input type="email" name="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="address-1" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="address-2" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Highest Educational Attainment:</label>
                                                            <input type="text" name="education" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="occupation" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="id-presented" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>

                                            <fieldset>
                                               
                                                <div class="row">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>Last Name:</label>
                                                                <input type="text" name="lastname" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>First Name:</label>
                                                                <input type="text" name="firstname" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>Middle Name:</label>
                                                                <input type="text" name="middlename" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>Gender:</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="">-- select --</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Nick Name:</label>
                                                            <input type="text" name="nickname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" class="form-control">
                                                                <option value="">-- choose --</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Qualifier:</label>
                                                            <input type="text" name="qualifier" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="address-1" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="address-2" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>High Educational Attainment:</label>
                                                            <input type="text" name="education" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="occupation" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="id-presented" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Height:</label>
                                                            <input type="text" name="height" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Weight:</label>
                                                            <input type="text" name="weight" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Color of Eyes:</label>
                                                            <input type="text" name="eyes-color" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Color of Hair:</label>
                                                            <input type="text" name="hair-color" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Under Influence of:</label>
                                                            <input type="text" name="influence-of" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>

                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Last Name:</label>
                                                            <input type="text" name="lastname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>First Name:</label>
                                                            <input type="text" name="firstname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Middle Name:</label>
                                                            <input type="text" name="middlename" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Gender:</label>
                                                            <select name="gender" class="form-control">
                                                                <option value="">-- select --</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Nick Name:</label>
                                                            <input type="text" name="nickname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="civil_status" class="form-control">
                                                                <option value="">-- choose --</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Birthday:</label>
                                                            <input type="date" name="citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Phone Number:</label>
                                                            <input type="text" name="phone" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Home Number:</label>
                                                            <input type="text" name="home" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Email Address:</label>
                                                            <input type="email" name="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="address-1" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="address-2" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Highest Educational Attainment:</label>
                                                            <input type="text" name="education" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="occupation" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="id-presented" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset style="text-align: left">
                                                
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Type of Incident:</label>
                                                            <input type="text" name="incident-type" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Place of Incident:</label>
                                                            <input type="text" name="incident-place" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea id="summernote"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                <button type="button" class="action-button">Submit</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>

            </div>