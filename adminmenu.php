<section id="sidebar">
<?php
if(isset($_SESSION["userid"]))
{
?>
<h2>Admin Menu</h2>
<!--
<ul>
	<li><a href="course.php">Course</a></li>
    <li><a href="subject.php">Subject</a></li>
    <li><a href="lectureview.php">Lectures</a></li>
    <li><a href="student.php">Student</a></li>
    <li><a href="attendanceview.php">Attendance</a></li>
    <li><a href="examview.php">Examination</a></li>
    <li><a href="adminview.php">Admin</a></li>
    <li><a href="contactview.php">Inbox</a></li>

</ul>
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
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div> 

<h2><a href="logout.php">Logout</a></h2>
<?php
}
?>
</section>
<div class="clear"></div>

<div class="clear"></div>
</section>
</div>