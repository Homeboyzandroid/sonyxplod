<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SONY XPLOD</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>
      <div class="wrapper">
      <div class="container ">
        <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right:0px; top:150px;">
          <a href="www.facebook.com" class="a2a_button_facebook"></a>
          <a href="www.twitter.com" class="a2a_button_twitter"></a>
          <a href="www.instagram.com" class="a2a_button_instagram"></a>
        </div>
        <div class="container">
              <!--Start of Slider Image-->
              <div class="row" id="first">
                  <img class="img-responsive "  src="assets/images/slider.jpg"  alt="Responsive image">
              </div>
              <!--End Of Slider Image-->
              <!--Start Of registration form-->
              <div class="row">
                <div class="reg-form">
                  <div class="container-fluid">
                    <h3 class="text-center">REGISTRATION</h3>
                    <hr>
                    <form class="form-horizontal" role="form" action="insert.php" method="POST">
                      <div class="col-md-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="name">Name</label>
                              <div class="col-sm-8">
                                  <input type="text" name="name" class="form-control col-md-8 col-xs-12 " id="Name" placeholder="Enter name" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="id">ID No.</label>
                              <div class="col-sm-8">
                                  <input type="text" name="id" class="form-control col-md-8 col-xs-12" id="id no" placeholder="Enter id no" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="phone">Phone No.</label>
                              <div class="col-sm-8">
                                  <input type="text" name="phone" class="form-control col-md-8 col-xs-12" id="phoneno" placeholder="Enter phone no" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="plate">Vehicle Plate</label>
                              <div class="col-sm-8">
                                  <input type="text" name="vehicle" class="form-control col-md-8 col-xs-12" id="vehicle plate" placeholder="Enter vehicle plate no." required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="installer">Name of installer</label>
                              <div class="col-sm-8">
                                  <input type="text" name="installer" class="form-control col-md-8 col-xs-12" id="installer" placeholder="Enter name of the installer" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-sm-4" for="installerphone">Installer Phone no.</label>
                              <div class="col-sm-8">
                                  <input type="text" name="installerphone" class="form-control " id="installerphone" placeholder="Enter installer phone no." required>
                              </div>
                          </div>
                      </div>
                      <div class=" col-md-6 col-xs-12">
                        <div class="form-group">
                          <label class="col-md-4 col-xs-6 control-label" for="buttondropdown">Category Competing</label>
                          <div class="col-md-8 col-xs-12">
                            <div class="input-group col-xs-12 ">
                              <select name="car" class="form-control input-xs" autofocus="true">
                                <option>---Select here---</option>
                                <option>General</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="Sound">Sound Installed</label>
                            <div class="col-md-8">
                              <div class="col-md-6" >
                                 <div class="checkbox">
                                      <label for="checkboxes-0" >
                                          <input name="checkboxes[]" id="checkboxes-0" value="XB 100 Radio" type="checkbox">XB 100 Radio
                                      </label>
                                 </div>
                                 <div class="checkbox">
                                      <label for="checkboxes-1" >
                                      <input name="checkboxes[]" id="checkboxes-1" value="Other Speakers" type="checkbox">Other Speakers</label>
                                 </div>
                                 <div class="checkbox">
                                      <label for="checkboxes-0" >
                                          <input name="checkboxes[]" id="checkboxes-2" value=" Other Amplifiers" type="checkbox"> Other Amplifiers
                                      </label>
                                 </div>
                                 <div class="checkbox">
                                      <label for="checkboxes-1" >
                                          <input name="checkboxes[]" id="checkboxes-3" value="Other Sub-woofer" type="checkbox">Other Sub-woofer
                                      </label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                <div class="checkbox">
                                  <label for="checkboxes-0" >
                                  <input name="checkboxes[]" id="checkboxes-5" value="Sony speakers" type="checkbox"> Sony speakers
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-1" >
                                  <input name="checkboxes[]" id="checkboxes-6" value="Sony Amplifier" type="checkbox">
                                    Sony Amplifier
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-1" >
                                  <input name="checkboxes[]" id="checkboxes-7" value="Sony Sub-woofer" type="checkbox">
                                    Sony Sub-woofer
                                  </label>
                                </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group bg-success submit">
                          <!-- <hr> -->
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-8">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">Terms and Conditions</a>
                              </label>
                            </div>
                            <br>
                            <button id="singlebutton" name="singlebutton" class="btn btnSubmit btn-primary col-xs-6 ">Submit</button>

                          </div>
                          <br>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
              <!--End Of Registration-->
              <!--Start Of Content -->
              <div class="row">
                  <div class="container main-content">
                      <div class="col-md-12">
                        <div class="container">
                          <h2>Competition Mechanics</h2>
                          <ul>
                              <li>The participation for the Xplod Chalenge must install the Sony MEX-XB100BT headunit in their car along with Sony speakers</li>
                              <li>The first 50 participants to register and participate will be awarded with Ksh. 10,000 cashback</li>
                              <li> The participants shall be given time to make up their vehicle till the day of the event </li>
                              <li> On the day of the event, all participants will be invited to the venue to showcase their set-ups and meet the car and sound engineers who will evaluate their installations</li>
                              <li>The set-ups will be judged based on the following parameters: SPL,SQL &amp; aesthetics</li>
                              <li>There has to be atleast 3 matatus participating in order to find a winner. Otherwise  the matatus will be judged under General Category </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-12">
                          <div class=" tableholder">
                            <div class="row">
                              <div class="col-md-4">
                                  <table class="table table-bordered table-responsive">
                                      <tbody>
                                          <tr>
                                              <td>SPL</td><td>25%</td>
                                          </tr>
                                          <tr>
                                              <td>SQL</td> <td>25%</td>
                                          </tr>
                                          <tr>
                                              <td>Aesthetic</td> <td>20%</td>
                                          </tr>
                                          <tr>
                                              <td>Products Installed (Details braekup in next table)</td><td>30%</td>
                                          </tr>
                                          <tr>
                                              <td>Total</td> <td>100%</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="col-md-8">
                                  <table class="table table-bordered table-responsive">
                                      <thead>
                                        <tr>
                                          <th>Product Installed</th>
                                          <th>Points Earned</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Head Unit:XB100BT(Minimum Requirement)</td> <td>10%</td>
                                            </tr>
                                          <tr>
                                              <td> Round Speakers</td><td>5%</td>
                                          </tr>
                                          <tr>
                                              <td>XB Oval Speakers</td><td>5%</td>
                                          </tr>
                                          <tr>
                                              <td>Other Sony Round Speakers</td><td>3%</td>
                                          </tr>
                                          <tr>
                                              <td>Other Sony Oval Speakers</td><td>3%</td>
                                          </tr>
                                          <tr>
                                              <td>Sony Amplifier</td><td>2%</td>
                                          </tr>
                                          <tr>
                                              <td>Sony Sub-woofer</td><td>2%</td>
                                          </tr>
                                          <tr>
                                              <td>Total</td><td>100%</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="container">
                          <ul>
                              <li>Both the car owner and the installer will be awarded under the overall winner, 1st Runners Up, 2nd Runners Up and Matatu Category.</li>
                              <li>The "Best  Installer  in Kenya" &amp; "Best sound system in matatus" will be awarded in this event.</li>
                              <li>Participants should avail their vehicles on 21st November by 7.00am </li>
                              <li>Each vehicle entered will get 5 complimentary tickets</li>
                          </ul>
                          <h2>Terms and Conditions</h2>
                          <ul>
                              <li> Participants have to go online and register on <a href="#">www.sonyxplodchallenge.co.ke</a></li>
                              <li> The kshs 10,000 cashback will be reimbursed via mpesa on the day of the event by bringing the Car installed with MEX-XB100BT.</li>
                              <li>The contest starts from October 25, 2015 untill November 20th, 2015</li>
                              <li> There will be 2 prizes in each category.</li>
                              <li>Participants are entitled to only one prize each</li>
                              <li>In the event that there is a cancellation or a rescheduling, participants will be notified via SMS</li>
                              <li>In case of any disputes, judge's decisions will be deemed final</li>
                          </ul>
                        </div>
                      </div>
                  </div>
              </div>
              <!--End Of Content Section-->
          </div>
          <div class="container footer">
            <div class="col-md-12 text-center">
                <address>
              <strong>For Support and queries, contact us on: </strong>
                  <abbr title="Phone">P:</abbr> +254 722 433604
                </address>

              <p>Copyright &copy; Sony Explod 2015 <p>
            </div>
          </div>
      </div>
      <!-- <div class="footer">

        </div> -->
      </div>
    </body>
    <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
</html>
