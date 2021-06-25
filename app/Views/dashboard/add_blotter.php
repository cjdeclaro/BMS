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
                                                            <input type="text" name="reporting[lastname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>First Name:</label>
                                                            <input type="text" name="reporting[firstname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Middle Name:</label>
                                                            <input type="text" name="reporting[middlename]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Nick Name:</label>
                                                            <input type="text" name="reporting[nickname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="reporting[citizenship]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="reporting[civil_status]" class="form-control">
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
                                                            <input type="date" name="reporting[birthday]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Phone Number:</label>
                                                            <input type="text" name="reporting[phone]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Home Number:</label>
                                                            <input type="text" name="reporting[home-no]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Email Address:</label>
                                                            <input type="email" name="reporting[email]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="reporting[address-1]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="reporting[address-2]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Highest Educational Attainment:</label>
                                                            <input type="text" name="reporting[education]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="reporting[occupation]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="reporting[id-presented]" class="form-control">
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
                                                                <input type="text" name="suspect[lastname]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>First Name:</label>
                                                                <input type="text" name="suspect[firstname]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>Middle Name:</label>
                                                                <input type="text" name="suspect[middlename]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label>Gender:</label>
                                                                <select name="suspect[gender]" class="form-control">
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
                                                            <input type="text" name="suspect[nickname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="suspect[citizenship]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="suspect[civil_status]" class="form-control">
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
                                                            <input type="text" name="suspect[qualifier]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="suspect[address-1]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="suspect[address-2]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>High Educational Attainment:</label>
                                                            <input type="text" name="suspect[education]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="suspect[occupation]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="suspect[id-presented]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Height:</label>
                                                            <input type="text" name="suspect[height]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Weight:</label>
                                                            <input type="text" name="suspect[weight]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Color of Eyes:</label>
                                                            <input type="text" name="suspect[eyes-color]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>Color of Hair:</label>
                                                            <input type="text" name="suspect[hair-color]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Under Influence of:</label>
                                                            <input type="text" name="suspect[influence-of]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="form-check">
                                                                        <input style="width: 10px" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            If AFP/PNP Personnel:
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <input type="text" name="rank" class="form-control" placeholder="Rank">
                                                                </div>
                                                                <div class="col-4">
                                                                    <input type="text" name="unit-assignment" class="form-control" placeholder="Unit Assignment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check">
                                                                    <input style="width: 10px" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                        If with Previous Criminal Records:
                                                                    </label>
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="text" name="prev-case-status" class="form-control" placeholder="Status of Previous Case">
                                                            </div>
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
                                                            <input type="text" name="victim[lastname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>First Name:</label>
                                                            <input type="text" name="victim[firstname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Middle Name:</label>
                                                            <input type="text" name="victim[middlename]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Gender:</label>
                                                            <select name="victim[gender]" class="form-control">
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
                                                            <input type="text" name="victim[nickname]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Citizenship:</label>
                                                            <input type="text" name="victim[citizenship]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Civil Status:</label>
                                                            <select name="victim[civil_status]" class="form-control">
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
                                                            <input type="date" name="victim[birthday]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Phone Number:</label>
                                                            <input type="text" name="victim[phone]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Home Number:</label>
                                                            <input type="text" name="victim[home-no]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Email Address:</label>
                                                            <input type="email" name="victim[email]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 1:</label>
                                                            <textarea name="victim[address-1]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address 2:</label>
                                                            <textarea name="victim[address-2]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Highest Educational Attainment:</label>
                                                            <input type="text" name="victim[education]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Occupation:</label>
                                                            <input type="text" name="victim[occupation]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>ID Card Presented:</label>
                                                            <input type="text" name="victim[id-presented]" class="form-control">
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