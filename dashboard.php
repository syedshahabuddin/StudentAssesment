<?php
session_start(); 
include("header.php"); 
include("conection.php");

if(isset($_POST["submit"]))
{
$result = mysql_query("SELECT * FROM administrator
WHERE adminid='$_POST[uid]' and password='$_POST[pwd]'");
if(mysql_num_rows($result)==0)
{
$log =  "Login failed";
}
else
{
	header("Location: dashboard.php");
}
}
?>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>Admin Menu</h2>
  </header>
  <!--<section class="entry">
  -->
  
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
 <!-- <form action="" method="post" class="form">      -->
      <ul class="clear">
        <li><a href="course.php">Course</a></p></li>
        <li><a href="subject.php">Subject</a></li>
        <li><a href="lectureview.php">Lecture</a></li>
        <li><a href="student.php">Student </a></li>
      	<li><a href="attendanceview.php">Attendance</a></li>
      	<li><a href="examview.php">Examination</a></li>
      	<li><a href="adminview.php">Admin</a></li>
			<li><a href="contactview.php">Inbox</a></li>	
			<li><a href="logout.php">Logout</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>  
  
  <!--
  <form action="" method="post" class="form">
   <p class="textfield"><a href="course.php">Course</a></p><hr />
   <p class="textfield"><a href="subject.php">Subject</a></p><hr />
      <p class="textfield"><a href="lectureview.php">Lecture</a></p><hr />
  <p class="textfield"><a href="student.php">Student </a></p><hr />
   <p class="textfield"><a href="attendanceview.php">Attendance</a></p><hr />
   <p class="textfield"><a href="examview.php">Examination</a></p><hr />
   <p class="textfield"><a href="adminview.php">Admin</a></p><hr />
   <p class="textfield"><a href="contactview.php">Inbox</a></p><hr />

   <p>
     <input name="comment_post_ID" value="1" type="hidden">
 </p>
  </form>
  </section> -->
</article>

<article class="post">
  <header class="postheader">
  <h2>&nbsp;</h2>
  </header>
  <section class="entry"></section>
</article>



</section>


<?php 
//include("adminmenu.php");
include("footer.php"); ?>
