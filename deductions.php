<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox Valley Tax Prep</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">    
</head>

<body>
    <div class="container">
        <div class="row">    	
        	<ul class="nav nav-pills">
                <li class=""><a href="index.php">Home</a></li>
                <li class=""><a href="services.php">Services</a></li>
                <li class="active"><a href="deductions.php">Deductions</a></li>
                <?php
                session_start();
                if (isset($_SESSION['uid'])) {
                    $usid = $_SESSION['uid'];
                    $role = "customer";
                    $db = new PDO("mysql:dbname=kohels65;host=localhost","kohels65","style69!!");
                    $rows = $db->query("SELECT username, password, role FROM Login WHERE username='$usid';");
                    foreach($rows as $row)
                    {   
                        $role = $row[2];
                        break;
                    }
                    if($role == "customer"){
                ?>
                        <li class=""><a href="customermain.php">Customer Main</a></li>
                        <li class=""><a href="logout.php">Log Out</a></li>
                <?php
                    }else{
                ?>
                        <li class=""><a href="employeemain.php">Employee Main</a></li>
                        <li class=""><a href="logout.php">Log Out</a></li>
                <?php
                    }
                }else{
                ?>
                    <li class=""><a href="signup0.php">Sign Up</a></li>
                    <li class=""><a href="login0.php">Log In</a></li>
                <?php
                }
                ?>  
            </ul>             
    	</div>
    
        <div class="row deduct">
            <div class="col-lg-10 col-lg-offset-2">
                <ul>
                    <li>Medical</li>
                        <ul>
                            <li>Payment of fees to doctors, dentists, surgeons, etc</li>
                            <li>Payment of hospital fees</li>
                            <li>Prescription Drug Payments</li>
                            <li>Payments for false teeth, eyeglasses, hearing aids, crutches, wheelchairs, guide dogs</li>
                            <li>Payments for transportation for essential medical care that qualifty as medical expenses</li>
                        </ul>
                    <li>Deductable Taxes</li>
                        <ul>
                            <li>State, local, and foreign income taxes</li>
                            <li>State, local, and foreign real estate taxes</li>
                            <li>State, and local personal property taxes</li>
                            <li>State, and local general sales taxes</li>
                        </ul>
                    <li>Education Expenses</li>
                        <ul>
                            <li>Tuition, books, supplies, lab fees</li>
                            <li>Certain transportation costs</li>
                            <li>Cost of research</li>
                        </ul>
                    <li>Business Expenses</li>
                        <ul>
                            <li>Business use of home</li>
                                <ul>
                                    <li>Part of home used exclusively for business</li>
                                    <li>Storage use</li>
                                    <li>Daycare facilities</li>
                                    <li>Rental use</li>
                                </ul>
                            <li>Business use of car</li>
                                <ul>
                                    <li>Used entirely for business</li>
                                    <li>Used for business and personal may only deduct cost of business use</li>
                                    <li>Standard mileage rate</li>
                                    <li>Actual car expenses</li>
                                </ul>
                            <li>Travel expenses</li>
                                <ul>
                                    <li>Individual cost of airplane, bus or car between home and destination</li>
                                    <li>Taxi fares</li>
                                    <li>Meals and lodging</li>
                                    <li>Tips</li>
                                    <li>Dry Cleaning</li>
                                    <li>Business calls</li>
                                    <li>Shipping of baggage and sample material</li>
                                </ul>
                        </ul>
                    <li>Interest Expenses</li>
                        <ul>
                            <li>Investment interest</li>
                            <li>Student loan interest</li>
                            <li>Mortgage interest</li>
                        </ul>
                    <li>Charitable Contributions</li>
                        <ul>
                            <li>Only if you itemize deductions (Schedule A)</li>
                            <li>Must be qualified organization</li>
                            <li>If a merchanise, goods, service received in exchange can only deduct net contribution</li>
                            <li>Contributions over $250 require a record of contribution</li>
                        </ul>
                    <li>Miscellaneous Expenses</li>
                        <ul>
                            <li>Unreimbersed employee expenses</li>
                            <li>Tax preperation fees</li>
                        </ul>
                    <li>Employee Business Expenses</li>
                    <li>Caualty, Disaster, and Theft Losses</li>
                </ul>
            </div>
            <audio controls>
          	<source id="swish" src="Swish.m4a" type="audio/mp3">
        	</audio>
        </div>
        <div class="row">
            <p id = "validate">
                <a href="http://validator.w3.org/check/referer">Validate Me</a>
            </p>        
        </div>
    	<script src="js/bootstrap.min.js"></script>  
    </div>
</body>
</html>
