<?php
include 'connection.php';
include 'header.php';
?>


    <!--====Home Search Section
    ====================================-->
    <div id="home-search-section" class="home-search-section-area bg-image home-header-one" style="background-image: url(images/welcome-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-text text-center tb">
                        <div class="tb-cell">
                            <h1>Learn from the best Mentors</h1>

                        </div><!--/.tb-cell-->
                    </div><!--/.welcome-text-->
                </div><!--/.col-lg-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/#home-search-section-->

    <!--====Services Section
    ====================================-->
    <section id="services-section" class="services-section-area s-pd1">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
				    <div class="section-heading-area text-center">
					    <h2 class="section-heading text-capitalize">This is what we offer you</h2>
                        <p>Go Pro during the pandemic with best Mentors.</p>
				    </div><!--/.section-heading-area-->
				</div><!--/.col-lg-8-->
			</div><!--/.row-->
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="images/icon/s-icon1.png" alt="icon">
				        </div>
						<h3>Expert Instructors</h3>
						<!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="images/icon/s-icon2.png" alt="icon">
				        </div><!--/.row-->
						<h3>Learn Anywhere</h3>
						<!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut  enim ad minim veniam.</p> -->
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="images/icon/s-icon3.png" alt="icon">
				        </div><!--/.row-->
						<h3>Unlimited Access</h3>
						<!-- <p>Sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->
			</div><!--/.row-->
		</div><!--/.container-->
	</section><!--/#services-section-->



    <!--====Counter Section
    ====================================-->
    <section class="counter-section before-bg bg-image s-pd145" style="background-image: url(images/counter-bg.jpg);">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-6">
                            <div class="single-counter">
                                <h2><span class="counter">100</span>+</h2>
                                <p>courses</p>
                            </div><!--/.single-counter-->
                        </div><!--/.col-lg-3-->
                        <div class="col-lg-3 col-sm-3 col-6">
                            <div class="single-counter">
                                <h2><span class="counter">600</span>+</h2>
                                <p>students</p>
                            </div><!--/.single-counter-->
                        </div><!--/.col-lg-3-->
                        <div class="col-lg-3 col-sm-3 col-6">
                            <div class="single-counter">
                                <h2><span class="counter">40</span>+</h2>
                                <p>E-Book</p>
                            </div><!--/.single-counter-->
                        </div><!--/.col-lg-3-->
                        <div class="col-lg-3 col-sm-3 col-6">
                            <div class="single-counter">
                                <h2><span class="counter">50</span>+</h2>
                                <p>Teachers</p>
                            </div><!--/.single-counter-->
                        </div><!--/.col-lg-3-->
                    </div><!--/.row-->
                </div><!--/.col-lg-10-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.counter-section-->



    <!--====Courses Section
    ====================================-->
    <section id="courses-section" class="popular-courses-area bg-gray s-pd2">
    <div class="container">
        <div class="row justify-content-md-center">
        <div class="col-lg-8">
            <div class="section-heading-area text-center" style="padding:0px;">
              <h2 class="section-heading text-capitalize" >Popular Courses</h2>

              <div class="row">
                  <div class="col-lg-12">
                      <ul class="list-unstyled popular-filter-nav text-center">
                        <?php
                        $q2 = "select distinct ct.coursecat, ct.catid  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat order by c.courseid asc";
                        $r2 = mysql_query($q2);
                        while (list($coursecat, $coursecatid ) = mysql_fetch_array($r2)) {
                        ?>
                          <li><a class="filter" href="#" onclick="coursefilter('<?php echo $coursecatid; ?>')" value = "<?php echo $coursecatid; ?>"  data-filter=".<?php echo $coursecatid; ?>"><?php echo $coursecat; ?></a></li>
                          <?php
                        }
                           ?>
                      </ul><!--/.popular-filter-nav-->
                  </div><!--/.col-lg-12-->
              </div><!--/.row-->

            </div><!--/.section-heading-area-->
        </div><!--/.col-lg-8-->
      </div><!--/.row-->

      <div id="coursesfilter" class="row courses-item-content" style="position:initial;">
        <?php
        $q4 = "select  c.courseid, c.coursecat, c.cat2, c.subject, c.coursename, c.tags, c.price, c.description1, s.subject, cl.coursecat, ct.coursecat, ct.catid  from courses c join coursesub s on s.subjectid = c.subject join coursecat ct on ct.catid = c.cat2 join courseclass cl on  cl.classid = c.coursecat  order by rand() limit 6";
        $r4 = mysql_query($q4);
        // echo $r4;
        while (list($courseid, $coursecatid, $cat2id, $subjectid, $coursename, $tags, $price, $description1, $subject, $courseclass, $cat, $catid  ) = mysql_fetch_array($r4)) {
          // if($j < 6)
          // {
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
      }
      ?>

      </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                    <div class="group-btn text-center">
                        <a href="register.php" class="btn btn-default btn-primary">Register</a>
                        <a href="courses.php" class="btn btn-default">Explore More Courses</a>
                    </div><!--/.form-group-btn-->
                </div><!--/.col-lg-12-->
        </div><!--/.row-->
    </div><!--/.container-->
  </section><!--/#courses-section-->



    <!--====Testimonial Section
    ====================================-->
    <section id="testimonial-section" class="testimonial-area before-bg bg-image s-pd125" style="background-image: url(images/map.png);">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-9">
                    <div id="customer-reviews" class="owl-carousel" data-slider-id="1">
                        <!--Single Customer Review-->
                        <div class="single-customer-review text-center">                             <span class="fa fa-quote-left"></span>
                          <p>With Paatashlas'  best Mentors I am able to understand the Class 10 Science Concepts and helped me in gaining better marks</p>
                            <div class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--/.review-rating-->
                            <h4><span>Abhay</span> - Class 8</h4>
                        </div><!--/.single-customer-review-->

                        <!--Single Customer Review-->
                        <div class="single-customer-review text-center">                             <span class="fa fa-quote-left"></span>
                          <p>Maths Learning has  been easy with Paatashalas' Qualified Mentors </p>
                            <div class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--/.review-rating-->
                            <h4><span>Sai Krishna</span> - Class 10</h4>
                        </div><!--/.single-customer-review-->

                        <!--Single Customer Review-->
                        <div class="single-customer-review text-center">                             <span class="fa fa-quote-left"></span>
                          <p>Thanks to Paatashlas , My Daughter now has better understanding of her subjects and gets good  marks now</p>
                            <div class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!--/.review-rating-->
                            <h4><span>Radha</span> - Intermediate 2nd Year student's Mother</h4>
                        </div><!--/.single-customer-review-->
                    </div><!--/#customer-reviews-->
                    <!-- <div class="owl-thumbs text-center" data-slider-id="1">
                        <button class="owl-thumb"><img src="images/author/author-2.png" alt="img"></button>
                        <button class="owl-thumb"><img src="images/author/author-2.png" alt="img"></button>
                        <button class="owl-thumb"><img src="images/author/author-2.png" alt="img"></button>
                    </div><!--/.owl-thumbs--> -->
                </div><!--/.col-lg-9-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#testimonial-section-->

    <!--====Faqs Section
    ====================================-->
    <section id="faqs-section" class="faqs-section-area s-pd1">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <div class="section-heading-area text-center">
                        <h2 class="section-heading text-capitalize">Frequently Asked Questions</h2>
                    </div><!--/.section-heading-area-->
                </div><!--/.col-lg-8-->
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <!--Single FAQ-->
                    <div class="sengle-faq">
                        <span class="faq-number">A</span>
                        <div class="sengle-faq-content">
                            <h3>Officia deserunt mollit anim est laborum?</h3>
                            <P>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                        </div>
                    </div><!--/.sengle-faq-end-->

                    <!--Single FAQ-->
                    <div class="sengle-faq">
                        <span class="faq-number">C</span>
                        <div class="sengle-faq-content">
                            <h3>Excepteur sint occaecat cupidatat?</h3>
                            <P>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div><!--/.sengle-faq-end-->
                </div><!--/.col-lg-6-->

                <div class="col-lg-6 col-sm-12">
                    <!--Single FAQ-->
                    <div class="sengle-faq">
                        <span class="faq-number">B</span>
                        <div class="sengle-faq-content">
                            <h3>Sed ut perspiciatis unde omnis?</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div><!--/.sengle-faq-end-->
                    <!--Single FAQ-->
                    <div class="sengle-faq">
                        <span class="faq-number">D</span>
                        <div class="sengle-faq-content">
                            <h3>Duis aute irure dolor in reprehenderit?</h3>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                    </div><!--/.sengle-faq-end-->
                </div><!--/.col-lg-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#faqs-section-->



<script type="text/javascript">


function coursefilter(catid){

// console.log(catid);
  if (catid=="") {
    document.getElementById("coursesfilter").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {
    document.getElementById("coursesfilter").innerHTML=this.responseText;
  }

}
  xmlhttp.open("GET", "coursefilter.php?catid="+catid, true);
  xmlhttp.send();


}


</script>

<?php
include 'footer.php';
 ?>
