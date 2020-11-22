<?php
include 'connection.php';
include 'header.php';
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
        <div class="courses-search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="search-course" method="get">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your Keywords">
                                    </div>
                                </div><!--/.col-lg-3-->


                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group form-select">
                                        <select class="form-control" name="category">
                                            <option value="" disabled="" selected="">Choose Category</option>
                                            <option value="business">Business </option>
                                            <option value="design">Design </option>
                                            <option value="film">Film </option>
                                            <option value="music"> Music</option>
                                            <option value="photography"> Photography</option>
                                            <option value="writing"> Writing</option>
                                        </select>
                                    </div>
                                </div><!--/.col-lg-3-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group form-select">
                                        <select class="form-control" name="price">
                                            <option value="" disabled="" selected="">Select Price Type</option>
                                            <option value="open">Open </option>
                                            <option value="closed">closed </option>
                                            <option value="free"> free</option>
                                            <option value="baynow"> bay now</option>
                                        </select>
                                    </div>
                                </div><!--/.col-lg-3-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-primary">SEARCH YOUR COURSES</button>
                                    </div>
                                </div><!--/.col-lg-3-->
                            </div><!--/.row-->
                        </form><!--/.search-course-->
                    </div><!--/.col-lg-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.courses-search-area-->

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
                            <li><a class="filter" href="#" data-filter=".design">Design</a></li>
                            <li><a href="#" class="filter" data-filter=".development">Development</a></li>
                            <li><a href="#" class="filter" data-filter=".business">Business</a></li>
                            <li><a href="#" class="filter" data-filter=".photography">Photography</a></li>
                        </ul><!--/.popular-filter-nav-->
                    </div><!--/.col-lg-12-->
                </div><!--/.row-->


                <?php

                  $cat = $_GET["cat"];
                  $class = $_GET["class"];
                  $subject = $_GET["subject"];
                  $status = "";
                  $q1 = "select c.courseid, c.coursename, c.coursecat, c.cat2, c.subject, c.price, c.description1 from courses c where c.cat2 = '$class' ";
                  $r1 = mysql_query($q1);

                  if($r1 === false){
                        throw new Exception(mysql_error($connection));
                      }
                  // echo $q1;
                  while(list($cid,$coursename,$coursecat,$cat2,$subject,$price,$description)=mysql_fetch_array($r1))

                  // echo $cid,$coursename,$coursecat,$cat2,$subject,$price,$description;

              {
                 ?>

                  <div class="row courses-item-content">
                      <div class="col-lg-4 col-sm-6 design photography">
                          <!--Single Course Item Start-->
                          <div class="single-course-item border-radius">
                              <div class="course-thumb-area">
                                  <img class="img-fluid" src="images/courses/course1.jpg" alt="img">
                                  <div class="course-meta">
                                      <a href="#"><i class="fa fa-heart-o"></i></a>
                                      <a href="#"><i class="fa fa-share-alt"></i></a>
                                  </div>
                                  <span class="course-duration">2.2 hours</span>
                              </div><!--/.course-thumb-area-->
                              <div class="course-content">
                                  <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                                  <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                  <div class="course-reviews">
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <span class="total-reviews">(105 reviews)</span>
                                  </div><!--/.course-reviews-->
                                  <div class="trainer-profile clearfix">
                                      <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                      <div class="trainer-info">
                                          <h3>Kelium Smith</h3>
                                          <p>24 april 2017</p>
                                      </div>
                                      <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                  </div><!--/.trainer-profile-->
                              </div><!--/.course-content-->
                          </div><!--/.single-course-item-end-->
                      </div><!--/.col-lg-4-->

                        <?php
                        }
                         ?>



                    <div class="col-lg-4 col-sm-6 business">
                        <!--Single Course Item Start-->
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="images/courses/course2.jpg" alt="img">
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <span class="course-duration">2.2 hours</span>
                            </div><!--/.course-thumb-area-->
                            <div class="course-content">
                                <h2><a href="single-course.html">Isometric Mockup Design</a></h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                <div class="course-reviews">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="total-reviews">(105 reviews)</span>
                                </div><!--/.course-reviews-->
                                 <div class="trainer-profile clearfix">
                                    <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                    <div class="trainer-info">
                                        <h3>Kelium Smith</h3>
                                        <p>24 april 2017</p>
                                    </div>
                                    <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                </div><!--/.trainer-profile-->
                            </div><!--/.course-content-->
                        </div><!--/.single-course-item-end-->
                    </div><!--/.col-lg-4-->
                    <div class="col-lg-4 col-sm-6 design photography">
                        <!--Single Course Item Start-->
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="images/courses/course3.jpg" alt="img">
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <span class="course-duration">2.2 hours</span>
                            </div><!--/.course-thumb-area-->
                            <div class="course-content">
                                <h2><a href="single-course.html">HTML5 Essential Training</a></h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                <div class="course-reviews">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="total-reviews">(105 reviews)</span>
                                </div><!--/.course-reviews-->
                                 <div class="trainer-profile clearfix">
                                    <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                    <div class="trainer-info">
                                        <h3>Kelium Smith</h3>
                                        <p>24 april 2017</p>
                                    </div>
                                    <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                </div><!--/.trainer-profile-->
                            </div><!--/.course-content-->
                        </div><!--/.single-course-item-end-->
                    </div><!--/.col-lg-4-->
                    <div class="col-lg-4 col-sm-6 development business">
                        <!--Single Course Item Start-->
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="images/courses/course4.jpg" alt="img">
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <span class="course-duration">2.2 hours</span>
                            </div><!--/.course-thumb-area-->
                            <div class="course-content">
                                <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                <div class="course-reviews">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="total-reviews">(105 reviews)</span>
                                </div><!--/.course-reviews-->
                                <div class="trainer-profile clearfix">
                                    <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                    <div class="trainer-info">
                                        <h3>Kelium Smith</h3>
                                        <p>24 april 2017</p>
                                    </div>
                                    <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                </div><!--/.trainer-profile-->
                            </div><!--/.course-content-->
                        </div><!--/.single-course-item-end-->
                    </div><!--/.col-lg-4-->

                    <div class="col-lg-4 col-sm-6 design">
                        <!--Single Course Item Start-->
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="images/courses/course5.jpg" alt="img">
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <span class="course-duration">2.2 hours</span>
                            </div><!--/.course-thumb-area-->
                            <div class="course-content">
                                <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                <div class="course-reviews">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="total-reviews">(105 reviews)</span>
                                </div><!--/.course-reviews-->
                                <div class="trainer-profile clearfix">
                                    <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                    <div class="trainer-info">
                                        <h3>Kelium Smith</h3>
                                        <p>24 april 2017</p>
                                    </div>
                                    <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                </div><!--/.trainer-profile-->
                            </div><!--/.course-content-->
                        </div><!--/.single-course-item-end-->
                    </div><!--/.col-lg-4-->
                    <div class="col-lg-4 col-sm-6 development photography">
                        <!--Single Course Item Start-->
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="images/courses/course6.jpg" alt="img">
                                <div class="course-meta">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <span class="course-duration">2.2 hours</span>
                            </div><!--/.course-thumb-area-->
                            <div class="course-content">
                                <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                <div class="course-reviews">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="total-reviews">(105 reviews)</span>
                                </div><!--/.course-reviews-->
                                <div class="trainer-profile clearfix">
                                    <img class="rounded-circle" src="images/author/author-1.jpg" alt="img">
                                    <div class="trainer-info">
                                        <h3>Kelium Smith</h3>
                                        <p>24 april 2017</p>
                                    </div>
                                    <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                                </div><!--/.trainer-profile-->
                            </div><!--/.course-content-->
                        </div><!--/.single-course-item-end-->
                    </div><!--/.col-lg-4-->
                </div><!--/.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="group-btn text-center">
                            <a href="#" class="btn btn-default btn-primary">Start Your Free Trail</a>
                            <a href="#" class="btn btn-default">Explore More Courses</a>
                        </div><!--/.form-group-btn-->
                    </div><!--/.col-lg-12-->
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
                                    <h2><span class="counter">874</span></h2>
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
                                    <h2><span class="counter">472</span></h2>
                                    <p>E-Book</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-counter">
                                    <h2><span class="counter">243</span></h2>
                                    <p>Teachers</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section>

        <section id="category-section" class="category-section-area">
              <div class="container">
                  <div class="row justify-content-md-center">
                      <div class="col-lg-8">
                          <div class="section-heading-area text-center">
                              <h2 class="section-heading text-capitalize">Our categories</h2>
                          </div><!--/.section-heading-area-->
                      </div><!--/.col-lg-8-->
                  </div><!--/.row-->

                  <div id="masonry" class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/1.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/1.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Photography</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/2.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/2.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Languages</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/3.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/3.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Content</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/4.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/4.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Marketing</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/5.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/5.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Networking</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/7.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/7.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Music</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/6.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/6.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Tearching For Kid</h3>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/9.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/9.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Design</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                      <div class="col-lg-3 col-md-6 col-sm-6 grid">
                          <a href="images/categories/8.jpg" class="single-category">
                              <img class="border-radius img-fluid" src="images/categories/8.jpg" alt="thumb">
                              <div class="category-overlay overlay-text">
                                  <div class="tb">
                                      <div class="tb-cell">
                                          <i class="fa fa-camera"></i>
                                          <h3>Driving</h3>
                                      </div>
                                  </div>
                              </div>
                          </a><!--/.single-category-->
                      </div><!--/.col-lg-3-->
                  </div><!--/.row-->
              </div><!--/.container-->
          </section><!--/.category-section-->

<?php
include 'footer.php';
 ?>
