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
                                                <div class="form-card">
                                                    <h2 class="fs-title">Personal Information</h2> <input type="text" name="fname" placeholder="First Name" /> <input type="text" name="lname" placeholder="Last Name" /> <input type="text" name="phno" placeholder="Contact No." /> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Payment Information</h2>
                                                    <div class="radio-group">
                                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                                    <div class="row">
                                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                                <option selected>Month</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select> <select class="list-dt" id="year" name="expyear">
                                                                <option selected>Year</option>
                                                            </select> </div>
                                                    </div>
                                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                    </div> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                            <h5>You Have Successfully Signed Up</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                </div>

            </div>