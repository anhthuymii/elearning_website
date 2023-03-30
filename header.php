<?php
    include "./pdo/cat.php";
    include "./pdo/lang.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website E-learning</title>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" /> 
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/4b89062b79.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsize.css">

    <!-- theloai -->
    <link rel="stylesheet" href="css/ptweb.css">

      
</head>
<body>
    <header>

        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

        <nav class="navbar">
            <ul>
                <li><a class="" href="index.php">TRANG CHỦ</a></li>
                <li><a href="index.php#about">GIỚI THIỆU</a></li>
                <li><a href="index.php?act=theloai">THỂ LOẠI</a>
                <ul>

                <?php
                    $lcat = getAllCat();
                    
                   
                    // var_dump($lcat);
                    if(isset($lcat)&&(count($lcat) > 0)){
                        foreach($lcat as $i){
                            $id=$i['cat_id'];
                            echo '<li><a href="index.php?act=theloai&&id='.$id.'">'.$i['name'].'</a><ul>';
                            $llang = getlangById($i['cat_id']);
                           
                            // var_dump($llang);
                            if(isset($llang)&&(count($llang) > 0)){
                                foreach($llang as $a){
                                    $id=$a['lag_id'];
                              //      var_dump($a);
                                    echo '
                                            <li><a href="index.php?act=ngonngu&&id='.$id.'">'.$a['name'].'</a></li>';
                                }
                                echo '</ul>';    
                            }
                            echo '</li>';
                        }
                         
                    }
                        
                ?>
                </ul>
                
                    
                </li>
                <li><a href="index.php#course">KHÓA HỌC</a></li>
                <li><a href="index.php#teacher">GIẢNG VIÊN</a></li>
                <li><a href="index.php#reviews">REVIEW</a></li>
                <li><a href="index.php#contact">CONTACT</a></li>
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
        <?php
            
            if((isset($_SESSION['username']))&&($_SESSION['username']!="")){
                $id = $_SESSION['acc'][0]['user_id'];
                if((isset($_SESSION['role']))&&($_SESSION['role']==1)){
                    
                    echo '<nav class="navbar">
                    <ul>
                        <li><a class="active" href="index.php?act=admin&&uid='.$id.'">WELCOME '.$_SESSION['username'].'</a></li>
                    ';

                }
                else if((isset($_SESSION['role']))&&($_SESSION['role']!=1)){
                    
                    echo '<nav class="navbar">
                            <ul>
                                <li><a class="active" href="index.php?act=student&&uid='.$id.'">WELCOME '.$_SESSION['username'].'</a></li>
                            
                        ';
                }
                echo '
                            <li><a class="active" href="index.php?act=logout">THOÁT</a></li></ul></nav>
                       ';
            }else{
            ?>
                <a href="login.php">
                    <div id="login" class="fas fa-user-circle"></div>
                </a>
            
            <?php }?>
    </header>