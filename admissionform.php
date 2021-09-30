<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
}
?>
<!-- Main css -->
    <link rel="stylesheet" href="asset/admission/css/style.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="asset/admission/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="asset/admission/vendor/nouislider/nouislider.min.css">
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Form Element</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                                                  <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Click To Insert</button>
                    </div>
                  </div>
                </div>

<div class="main">

        <div class="container">

                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Company</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">meal preference</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Kosher">Kosher</option>
                                            <option value="Asian Vegetarian">Asian Vegetarian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">DD / Cheque No.</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Drawn on ( Bank Name)</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Payable at</label>
                                    <input type="text" name="payable" id="payable" />
                                </div>
                            </div>
                        </div>
                         <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ================================================================================================ -->

        <div class="col-md-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h4>Mask</h4>
                  </div>
                  <div class="col-md-12 panel-body">
                    <form action="<?php echo SITE_URL ;?>backend.php?service=admission" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                     <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="name" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Name</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="city" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>City</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="mobile" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Mobile</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="qualification" class="form-text mask-text" required >
                          <option value=""> Qualification</option>
                          <option > Female</option> 
                          <option >Male</option>
                          <option >Other</option>
                        </select>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="file" name="file" id="upload" class="form-text mask-text" required>
                        <span class="bar"></span>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="address" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Address</label>
                      </div>


                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="email" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Email</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="gender" class="form-text mask-text" required >
                          <option value=""> Gender</option>
                          <option > Female</option> 
                          <option >Male</option>
                          <option >Other</option>
                        </select>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="course" class="form-text mask-text" required >
                          <option value=""> Course</option>
                          <option > Female</option> 
                          <option >Male</option>
                          <option >Other</option>
                        </select>
                      </div>

                    </div>
                      <div class="col-md-12">
                        <input class="submit btn btn-danger" type="submit" value="Submit">
                      </div>
                  </div>

                </form>
                </div>
              </div>
              </div>
            <!-- JS -->
    <script src="asset/admission/vendor/jquery/jquery.min.js"></script>
    <script src="asset/admission/vendor/nouislider/nouislider.min.js"></script>
    <script src="asset/admission/vendor/wnumb/wNumb.js"></script>
    <script src="asset/admission/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="asset/admission/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="asset/admission/js/main.js"></script>
