<?php
include 'connection.php';
include 'header.php';
 ?>

<?php

if (isset($_GET['class'], $_GET['subject'], $_GET['cat'])) {

  $classid = $_GET['class'];
  $subid = $_GET['subject'];
  $catid = $_GET['cat'];
  $q2 = "select  c.courseid, c.coursecat, c.cat2, c.subject, c.coursename, c.tags, c.price, c.description1, s.subject, cl.coursecat, ct.coursecat  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat where ct.catid = $catid or cl.classid = $classid or s.subjectid = $subid order by c.courseid asc";
  $r2 = mysql_query($q2);
  // list($courseid, $coursecatid, $cat2id, $subjectid, $coursename, $tags, $price, $description1, $subject, $courseclass, $cat  ) = mysql_fetch_array($r2)

}
// elseif (isset($_GET['category'])) {
//
//   $class  = $_GET['category'];
//   $q2 = "select  c.courseid, c.coursecat, c.cat2, c.subject, c.coursename, c.tags, c.price, c.description1, s.subject, cl.coursecat, ct.coursecat  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat where ct.catid = $catid or cl.classid = $class or s.subjectid = $subid order by c.courseid asc";
//   $r2 = mysql_query($q2);
// }
else {

  $q2 = "select  c.courseid, c.coursecat, c.cat2, c.subject, c.coursename, c.tags, c.price, c.description1, s.subject, cl.coursecat, ct.coursecat  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat order by c.courseid asc";
  $r2 = mysql_query($q2);
  // list($courseid, $coursecatid, $cat2id, $subjectid, $coursename, $tags, $price, $description1, $subject, $courseclass, $cat  ) = mysql_fetch_array($r2)


}
 ?>


    <!--=======Page Heading
    =================================-->
    <section class="page-heading-section heading-style-two bg-image before-bg" style="background-image: url(images/header/p-header3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">Find the Best Courses</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p> -->
                    </div><!--/.page-heading-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->





    <div class="e-learning-page page-wrapper">
        <!--=======Courses Search Area
        ==================================-->

        <!--====Courses Section
        ====================================-->
        <section id="courses-section" class="popular-courses-area bg-gray s-pd2">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8">
                        <div class="section-heading-area text-center">
                            <h2 class="section-heading text-capitalize">Popular Courses</h2>
                        </div><!--/.section-heading-area-->
                    </div><!--/.col-lg-8-->
                </div><!--/.row-->


                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled popular-filter-nav text-center">
                          <li><a class="filter" href="#" data-filter="*">All</a></li>
                          <?php
                          $q3 = "select distinct  s.subject from coursesub s  join  courses c on s.subjectid  = c.subject ";
                          $r3 = mysql_query($q3);
                          while (list($subject) = mysql_fetch_array($r3)) {


                          ?>
                            <li><a class="filter" href="#"   data-filter=".<?php echo $subject; ?>"><?php echo $subject; ?></a></li>
                            <?php
                          }
                             ?>

                            <!-- <li><a class="filter" href="#" data-filter=".maths">maths</a></li>
                            <li><a href="#" class="filter" data-filter=".development">Development</a></li>
                            <li><a href="#" class="filter" data-filter=".business">Business</a></li>
                            <li><a href="#" class="filter" data-filter=".photography">Photography</a></li> -->
                        </ul><!--/.popular-filter-nav-->
                    </div><!--/.col-lg-12-->
                </div><!--/.row-->




                  <div class="row courses-item-content">

                    <?php


                      while (list($courseid, $coursecatid, $cat2id, $subjectid, $coursename, $tags, $price, $description1, $subject, $courseclass, $cat  ) = mysql_fetch_array($r2)) {
                    ?>

                    <div class="col-lg-3 col-sm-6 <?php echo $subject; ?>">
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
                  }
                     ?>

                </div><!--/.row-->

            </div><!--/.container-->
        </section><!--/#courses-section-->

        <section class="counter-section before-bg bg-image s-pd145" style="background-image: url(images/counter-bg.jpg);">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-counter">
                                    <h2><span class="counter">100</span>+</h2>
                                    <p>courses</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-counter">
                                    <h2><span class="counter">600</span></h2>
                                    <p>students</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-counter">
                                    <h2><span class="counter">40</span>+</h2>
                                    <p>E-Book</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-counter">
                                    <h2><span class="counter">50</span>+</h2>
                                    <p>Teachers</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section>



<?php
include 'footer.php';
 ?>
