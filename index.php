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
       <!-- <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"></div>
            </div>
        </nav> -->
        <div class="container-fluid">
            <!--Start of Slider Image-->
            <div class="row" id="first">
                <img class="img-responsive "  src="assets/images/small.jpg"  alt="Responsive image">
            </div>
            <!--End Of Slider Image-->
            <!--Start Of registration form-->
            <div class="row" id="cont2">
                <form class="form-horizontal" role="form" action="insert.php" method="POST">
                    <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="name">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " id="Name" name="name" placeholder="Enter name" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="id">ID No.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="id no" name="id" placeholder="Enter id no" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="phone">Phone No.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="phoneno" name="phone" placeholder="Enter phone no" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="plate">Vehicle Plate</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="vehicle plate" name="vehicle" placeholder="Enter vehicle plate no." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="installer">Name of installer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="installer" name="installer" placeholder="Enter name of the installer" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="installerphone">Installer Phone no.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="installerphone" name="installerphone" placeholder="Enter installer phone no." required/>
                                </div>
                            </div>

                    </div>
                    <div class=" col-md-6 col-xs-12">
                        <div class="form-group">
                          <label class="col-md-4  control-label" for="buttondropdown">Category Competing</label>
                            <div class="col-md-8 col-xs-12">
                                <div class="input-group">
                                    <select name="car" class="selectpicker" data-style="form-control" data-menu-style="">
                                           <option disabled selected>Select</option>
                                           <option value="matatu">Matatu </option>
                                           <option value="benz">Benz</option>
                                           <option value="jaguar">Jaguar</option>
                                           <option value="passat">Passat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="control-label col-md-4" for="Sound">Sound Installed</label>
                            <div class="col-md-8">
                                <div class="col-md-6 col-xs-12" >
                                    <div class="checkbox">
                                        <label for="checkboxes-0">
                                            <input name="checkboxes[]" id="checkboxes-0" value="XB 100 Radio" type="checkbox">XB 100 Radio
                                        </label>
                                   </div>
                                    <div class="checkbox">
                                        <label for="checkboxes-1">
                                        <input name="checkboxes[]" id="checkboxes-1" value="Other Speaker" type="checkbox">Other Speakers</label>
                                   </div>
                                    <div class="checkbox">
                                        <label for="checkboxes-0">
                                            <input name="checkboxes[]" id="checkboxes-2" value="Other Amplifiers" type="checkbox"> Other Amplifiers
                                        </label>
                                   </div>
                                    <div class="checkbox">
                                        <label for="checkboxes-1">
                                            <input name="checkboxes[]" id="checkboxes-3" value="Other Sub-woofer" type="checkbox">Other Sub-woofer
                                        </label>
                                   </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="checkbox">
                                        <label for="checkboxes-0">
                                            <input name="checkboxes[]" id="checkboxes-5" value="Sony speakers" type="checkbox"> Sony speakers
                                        </label>
                                   </div>
                                    <div class="checkbox">
                                        <label for="checkboxes-1">
                                            <input name="checkboxes[]" id="checkboxes-6" value="Sony Amplifier" type="checkbox">
                                                Sony Amplifier
                                        </label>
                                   </div>
                                    <div class="checkbox">
                                        <label for="checkboxes-1">
                                            <input name="checkboxes[]" id="checkboxes-7" value="Sony Sub-woofer" type="checkbox">
                                              Sony Sub-woofer
                                        </label>
                                   </div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group  col-md-12">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary  pull-right">Submit</button>
                    </div>

                </form>
            </div>

            <!--End Of Registration-->
            <!--Start Of Content -->
            <div class="row" id="bottom_divs">
                <div class="container ">
                    <div class="row" id="cont3">
                        <h1 class="text-left">Competition Mechanics</h1>
                        <ul>
                            <li>The participation for the Xplod Chalenge must install the Sony MEX-XB100BT headunit in their car along with Sony speakers</li>
                            <li>The first 50 participants to register and participate will be awarded with kkshs 10,000/= cashback</li>
                            <li> The participants shall be given time to make up their vehicle till the day of the event </li>
                            <li> On the day of the event, all participants will be invited to the venue to lsowcase their set-ups and meet the car and sound engineers who will evaluate their installation</li>
                            <li>The set-ups will be judged based on the following parameters: SPL,SQL &amp; aesthetics</li>
                            <li>There has to be atleast 3 matatus participatin in order to find a winner. Otherwise  the matatus will be judged under general category </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="row" id="cont4">
                            <div class="tableholder col-md-12">
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
                                                <td> Round Speakers</td>
                                                <td>5%</td>

                                            </tr>
                                            <tr>
                                                <td>XB Oval Speakers</td>
                                                <td>5%</td>

                                            </tr>
                                            <tr>
                                                <td>Other Sony Round Speakers</td>
                                                <td>3%</td>

                                            </tr>
                                            <tr>
                                                <td>Other Sony Oval Speakers</td>
                                                <td>3%</td>

                                            </tr>
                                            <tr>
                                                <td>Sony Amplifier</td>
                                                <td>2%</td>

                                            </tr>
                                            <tr>
                                                <td>Sony Sub-woofer</td>
                                                <td>2%</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>100%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="cont5">
                        <ul>
                            <li>Both the car owner and the installer will be awarded under the overall winner, 1st runner up, 2nd runner and Matatu category.</li>
                            <li>The "Best  Installer  in Kenya" &amp; "Best sound system in matatus" will be awarded in this event.</li>
                            <li>Participants should avail their vehicles on21st Nov by 7.00am </li>
                            <li>Each vehicle entered will get 5 complimentary tickets</li>
                        </ul>
                        <h2>Terms and Conditions</h2>
                        <ul>
                            <li> Participants have togo online and register www.sonyxplodchallenge.co.ke</li>
                            <li> The kshs 10,000/= cashback will be reimbursed via mpesa on the day of the event by bringing the Car installed with MEX-XB100BT.</li>
                            <li>The contest starts from October 1, 2015 untill November 21st 2015</li>
                            <li> There will be 2 prizes in each category.</li>
                            <li>Participants aree entitled to only one prize each</li>
                            <li>In the event that there is a cancellation or a rescheduling, participants will notified via SMS</li>
                            <li>In case of any disputes, judges decisions will be deemed final</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Of Content Section-->
        </div>
    </body>
</html>
