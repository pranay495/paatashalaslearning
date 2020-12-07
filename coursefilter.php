<?php
include 'connection.php';


  $catclid = $_GET['catid'];


  $i=0;
          $q3 = "select  c.courseid, c.coursecat, c.cat2, c.subject, c.coursename, c.tags, c.price, c.description1, s.subject, cl.coursecat, ct.coursecat, ct.catid  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat where ct.catid = '$catclid'  order by c.courseid asc";
          $r3 = mysql_query($q3);

          while (list($courseid, $coursecatid, $cat2id, $subjectid, $coursename, $tags, $price, $description1, $subject, $courseclass, $cat, $catid  ) = mysql_fetch_array($r3)) {
            if($i < 6)
            {

 ?>


       <div id=""  class="col-lg-4 col-sm-6 <?php echo $catid; ?>" >
           <!--Single Course Item Start-->
             <div class="single-course-item border-radius">
                 <div class="course-thumb-area">
                     <img class="img-fluid" src="images/courses/<?php echo $subject; ?>.jpg" alt="img">

                 </div><!--/.course-thumb-area-->
                 <div class="course-content">
                     <h2><a href="register.php"><?php echo $coursename; ?></a></h2>
                     <ul>
                       <?php echo $description1; ?>
                     </ul>
                     <div class="trainer-profile clearfix">
                         <div class="trainer-info">
                             <h3><?php echo $price; ?></h3>
                         </div>
                         <div class="course-cat text-capitalize text-right"><a href="#"><?php echo $tags; ?></a></div>
                     </div><!--/.trainer-profile-->
                 </div><!--/.course-content-->
             </div><!--/.single-course-item-end-->
         </div><!--/.col-lg-4-->

         <?php
         $i = $i+1;
       }

     }
          ?>
