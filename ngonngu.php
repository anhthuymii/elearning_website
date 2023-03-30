
<div class="danhmuc">
        <nav >
            <ul>
                <li><a href="phattrien.php" class="theloai">Phát Triển Web</a></li>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <li><a href="subject.php">CSS</a></li>
                <li><a href="javascript.php">JavaScript</a></li>
                <li><a href="html.php">HTML5</a></li>
                <li><a href="#php">PHP</a></li>
                <li><a href="#rjs">ReactJS</a></li>
                <li><a href="#ts">Typescript</a></li>
                <li><a href="#ag">Angular</a></li>
                <li><a href="#njs">Node.Js</a></li>
            </ul>
        </nav>
    </div>
    <div class="subject">
        <h1>Các khóa học về CSS</h1><a href="#css" id="#css"></a>
        <p>CSS liên quan đến Phát triển Web</p>
        <i class="fa fa-users" aria-hidden="true"></i><a> 25063 học viên</a>
    </div>

    <section class="count">
        <h1 class="heading">Học viên cũng có thể học </h1>
        <div class="box-container">
           <div class="box">
              <i class="fas fa-graduation-cap"></i>
              <div class="content">
                 <a href="subject.php"><h3>CSS</h3></a>
                 <p>courses</p>
              </div>
           </div>
           <div class="box">
              <i class="fas fa-user-graduate"></i>
              <div class="content">
                 <h3>JavaScript</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <h3>HTML5</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <h3>PHP</h3>
                 <p>courses</p>
              </div>
           </div>
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>ReactJS</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>HTML</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Bootstrap</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Node.Js</h3>
               <p>courses</p>
            </div>
         </div>
        </div>
     </section>

    <!-- <section class="course" id="course">
        <h1 class="heading"> Các khóa học hàng đầu về <span>CSS</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <img src="image/couse1.png" alt="">
                <h3>Lập trình J2EE</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/course2.png" alt="">
                <h3>Lập trình J2EE</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/course3.png" alt="">
                <h3>Phát triển Web</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-left">
                <img src="image/course4.png" alt="">
                <h3>Python</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        </div>
        
    </section>
     -->
    <!--  -->
    <section class="new-course" id="new-course">
        <!-- <div class="new-course">
            <h1 class="h1">Các khóa học để bạn bắt đầu</h1>
            <ul>
                <li><a href="#">Phổ biến nhất</a></li>
                <li><a href="#">Mới nhất</a></li>
                <li><a href="#">Thịnh hành</a></li>
            </ul>
        </div> -->
        <h1 class="heading"> Các khóa học hàng đầu<span></span> </h1>
        <div class="box-container">
        <?php
                        if(isset(  $llang2)&&(count(  $llang2) > 0)){
                            foreach(  $llang2 as $a){    
                              $id = $a['lag_id'];
                                    echo'
  
                                    <div class="box" >
                                    <img src="'.$a['image'].'" alt="">
                                    <h3>'.$a['name'].'</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    
                                    <a href="index.php?act=course&&course_id='.$a['course_id'].'"><button class="btn">Xem thêm</button></a>
                                </div>   
                                    ';   
                               
                            }
                        }
                          
                    ?>
          <!--  <div class="box">
                <img src="image/css.png" alt="">
                <h3>CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">cơ bản</div>
                <a href="subject.php"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/css2.png" alt="">
                <h3>CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Nâng cao</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
        
            <div class="box">
                <img src="image/css3.png" alt="">
                <h3>CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">thiết kế</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/css1.png" alt="">
                <h3>CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">web</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        </div> -->
        
    </section>

    <!-- teacher -->
    <section class="teacher" id="teacher">
        <h1 class="heading">Giảng <span>Viên</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="testimonial-body ">
                    <div class="img">
                    <img src="./images/testimo3.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Maria Sheryl</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md">
                    <div class="testimonial-body two">
                    <div class="img">
                    <img src="./images/testimo5.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Sheryl SandBerg</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md">
                    <div class="testimonial-body">
                    <div class="img">
                    <img src="./images/testimo2.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Jason David</h4>
                    <h6>Profession</h6>
                    </div>
              </div>
            </div>
        </div>
    </section>
