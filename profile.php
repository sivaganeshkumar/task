<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id2436507_swedha');
define('DB_PASSWORD', 'ammumadhu');
define('DB_DATABASE', 'id2436507_bb');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
     $firstname ="";
     $lastname ="";
     $dob="";
     $gender ="";
     $biodata="";
     $email ="";
     $phone="";
     $maritalstatus ="";
     $userimage ="";
     $hobby= "";

if ($_host["REQUEST_METHOD"] == "POST")
 {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $dob = test_input($_POST["dob"]);
  $gender = test_input($_POST["gender"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $martialstatus = test_input($_POST["martialstatus"]);
  $userimage = test_input($_POST["userimage"]);
  $hobby= test_input($_POST["hobby"]);
  
}

           function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
  


  $sql= "INSERT INTO profile (id,firstname,lastname,dateofbirth,gender,biodata,email,phone,maritalstatus,userimage,hobby) VALUES ('','$firstname'.'$lastname','$dob','$gender','$biodata','$email','$phone',$maritalstatus','$userimage','$hobby')";
  $result=mysqli_query($connection,$sql);
             if($result)
             {
               $smsg="user registration Successfull";
             }
             else
             {
               $fmsg="user registration failed";
             }


   mysqli_close($conn);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>profile</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<div class="container">
  <nav class="topnav">
              <div class="container-fluid">
               <ul class="topnav">
               
                  <li class="active"><a href="#">Profile</a></li>
               </ul>
               <div class="col-md-3 pull-right">
                   <form class="navbar-form" role="search">
               <div class="input-group add-on">
                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                     <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                     </div>
               </div>
                  </form>
               </div>
             </div>
             <div class="col-md-1 pull-right">      
              <a href="index.php" class="btn btn-info" role="button">Logout</a>
                </div>
    </nav>
   
<body>
 <h3>Welcome!!!</h3>

<div class="container">
   <div class="row">
     <div class="col-md-9 control-label">

                 <div class="panel panel-default">
                   <div class="panel-heading">
                       <h4 class="panel-title">Profile</h4>
                   </div>
                   <div class="panel-body">

                         <form class="form-horizontal">
                       <div class="form-group">
                            <label for="inputfirstname" class="col-md-4 control-label">First Name</label>
                       <div class="col-md-6">
                            <input type="text" class="form-control" id="inputfirstname" placeholder="Enter First Name" />
                       </div>
                       </div>
                   <div class="form-group">
                        <label for="inputlastname" class="col-md-4 control-label">Last Name</label>
                      <div class="col-md-6">
                          <input type="text" class="form-control" id="inputlastname" placeholder="Enter Last Name" />
                      </div>
                   </div>
                   <div class="form-group">
                         <label for="inputdateofbirth" class="col-md-4 control-label"> Date of Birth</label>
                      <div class="col-md-6">
                          <div class="row">
                               <div class="col-md-5">

          <select class="form-control" name="">
             <option value="">January</option>
             <option value="">February</option>
             <option value="">March</option>
             <option value="">April</option>
             <option value="">May</option>
             <option value="">June</option>
             <option value="">July</option>
             <option value="">August</option>
             <option value="">September</option>
             <option value="">October</option>
             <option value="">November</option>
             <option value="">December</option>

             <option selected value=""></option>
          </select>
        </div>
        <div class="col-md-3">
            <select name="" class="form-control">
                 <option value="">1</option>
                 <option value="">2</option>
                 <option value="">3</option>
                 <option value="">4</option>
                 <option value="">5</option>
                 <option value="">6</option>
                 <option value="">7</option>
                 <option value="">8</option>
                 <option value="">9</option>
                 <option value="">10</option>
                 <option value="">11</option>
                 <option value="">12</option>
                 <option value="">13</option>
                 <option value="">14</option>
                 <option value="">15</option>
                 <option value="">16</option>
                 <option value="">17</option>
                 <option value="">18</option>
                 <option value="">19</option>
                 <option value="">20</option>
                 <option value="">21</option>
                 <option value="">22</option>
                 <option value="">23</option>
                 <option value="">24</option>
                 <option value="">25</option>
                 <option value="">26</option>
                 <option value="">27</option>
                 <option value="">28</option>
                 <option value="">29</option>
                 <option value="">30</option>
                 <option value="">31</option>

                 <option selected value=""></option>
             </select>
        </div>
        <div class="col-md-4">
            <select name="" class="form-control">
                <option value="">1970</option>
                <option value="">1971</option>
                <option value="">1972</option>
                <option value="">1973</option>
                <option value="">1974</option>
                <option value="">1975</option>
                <option value="">1976</option>
                <option value="">1977</option>
                <option value="">1978</option>
                <option value="">1979</option>
                <option value="">1980</option>
                <option value="">1981</option>
                <option value="">1982</option>
                <option value="">1983</option>
                <option value="">1984</option>
                <option value="">1985</option>
                <option value="">1986</option>
                <option value="">1987</option>
                <option value="">1988</option>
                <option value="">1989</option>
                <option value="">1990</option>
                <option value="">1991</option>
                <option value="">1992</option>
                <option value="">1993</option>
                <option value="">1994</option>
                <option value="">1995</option>
                <option value="">1996</option>
                <option value="">1997</option>
                <option value="">1998</option>
                <option value="">1999</option>
                <option value="">2000</option>
                <option value="">2001</option>
                <option value="">2002</option>
                <option value="">2003</option>
                <option value="">2004</option>
                <option value="">2005</option>
                <option value="">2006</option>
                <option value="">2007</option>
                <option value="">2008</option>
                <option value="">2009</option>
                <option value="">2010</option>
                <option value="">2011</option>
                <option value="">2012</option>
                <option value="">2013</option>
                <option value="">2014</option>
                <option value="">2015</option>
                <option value="">2016</option>
                <option value="">2017</option>
                <option value="">2018</option>
                <option value="">2019</option>
                <option value="">2020</option>
                <option value="">2021</option>
                <option value="">2022</option>
                <option value="">2023</option>
                <option value="">2024</option>
                <option value="">2025</option>
                <option value="">2026</option>
                <option value="">2027</option>
                <option selected value=""></option>
               </select>
           </div>
         </div>
       </div>
   </div>
<div class="form-group">
     <label for="inputgender" class="col-md-4 control-label">Gender</label>
     <div class="col-md-6 ">
       <label>
          <input type="radio" name="gender">Male
          </label>
       <label>
          <input type="radio" name="gender">
          Female
       </label>
     </div>
 </div>
           <div class="form-group">
                            <label for="inputbiodata" class="col-md-4 control-label">Bio data</label>
                       <div class="col-md-6">
                      
                             <textarea class="form-control" rows="5" id="comment" id="inputbiodata" placeholder="Enter your Biodata" /></textarea>
                       </div>
              </div>
 <div class="form-group">
     <label for="inputemail" class="col-md-4 control-label">
        E-mail</label>
     <div class="col-md-6">
          <input type="text" class="form-control" id="inputemail" placeholder="Enter your E-mail"></input>
     </div>
</div>
<div class="form-group">
     <label for="inputphone" class="col-md-4 control-label">
         Phone</label>
     <div class="col-md-6">
       <input type="text" class="form-control" id="inputphone" placeholder="Enter your Phone number"></input>
     </div>
</div>
<div class="form-group">
     <label for="inputgender" class="col-md-4 control-label">Marital status</label>
     <div class="col-md-6 ">
       <label>
          <input type="radio" name="gender">Single
          </label>
       <label>
          <input type="radio" name="gender">
          Married
       </label>
     </div>
 </div>
<div class="form-group">
                                        <label class="control-label col-md-4" for="last-name">User Image</label>
                                        <div class="col-md-4">
                                            <input type="file" style="height:44px;" name="image" id="last-name2" class="form-control col-md-5 col-xs-17">
                                        </div>
                                    </div>	
<div class="form-group">
     <label for="hobby" class="col-md-4 control-label">
       Hobby</label>
     <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Enter Hobby" />
     </div>
     <div>
 <div class="col-md-8">
        <div class="checkbox">
          <label>
           <input type="checkbox">
             I agree to the Terms of Use
            
          </label>
        </div>
    </div>
 </div>
 </div>
</form>

      <div class="panel-footer">
           <div class="form-group">
           
                  <div class="col-md-1 pull-right">
                           <input type="submit" name="submit" value="submit" class="btn btn-default">
                   </div>
            </div>
      </div>
     </div>
   </div>
</div>



</body>
</html>