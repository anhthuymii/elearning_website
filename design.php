<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Developement</title>
        
         <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/ptweb.css">        
    </head>
<body>
    <header>
        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">TRANG CHỦ</a></li>
                <li><a href="#menu">THỂ LOẠI</a>
                    <ul>
                        <li><a href="phattrien.php">Phát Triển Web</a>
                            <ul>
                                <li><a href="css.php">CSS</a></li>
                                <li><a href="js.php">JavaScript</a></li>
                                <li><a href="#html">HTML5</a></li>
                                <li><a href="#php">PHP</a></li>
                                <li><a href="#rjs">ReactJS</a></li>
                                <li><a href="#ts">Typescript</a></li>
                                <li><a href="#ag">Angular</a></li>
                                <li><a href="#njs">Node.Js</a></li>
                            </ul>
                        </li>
                        <li><a href="it-software.php">Khoa Học Dữ Liệu</a>
                            <ul>
                                <li><a href="#css">Python</a></li>
                                <li><a href="#js">Học máy</a></li>
                                <li><a href="#html">Phân tích dữ liệu</a></li>
                                <li><a href="#php">Học sâu</a></li>
                                <li><a href="#rjs">Trí tuệ nhân tạo</a></li>
                                <li><a href="#ts">R</a></li>
                                <li><a href="#ag">Thống kê</a></li>
                                <li><a href="#njs">Xử lý ngôn ngữ tự nhiên</a></li>
                            </ul>
                        </li>
                        <li><a href="design.php">Ngôn Ngữ Lập Trình</a>
                            <ul>
                                <li><a href="java.php">Java</a></li>
                                <li><a href="c.php">C</a></li>
                                <li><a href="#">C++</a></li>
                                <li><a href="#">C#</a></li>
                                <li><a href="#">Python</a></li>
                                <li><a href="#">ReactJS</a></li>
                                <li><a href="#">Khung Spring</a></li>                    
                                <li><a href="#">Go</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="giangvien.php">GIẢNG VIÊN</a></li>
                <li><a href="#">Quá trình học tập của tôi</a></li>
            </ul>
        </nav>
        <form action="" class="search-form">
            <div class="search-box">
                <div class="search-input">
                    <input type="text" placeholder="Search..."/>
                </div>
                <button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
        <a href="login.php">
            <div id="login" class="fas fa-user-circle"></div>
        </a>
    </header>

    <div class="danhmuc">
        <nav >
            <ul>
                <li><a href="design.php" class="theloai">Ngôn Ngữ Lập Trình</a></li>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <li><a href="java.php">Java</a></li>
                <li><a href="c.php">C</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">C#</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">ReactJS</a></li>
                <li><a href="#">Khung Spring</a></li>                    
                <li><a href="#">Go</a></li>
            </ul>
        </nav>
    </div>
    <div class="subject">
        <h1>Khóa học ngôn ngữ lập trình</h1><a href="#css" id="#css"></a>
    </div>

    <section class="course" id="course">
        <h1 class="heading"> Khóa Học <span>Nổi Bật</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <img src="image/java.png" alt="">
                <h3>Lập trình Java</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/c.png" alt="">
                <h3>Lập trình C</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/c++.png" alt="">
                <h3>Lập trình c++</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-left">
                <img src="image/c+++.png" alt="">
                <h3>Lập trình c#</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
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
            <div class="box" data-aos="fade-right">
                <img src="image/c.png" alt="">
                <h3>Lập trình C</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="c.php"><button class="btn">Xem thêm</button></a>
            </div>
            <div class="box" data-aos="fade-right">
                <img src="image/java.png" alt="">
                <h3>Lập trình Java</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="java.php"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/c++.png" alt="">
                <h3>Lập trình C++</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-left">
                <img src="image/c+++.png" alt="">
                <h3>Lập trình C#</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        </div>
        
    </section>

    <!-- teacher -->
    <section class="teacher" id="teacher">
        <h1 class="heading">Giảng <span>Viên</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-md" data-aos="fade-right">
                    <div class="testimonial-body ">
                    <div class="img">
                    <img src="./images/testimo3.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Maria Sheryl</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up">
                    <div class="testimonial-body two">
                    <div class="img">
                    <img src="./images/testimo5.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Sheryl SandBerg</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-left">
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
    

    <div class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-map-marker-alt"></i> mumbai, indai 400104 </p>
                <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-phone"></i> +111-222-333 </p>
            </div>
    
            <div class="box">
                <h3>quick links </h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">popular</a>
                <a href="#">gallery</a>
                <a href="#">order</a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="#">instagram</a>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
    
        </div>
    
        <h1 class="credit">create by <a href="#">mr. web designer</a> all rights reserved. </h1>
    
    </div>
    
    <!-- footer section ends -->
</body>
</html>    