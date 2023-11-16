<?php
require_once('config.php'); 

session_start();

if (isset($_POST['submit']))
{

$prj_name   = $_POST['prj_name'];
$sht_des   = $_POST['sht_des'];
$fll_des   = $_POST['fll_des'];
$rl_no_1   = $_POST['rl_no_1'];
$rl_no_2   = $_POST['rl_no_2'];
$rl_no_3   = $_POST['rl_no_3'];
$rl_no_4   = $_POST['rl_no_4'];
$rl_no_5   = $_POST['rl_no_5'];
$rl_no_6 = $_POST['rl_no_6'];
$fcl_inc = $_POST['fcl_inc'];
$tch_usd = $_POST['tch_usd'];
$ipr = $_POST['ipr'];
$uniq = $_POST['uniq'];
$appl = $_POST['appl'];
$lk_fr = $_POST['lk_fr'];
$ftr_wrks = $_POST['ftr_wrks'];
$int_fnd = $_POST['int_fnd'];
$tot_fnd = $_POST['tot_fnd'];
$cnt_mail = $_POST['cnt_mail'];
$ttl_fnd = $_POST['ttl_fnd'];
/*
$from_time = $fr_hr.":".$fr_min." ".$fr_am_pm;
$to_time = $to_hr.":".$to_min." ".$to_am_pm;
$eve_date = $dd."/".$mm."/".$yy;


$internal = md5($internal_fac_id.$from_time.$dpt);
$external = md5($external_fac_id.$to_time.$n_of_studs);

$internal_pass = substr($internal,2,8);
$external_pass  = substr($external,15,8);
$_SESSION["internal_pass"] = $internal_pass;
$_SESSION["external_pass"] = $external_pass;
$_SESSION["no_stud"] = $n_of_studs;


$db_nme_lst = str_replace(":","",str_replace("/","",str_replace(" ","",$from_time.$eve_date.$dpt.$yr)));

$_SESSION["db_name"] = $db_nme_lst;*/


$sql_query = "insert into projects(prj_name,sht_des,fll_des,rl_no_1,rl_no_2,rl_no_3,rl_no_4,rl_no_5,rl_no_6,fcl_inc,tch_usd,ipr,uniq,appl,lk_fr,ftr_wrks,int_fnd,tot_fnd,cnt_mail,ttl_fnd) values('$prj_name','$sht_des','$fll_des','$rl_no_1','$rl_no_2','$rl_no_3','$rl_no_4','$rl_no_5','$rl_no_6','$fcl_inc','$tch_usd','$ipr','$uniq','$appl','$lk_fr'.'$ftr_wrks','$int_fnd','$tot_fnd','$cnt_mail','$ttl_fnd');";
if(mysqli_query($con,$sql_query)){
 echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}
else
{
  echo "Data Insertion error".mysqli_error($con);
}

}
if (isset($_POST['aa']))
{
  $no_stud = $_SESSION["no_stud"];


}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Project Submiision</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
<div class="container">
  <form action="project_submission.php" method = "POST">
    <div class="row">
      <h4>Project Name</h4>
      <div class="input-group input-group-icon">
        <input name="prj_name" type="text" placeholder="Name of the Project"/>
        </div>
    <h4>Short Description</h4>
      <div class="input-group input-group-icon">
        <input name="sht_des" type="text" placeholder="Not more than 150 characters"/>
        </div>
        <h4>Full Description</h4>
      <div class="input-group input-group-icon">
        <input name="fll_des" type="text" placeholder="Not more than 750 characters"/>
        </div>
      <h4>Applications</h4>
      <div class="input-group input-group-icon">
        <input name="appl" type="text" placeholder="Uses of the Project"/> 
      </div>
    </div>

    <div class="row">
      <div class="col-half">
        <h4>Roll No of Students</h4>
        <div class="input-group">
           <h5>Student 1:</h5>
          <div class="col-third">
            <input name="rl_no_1" type="text" placeholder="Roll no"/>
          </div>
          </div>
         <div class="row">
          <h5>Student 2:</h5>
          <div class="col-third">
            <input name="rl_no_2" type="text" placeholder="Roll no"/>
          </div>
          </div>
    <div class="row">
          <h5>Student 3:</h5>
          <div class="col-third">
            <input name="rl_no_3" type="text" placeholder="Roll no"/>
          </div>
          </div>
    <div class="row">
          <h5>Student 4:</h5>
          <div class="col-third">
            <input name="rl_no_4" type="text" placeholder="Roll no"/>
          </div>
          </div>
    <div class="row">
          <h5>Student 5:</h5>
          <div class="col-third">
            <input name="rl_no_5" type="text" placeholder="Roll no"/>
          </div>
          </div>
    <div class="row">
          <h5>Student 6:</h5>
          <div class="col-third">
            <input name="rl_no_6" type="text" placeholder="Roll no"/>
          </div>
        </div>
      </div>
     </div>
     <h4>Faculty Incharge</h4>
      <div class="input-group input-group-icon">
        <input name="fcl_inc" type="text" placeholder="Enter the name of the Faculty"/>
        </div>
    <h4>Technology Used</h4>
      <div class="input-group input-group-icon">
        <input name="tch_usd" type="text" placeholder="Enter the Technology you have used"/>
        </div>
        <h4>IPR significant words</h4>
      <div class="input-group input-group-icon">
        <input name="ipr" type="text" placeholder="What can be used for IPR searching"/>
        </div>
    <h4>Uniqueness</h4>
      <div class="input-group input-group-icon">
        <input name="uniq" type="text" placeholder="Unique features"/>
        </div>
    <h4>Looking for</h4>
      <div class="input-group input-group-icon">
        <input name="lk_fr" type="text" placeholder="(eg:-funding,mentoring,guidance..)"/>
        </div>
    <h4>Future Works</h4>
      <div class="input-group input-group-icon">
        <input name="ftr_wrks" type="text" placeholder="write about your future works"/>
        </div>
    <h3>Funding Details</h3>
<h4>Initial Funding</h4>
      <div class="input-group input-group-icon">
        <input name="int_fnd" type="text" placeholder="Amount spent on the project"/>
        </div>
<h4>Total Funding</h4>
      <div class="input-group input-group-icon">
        <input name="tot_fnd" type="text" placeholder="Total Amount required to complete the project"/>
        </div>    
        <h3>Contact Details</h3>
<h4>Contact Mail ID</h4>
      <div class="input-group input-group-icon">
        <input name="cnt_mail" type="email" placeholder="Email of one student"/>
        </div>
<h4>Total Funding</h4>
      <div class="input-group input-group-icon">
        <input name="ttl_fnd" type="number" placeholder="Phone number of one student"/>
        </div>    
    
    <!-- <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
     --> <button name="submit" type ="post" value="reg" >Submit</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>