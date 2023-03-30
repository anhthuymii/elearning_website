
    <head>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/ptweb.css">    
        <link rel="stylesheet" href="css/baihoc.css">    
    </head>

    

    
    <div id="content" class="container">
        <div id="post">
            <img class="img_subject" src="image/subject1.png">
        </div>
        <div id="sidebar" class="h1">
            <h1>Khóa học CSS</h1>
            <h2>Thầy: Nguyễn Văn A</h2>
            <h2><i class="fa fa-star" aria-hidden="true"></i> Mô tả:</h2> 
            <p>CSS là khóa học giúp bạn dễ dàng nắm vững các kỹ thuật thiết kế web từng bước một từ cơ bản đến chuyên sâu. Bên cạnh đó, bạn sẽ được đào tạo bởi giảng viên là Project Manager/ Leader với nhiều năm kinh nghiệm làm việc và giảng dạy trong và ngoài doanh nghiệp.</p>
            <h2><i class="fa fa-star" aria-hidden="true"></i> Ưu điểm của khóa học</h2> 
            <p> <i class="fa fa-check" aria-hidden="true"></i> Cam Kết Nắm Vững Kiến Thức HTML & CSS Sau Khi Hoàn Thành Khóa Học.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Thời gian học tập linh động, có thể học bất kỳ thời điểm nào.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Không bị giới hạn địa lý, nơi nào cũng có thể học được.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Được tư vấn thời gian biểu học tập phù hợp với quỹ thời gian của bạn.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Chủ động học theo tiến độ riêng.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Quá trình học tập của bạn sẽ được theo sát bởi đội ngũ LetDiv.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Giảng viên review từng dòng code. Hỗ trợ nhanh chóng nếu gặp khó khăn, và hỗ trợ cho đến khi học viên hiểu rõ 100% vấn đề.</p>

        </div>
        <div class="clear"></div>
    </div>

    <?php
            // var_dump($kq);
            if(isset( $kq)&&(count( $kq) > 0)){      
                foreach( $kq as $chap){    
                    echo'
                    <section class="menu" id="menu">

                    <h1 class="heading"> Bài <span>Giảng</span> </h1>

                    <ul class="list" >
                        <li class="btn active" data-src="'.$chap['video'].'">Chương '.$chap['chap_id'].'</li>
                        
                    </ul>
                    <div class="row">

                    <div class="image">
                        <iframe width="550" height="315" src="'.$chap['video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        
                    <div class="content">
                        <div class="info">
                            <h2>Chương '.$chap['chap_id'].'  <i class="fa fa-play" aria-hidden="true"></i>'.$chap['name'].'</h2>
                            
                            
                        </div>
                        <div class="info">
                            <h3> <span>02.</span> Tìm hiểu cú pháp trong CSS</h3>
                            
                        </div>
                        <div class="info">
                            <h3> <span>03.</span> Tìm hiểu về bộ chọn (Selector) trong CSS </h3>
                            
                        </div>
                        <div class="info">
                            <h3> <span>04.</span> Cách thêm CSS vào các file HTML </h3>
                            
                        </div>
                        <div class="info">
                            <h3> <span>05.</span> Làm sao để comments trong CSS </h3>
                            
                        </div>
                        </div>
            
                    </div>
                    </section>
                        ';       
                   
                }
            }
              
        ?>                
                    
        

    

    <div class="open accordion" id="accordionExample">
        <h1>Nội dung khóa học</h1>
        <p>• 13 chương • 163 bài học</p>
        <div class="accordion-item">
            <?php
            
                    //var_dump($kq);
                        if(isset( $kq)&&(count( $kq) > 0)){
                             
                            foreach( $kq as $chap){    

                                echo'<h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Chương '.$chap['chap_id'].'  <i class="fa fa-play" aria-hidden="true"></i>'.$chap['name'].'
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                            <iframe src="'.$chap['reference'].'" width="100%" height="500px"></iframe>
                                    <a href="test1_css.php">Kiểm tra trắc nghiệm Chương '.$chap['chap_id'].'</a>
                                        </div>
                                        </div>
                                    
                                    ';       
                               
                            }
                        }
                          
                    ?>
        </div>        
    
    </div>

