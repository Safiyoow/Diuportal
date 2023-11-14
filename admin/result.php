<?php

require '../dbConnection/connect.inc.php';
require '../dbConnection/core.inc.php';

$myuser = $_GET['username'];
$myuser = $_SESSION['username'];

$query = "SELECT * FROM students WHERE username = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)) {
     $firstname = $row['firstname'];
     $lastname = $row['lastname'];
     $othername = $row['othername'];
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>Portal -Admin</title>

	<!-- Bootstrap styles for this template-->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script>
		function printContent(el) {
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}
	</script>
</head>
<body class="bg-gradient-dark ">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5" style=" ">
      <div class="card-body p-0">
      	 
      	<?php 
        $query = "SELECT * FROM students WHERE username = '{$myuser}' ";
  $result = mysqli_query($connection, $query);

  if(!$result)
  {
    die('QUERY FAILED'.mysqli_error($connection));
  }

  while ($row = mysqli_fetch_array($result)) {
     $db_username = $row['username'];
  }

  if($db_username == $myuser)
  {
        $query = "SELECT * FROM math101 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $mathsClass = 'IC';
           $mathsExam = 'IC';
           $mathsTotal = 'IC';
           $mathsGrade = 'IC';
           $mathsRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
           $mathsClass = 'IC';
           $mathsExam = 'IC';
           $mathsTotal = 'IC';
           $mathsGrade = 'IC';
           $mathsRemark = 'IC';
        }
        else{
          
           $mathsClass = $row['ClassScore'];
           $mathsExam = $row['ExamScore'];
           $mathsTotal = $row['TotalScore'];
           $mathsGrade = $row['Grade'];
           $mathsRemark = $row['Remark'];
        }

        $query = "SELECT * FROM cse101 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $EnglishClass = 'IC';
           $EnglishExam = 'IC';
           $EnglishTotal = 'IC';
           $EnglishGrade = 'IC';
           $EnglishRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
           $EnglishClass = 'IC';
           $EnglishExam = 'IC';
           $EnglishTotal = 'IC';
           $EnglishGrade = 'IC';
           $EnglishRemark = 'IC';
         }else{
           $EnglishClass = $row['ClassScore'];
           $EnglishExam = $row['ExamScore'];
           $EnglishTotal = $row['TotalScore'];
           $EnglishGrade = $row['Grade'];
           $EnglishRemark = $row['Remark'];
        }

        $query = "SELECT * FROM eee101 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $SocialClass = 'IC';
           $SocialExam = 'IC';
           $SocialTotal = 'IC';
           $SocialGrade = 'IC';
           $SocialRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $SocialClass = 'IC';
           $SocialExam = 'IC';
           $SocialTotal = 'IC';
           $SocialGrade = 'IC';
           $SocialRemark = 'IC';
        }else{
          
           $SocialClass = $row['ClassScore'];
           $SocialExam = $row['ExamScore'];
           $SocialTotal = $row['TotalScore'];
           $SocialGrade = $row['Grade'];
           $SocialRemark = $row['Remark'];
        }
       
        $query = "SELECT * FROM cse102 WHERE username = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $ScienceClass = 'IC';
           $ScienceExam = 'IC';
           $ScienceTotal = 'IC';
           $ScienceGrade = 'IC';
           $ScienceRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $ScienceClass = 'IC';
           $ScienceExam = 'IC';
           $ScienceTotal = 'IC';
           $ScienceGrade = 'IC';
           $ScienceRemark = 'IC';
        }else{
          
           $ScienceClass = $row['ClassScore'];
           $ScienceExam = $row['ExamScore'];
           $ScienceTotal = $row['TotalScore'];
           $ScienceGrade = $row['Grade'];
           $ScienceRemark = $row['Remark'];
        }
     
        $query = "SELECT * FROM cse202 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $RMEClass = 'IC';
           $RMEExam = 'IC';
           $RMETotal = 'IC';
           $RMEGrade = 'IC';
           $RMERemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $RMEClass = 'IC';
           $RMEExam = 'IC';
           $RMETotal = 'IC';
           $RMEGrade = 'IC';
           $RMERemark = 'IC';
        }else{
          
           $RMEClass = $row['ClassScore'];
           $RMEExam = $row['ExamScore'];
           $RMETotal = $row['TotalScore'];
           $RMEGrade = $row['Grade'];
           $RMERemark = $row['Remark'];
        }
        
        $query = "SELECT * FROM cse201 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $ICTClass = 'IC';
           $ICTExam = 'IC';
           $ICTTotal = 'IC';
           $ICTGrade = 'IC';
           $ICTRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $ICTClass = 'IC';
           $ICTExam = 'IC';
           $ICTTotal = 'IC';
           $ICTGrade = 'IC';
           $ICTRemark = 'IC';
        }else{
          
           $ICTClass = $row['ClassScore'];
           $ICTExam = $row['ExamScore'];
           $ICTTotal = $row['TotalScore'];
           $ICTGrade = $row['Grade'];
           $ICTRemark = $row['Remark'];
        }

        $query = "SELECT * FROM ged101 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $BDTClass = 'IC';
           $BDTExam = 'IC';
           $BDTTotal = 'IC';
           $BDTGrade = 'IC';
           $BDTRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $BDTClass = 'IC';
           $BDTExam = 'IC';
           $BDTTotal = 'IC';
           $BDTGrade = 'IC';
           $BDTRemark = 'IC';
        }else{
          
           $BDTClass = $row['ClassScore'];
           $BDTExam = $row['ExamScore'];
           $BDTTotal = $row['TotalScore'];
           $BDTGrade = $row['Grade'];
           $BDTRemark = $row['Remark'];
        }

        $query = "SELECT * FROM  eee102 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $GHLanguageClass = 'IC';
           $GHLanguageExam = 'IC';
           $GHLanguageTotal = 'IC';
           $GHLanguageGrade = 'IC';
           $GHLanguageRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $GHLanguageClass = 'IC';
           $GHLanguageExam = 'IC';
           $GHLanguageTotal = 'IC';
           $GHLanguageGrade = 'IC';
           $GHLanguageRemark = 'IC';
        }else{
          
           $GHLanguageClass = $row['ClassScore'];
           $GHLanguageExam = $row['ExamScore'];
           $GHLanguageTotal = $row['TotalScore'];
           $GHLanguageGrade = $row['Grade'];
           $GHLanguageRemark = $row['Remark'];
        }

        $query = "SELECT * FROM math201 WHERE indexNumber = '{$myuser}' ";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if($row == false)
        {
           $FrenchClass = 'IC';
           $FrenchExam = 'IC';
           $FrenchTotal = 'IC';
           $FrenchGrade = 'IC';
           $FrenchRemark = 'IC';
        }elseif($row['ClassScore'] == "" || $row['ExamScore'] == ""){
          $FrenchClass = 'IC';
           $FrenchExam = 'IC';
           $FrenchTotal = 'IC';
           $FrenchGrade = 'IC';
           $FrenchRemark = 'IC';
        }else{
           $FrenchClass = $row['ClassScore'];
           $FrenchExam = $row['ExamScore'];
           $FrenchTotal = $row['TotalScore'];
           $FrenchGrade = $row['Grade'];
           $FrenchRemark = $row['Remark'];
        }
  
        if(!empty($mathsGrade) && !empty($SocialGrade) && !empty($ScienceGrade) && !empty($ScienceClass) && !empty($RMEGrade) && !empty($ICTGrade) && !empty($BDTGrade) && !empty($GHLanguageGrade) && !empty($FrenchGrade))
        {
          $coreSubjects = "";
        }else{
             $coreSubjects = $mathsGrade + $EnglishGrade + $SocialGrade + $ScienceGrade;
        }


        if(!empty($mathsGrade) && !empty($SocialGrade) && !empty($ScienceGrade) && !empty($ScienceClass) && !empty($RMEGrade) && !empty($ICTGrade) && !empty($BDTGrade) && !empty($GHLanguageGrade) && !empty($FrenchGrade))
        {
          $coreSubjects = "";
        }else{
             $coreSubjects = $mathsGrade + $EnglishGrade + $SocialGrade + $ScienceGrade;
        }

        $coreTotal = $mathsTotal + $ScienceTotal + $EnglishTotal + $SocialTotal;
         $totalScore = $coreTotal + $FrenchTotal + $BDTTotal + $RMETotal + $ICTTotal + $GHLanguageTotal;

   // $rawScore = $mathsTotal + $SocialTotal + $EnglishTotal + $ScienceTotal + $RMETotal + $ICTTotal + $BDTTotal + $GHLanguageTotal + $FrenchTotal;
   //$electives = array('$FrenchGrade', ' $GHLanguageGrade', '$BDTGrade', '$ICTGrade', '$RMEGrade');
   // $first = max($electives);
   // $second = min($electives);
                      
  
?>
<br>
<br>
<div id="result">
    <center>
  <div class="table-responsive">
    <table border="1" class="table table-bordered  border-none  table-condense">
    <tr>
  <td>
    <table width="100%" class="text-center table table-bordered  border-none  table-condense">
      <tr>
        <td>
          <img src='../images/logo.jpg' width=80 height=70 class="mx-auto d-block">
        </td>
        <td>
          <b><font size='5'>Dhaka International University</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
          <font size='4' color='blue'><b>Academic Student Result</b></font>
        </td>
      </tr>
    </table >
  </td>
</tr>

    <tr>
    <td>
      <table class="table table-bordered  border-none  table-condense   ">
        <tr ></tr><td><font size='4'  class="ml-2"> <strong>NAME:</strong> <?php echo strtoupper($_SESSION['firstname']); echo " "; echo strtoupper($_SESSION['lastname']); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Reg:</strong> <?php echo "$myuser"; ?></font></td></tr>
        <tr  ><td><font class="ml-2" size='4'><strong>Batch:</strong> 56 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Session:</strong> 2019-2020</font></td></tr>
      </table>
    </td>
    </tr>
    <tr>
    <td>
      <table width="100%" class="table table-bordered  border-none  table-condense mt-2">
      <!-- sem-1 -->
      <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 1</B></div></td>
        <tr><td>&nbsp; CSE-101</td><td align="center"><?php echo "$EnglishClass"; ?></td><td align="center"><?php echo "$EnglishExam"; ?></td><td align="center"><?php echo "$EnglishTotal"; ?></td><td align="center"><?php echo "$EnglishGrade"; ?></td><td><?php echo "$EnglishRemark"; ?></td></tr>
        <tr><td>&nbsp; CSE-102</td><td align="center"><?php echo "$ScienceClass"; ?></td><td align="center"><?php echo "$ScienceExam"; ?></td><td align="center"><?php echo "$ScienceTotal"; ?></td><td align="center"><?php echo "$ScienceGrade"; ?></td><td><?php echo "$ScienceRemark"; ?></td></tr>
        <tr><td>&nbsp; MAT-101</td><td align="center"><?php echo "$mathsClass"; ?></td><td align="center"><?php echo "$mathsExam"; ?></td><td align="center"><?php echo "$mathsTotal"; ?></td><td align="center"><?php echo "$mathsGrade"; ?></td><td><?php echo "$mathsRemark"; ?></td></tr>
        <tr><td>&nbsp; EEE-101</td><td align="center"><?php echo "$SocialClass"; ?></td><td align="center"><?php echo "$SocialExam"; ?></td><td align="center"><?php echo "$SocialTotal"; ?></td><td align="center"><?php echo "$SocialGrade"; ?></td><td><?php echo "$SocialRemark"; ?></td></tr>
         <!-- sem-2 -->
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 2</B></div></td>
        <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td>&nbsp;CSE-201</td><td align="center"><?php echo "$ICTClass"; ?></td><td align="center"><?php echo "$ICTExam"; ?></td><td align="center"><?php echo "$ICTTotal"; ?></td><td align="center"><?php echo "$ICTGrade"; ?></td><td><?php echo "$ICTRemark"; ?></td></tr>
        <tr><td>&nbsp;GED-101</td><td align="center"><?php echo "$BDTClass"; ?></td><td align="center"><?php echo "$BDTExam"; ?></td><td align="center"><?php echo "$BDTTotal"; ?></td><td align="center"><?php echo "$BDTGrade"; ?></td><td><?php echo "$BDTRemark"; ?></td></tr>
        <tr><td>&nbsp;CSE-202</td><td align="center"><?php echo "$RMEClass"; ?></td><td align="center"><?php echo "$RMEExam"; ?></td><td align="center"><?php echo "$RMETotal"; ?></td><td align="center"><?php echo "$RMEGrade"; ?></td><td><?php echo "$RMERemark"; ?></td></tr>
        <tr><td>&nbsp;EEE-102</td><td align="center"><?php echo "$GHLanguageClass"; ?></td><td align="center"><?php echo "$GHLanguageExam"; ?></td><td align="center"><?php echo "$GHLanguageTotal"; ?></td><td align="center"><?php echo "$GHLanguageGrade"; ?></td><td><?php echo "$GHLanguageRemark"; ?></td></tr>
        <tr><td>&nbsp;MAT-201</td><td align="center"><?php echo "$FrenchClass"; ?></td><td align="center"><?php echo "$FrenchExam"; ?></td><td align="center"><?php echo "$FrenchTotal"; ?></td><td align="center"><?php echo "$FrenchGrade"; ?></td><td><?php echo "$FrenchRemark"; ?></td></tr>
       
        <!-- sem 3 -->
        
        <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 3</B></div></td>
        <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr>
        
         <!-- sem 4-->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 4</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 5 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 5</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 6 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 6</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 7 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 7</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr> 
         <!-- sem 8 -->
        
         <td style="background-color: #DCDCDC;" colspan=6><div class='text-danger'><B>&nbsp;Semester 8</B></div></td>
       <tr><th><i>Subjects</i></th><th><i> Incourse</i></th><th><i> Final </i></th><th><i>Total Score</i></th><th><i>Grade</i></th><th><i>Grade Earned</i></th></tr>
        <tr><td> <div  > Semester or Marks not exists <br></div></td></tr>
      </table>
    </td>
    </tr>

    <tr>
    <td>
       
      <table border="1" width="50%" class="table-borderd ">
        <tr><td align="center"><b>GRADING SYSTEM</b></td><td align="center"><b>GRADE</b></td><td><b>&nbsp;REMARK</b></td></tr>
        <tr><td align="center">80 - 100</td><td align="center">1</td><td>&nbsp;A+</td></tr>
        <tr><td align="center">70 - 79</td><td align="center">2</td><td>&nbsp;A</td></tr>
        <tr><td align="center">65 - 69</td><td align="center">3</td><td>&nbsp;B+</td></tr>
        <tr><td align="center">60 - 64</td><td align="center">4</td><td>&nbsp; B</td></tr>
        <tr><td align="center">55 - 59</td><td align="center">5</td><td>&nbsp;C+</td></tr>
        <tr><td align="center">50 - 54</td><td align="center">6</td><td>&nbsp;C</td></tr>
        <tr><td align="center">45 - 49</td><td align="center">7</td><td>&nbsp;D+</td></tr>
        <tr><td align="center">35 - 44</td><td align="center">8</td><td>&nbsp;D</td></tr>
        <tr><td align="center">00 - 34</td><td align="center">9</td><td>&nbsp;F</td></tr>
      </table>
 
    </td>
    </tr>
  </table>
  </div>
</center>
  </div><br>

  <center>  <button class="btn btn-primary btn-block" onclick="printContent('result')">Print</button>
              <a href="home.php" class="btn btn-danger btn-user btn-block">Back to Home</a>

</center>
   <?php 
      }else{
    ?>
         <center>
          <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-30 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-mb font-weight-bold text-primary text-uppercase mb-1">
                            <a href="">ERROR</a>
                          </div>
                          <div class="row no-gutters align-items-center text-uppercase">
                            <div class="col">
                              <li class="nav-item active">
                      <a class="nav-link btn-primary font-weight-bold" style="border-radius: 20px;" href="#">
                        <i class="fas fa fa-arr+ow-circle-right"></i>
                        <span>Unknow Index Number</span></a>
                    </li>
                    <hr>
                    <a href="home.php" class="btn btn-light btn-user btn-block">Back to Home</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
         </center>
         

    <?php
      }
      ?>








      

</div>
</div>
</body>
</html>