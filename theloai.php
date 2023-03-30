<head>
    
</head>
<section class="course" id="course">
        <h1 class="heading"> Khóa Học <span>Nổi Bật</span> </h1>
        <div class="box-container">
        <?php
                      
                     // var_dump(  $llang1);
                      
                      if(isset(  $llang1)&&(count(  $llang1) > 0)){
                          foreach(  $llang1 as $i){    
                            $id = $i['cat_id'];
                                  echo'

                                  <div class="box" >
                                  <img src="'.$i['image'].'" alt="">
                                  <h3>'.$i['name'].'</h3>
                                  <div class="stars">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                  </div>
                                  
                                  <a href="#"><button class="btn">Xem thêm</button></a>
                              </div>   
                                  ';   
                             
                          }
                      }
                        
                    ?>
                   
      <!--      <div class="box" >
                <img src="image/css.png" alt="">
                <h3>Lập trình CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/js.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/html.png" alt="">
                <h3>Phát triển Web</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/python.png" alt="">
                <h3>Python</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div> -->
        </div>
        
    </section>
    <section class="count">
        <h1 class="heading">Chủ Đề <span>Phổ biến</span> </h1>
        <div class="box-container">
           <div class="box">
              <i class="fas fa-graduation-cap"></i>
              <div class="content">
                 <h3>CSS</h3>
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
               <h3>Angular</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Typescript</h3>
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
    <!--  -->
    <section class="new-course" id="new-course">
        <div class="subject">
            <h1>Các khóa học để bạn bắt đầu</h1>
            <ul>
                <li><a href="#">Phổ biến nhất</a></li>
                <li><a href="#">Mới nhất</a></li>
                <li><a href="#">Thịnh hành</a></li>
            </ul>
        </div>
        <h1 class="heading">Phổ biến <span>nhất</span> </h1>
        <div class="box-container">
        <?php
                        if(isset(  $llang1)&&(count(  $llang1) > 0)){
                            foreach(  $llang1 as $i){    
                              $id = $i['cat_id'];
                                    echo'
  
                                    <div class="box" >
                                    <img src="'.$i['image'].'" alt="">
                                    <h3>'.$i['name'].'</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    
                                    <a href="#"><button class="btn">Xem thêm</button></a>
                                </div>   
                                    ';   
                               
                            }
                        }
                          
                    ?>
   <!--    <div class="box">
                <img src="image/css.png" alt="">
                <h3>CSS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="subject.php"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box">
                <img src="image/js.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
        
            <div class="box">
                <img src="image/html.png" alt="">
                <h3>HTML</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box">
                <img src="image/php.png" alt="">
                <h3>PHP</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">add to cart</button></a>
            </div> -->
        </div> 
        
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
