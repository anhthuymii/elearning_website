
<section class="home" id="home" class="banner"> 
    <div class="owl-carousel owl-theme">
            <div class="item item-1 ">
            <div class="banner-content ">
                <h1 class="ml1">Welcome to </h1>
                <h2 class="ml1">Online Education</h2>
                <div class="banner-links">
                <a href="login.php">Get Started</a>
                <a href="#order">Conatct Us</a>
                </div>
            </div>
            <div class="banner-img ">
                <img src="./image/bg2.png" class=" vert-move img-fluid" alt="">
            </div>
            </div>
            <div class="item item-1">
            <div class="banner-content align-self-center">
                <h1 class="ml1">Welcome to Online Education</h1>
                <div class="banner-links">
                    <a href="login.php">Get Started</a>
                    <a href="#order">Conatct Us</a>
                </div>
            </div>
            <div class="banner-img">
                <img src="./image/bg3.png" class=" vert-move img-fluid" alt="">
            </div>
            </div>
            <div class="item item-1">
            <div class="banner-content ">
                <h1 class="ml1">Welcome to Online Education</h1>
                <div class="banner-links">
                    <a href="login.php">Get Started</a>
                    <a href="#order">Conatct Us</a>
                </div>
            </div>
            <div class="banner-img">
                <img src="./image/bg1.png" class=" vert-move img-fluid" alt="">
            </div>
            </div>
        </div>
        <div class="my-owl-nav1">
            <span class="my-next-button1">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="my-prev-button1">
            <i class="fa-solid fa-arrow-right"></i>
            </span>
    </div>
  </section>
  <section class="count">
    <div class="box-container">
       <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <div class="content">
             <h3>150+</h3>
             <p>courses</p>
          </div>
       </div>
       <div class="box">
          <i class="fas fa-user-graduate"></i>
          <div class="content">
             <h3>1300+</h3>
             <p>students</p>
          </div>
       </div>
 
       <div class="box">
          <i class="fas fa-chalkboard-user"></i>
          <div class="content">
             <h3>80+</h3>
             <p>teachers</p>
          </div>
       </div>
 
       <div class="box">
          <i class="fas fa-face-smile"></i>
          <div class="content">
             <h3>100%</h3>
             <p>satisfaction</p>
          </div>
       </div>
    </div>
 </section>

 <section class="about" id="about">

    <div class="image" data-aos="fade-right"></div>

    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>Sự phát triển của hình thức dạy học trực tuyến đã giúp cho việc “Học mọi 
nơi, học mọi lúc, học mọi thứ, học mềm dẻo, học một cách mở và học suốt đời” 
của con người trở thành hiện thực và là một xu hướng tất yếu có tính cách mạng 
đối với hoạt động dạy học.</p>
        <p>Với mong muốn tạo ra một môi trường học tập cho những sinh viên đang theo học ngành CNTT và người có hứng thú với lĩnh vực này có thể học từ xa mà không cần đến trường, lớp. Ngoài ra các khóa học hoàn toàn miễn phí.</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section> 


<section class="course" id="course">

<h1 class="heading"> Khóa <span>Học</span> </h1>

<div class="box-container">

<?php
                        // var_dump($lcourse);
                      
                        if(isset($lcourse)&&(count($lcourse) > 0)){
                            foreach($lcourse as $i){    
                                    echo'
                                    <div class="box" data-aos="fade-right">
                                    <img src="'.$i['image'].'" alt="">
                                    <h3>'.$i['name'].'</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    
                                    <a href="java.php"><button class="btn">Xem thêm</button></a>
                                </div>   
                                    ';   
                               
                            }
                        }
                        
                    ?>
                   
    
</div>
</section>

<section class="teacher" id="teacher">
    <h1 class="heading">Giảng <span>Viên</span> </h1>
    <div class="container">
        <div class="row">
            <div class="col-md" data-aos="fade-right">
                <div class="testimonial-body ">
                <div class="img">
                <img src="./images/testimo3.jpg" alt=""/>
                </div>
                <p>Người dám dạy phải không bao giờ ngừng học.</p>
                <h4>Maria Sheryl</h4>
                <h6>Web desinger</h6>
                </div>
            </div>
            <div class="col-md" data-aos="fade-up">
                <div class="testimonial-body two">
                <div class="img">
                <img src="./images/testimo5.jpg" alt=""/>
                </div>
                <p> Dạy học không phải là làm đầy một thùng nước mà là thắp sáng một ngọn đuốc. </p>
                <h4>Sheryl SandBerg</h4>
                <h6>Freelance Developer</h6>
                </div>
            </div>
            <div class="col-md" data-aos="fade-left">
                <div class="testimonial-body">
                <div class="img">
                <img src="./images/testimo2.jpg" alt=""/>
                </div>
                <p>Dạy tức là học hai lần.</p>
                <h4>Jason David</h4>
                <h6>Fulltime Developer</h6>
                </div>
          </div>
        </div>
    </div>


</section>
 <!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> STUDENT'S <span>REVIEWS</span></h1>
 
    <div class="swiper reviews-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập</p>
             <div class="user">
                <img src="image/pic-1.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập</p>
             <div class="user">
                <img src="image/pic-2.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập.</p>
             <div class="user">
                <img src="image/pic-3.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập.</p>
             <div class="user">
                <img src="image/pic-4.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập.</p>
             <div class="user">
                <img src="image/pic-5.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
          <div class="swiper-slide slide">
             <p>Bài dạy ngắn gọn, dễ hiểu. Chủ đề đa dạng. Có bài tập thực hành và trắc nghiêm để học sinh ôn tập.</p>
             <div class="user">
                <img src="image/pic-6.png" alt="">
                <div class="user-info">
                   <h3>john deo</h3>
                   <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                   </div>
                </div>
             </div>
          </div>
 
       </div>
 
       <div class="swiper-pagination"></div>
 
    </div>
 
 </section> 


<!-- gallery section ends -->

<!-- order section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> Contact <span>Us</span> </h1>

<div class="row">

    <form action="" data-aos="fade-right">
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="message"></textarea>
        <input type="submit" value="Submit" class="btn">
    </form>

    <div class="image" data-aos="fade-left">
        <img src="image/contact.png" alt="">
    </div>

</div>

</section>



<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- initializing aos  -->

<script>

    AOS.init({
        delay:400,
        duration:1000
    })

</script>

<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: true })
      .add({
        targets: '.ml2 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
      }).add({
        targets: '.ml2',
        opacity: 1,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml1');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: true })
      .add({
        targets: '.ml1 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
      }).add({
        targets: '.ml1',
        opacity: 1,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml3');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: true })
      .add({
        targets: '.ml3 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
      }).add({
        targets: '.ml3',
        opacity: 1,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
    </script>
    
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/owl.carousel.js"></script>
    <script src="./js/custom.js"></script>
    
    <!-- swiper js link  -->
    <script src="js/swiper-bundle.min.js"></script>

<!-- order section ends -->


