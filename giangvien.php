<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giảng viên</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/gv.css">
        <script src="https://kit.fontawesome.com/b3fd519d58.js" crossorigin="anonymous"></script>
    </head>
<body>
    <header>
        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">TRANG CHỦ</a></li>
                <li><a href="#menu">THỂ LOẠI</a>
                    <ul>
                        <li><a href="phattrien.php">Phát Triển Web</a></li>
                        <li><a href="it-software.php">Khoa Học Dữ Liệu</a></li>
                        <li><a href="design.php">Ngôn Ngữ Lập Trình</a></li>
                    </ul>
                </li>
                <li><a href="giangvien.php">GIẢNG VIÊN</a></li>
                <li><a href="#">...</a></li>
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

    <section>
        <div class="form" style="font-size: 15px;"><i class="fa-duotone fa-plus" style="font-size: 20px;"></i> Add New Page
        </div>
        <div>
            <form action="action_page.php" style="border-color: black;">
                <input type="text" name="txt" value="" style="border:#000; background-color:rgb(207, 230, 230); height: 30px; border-radius: 5px;"> &ensp;
                <button class="button" onclick="location.href = link" style="border: black; height: 30px; width: 40px; border-radius: 5px; background-color:rgb(207, 230, 230); border-color: black;"><i class="fa-solid fa-eye"></i></button> &ensp;
                <!-- <button class="button" onclick="location.href = 'gvadd.php';" style="border: black; height: 30px; width: 60px; border-radius: 5px; background-color:rgb(207, 230, 230); border-color: black;"><i class="fa-duotone fa-plus"></i> &ensp;Add</button> -->
                <a href="gvadd.php" class="button">
                    <span class="button-icon">
                        <i class="fa-duotone fa-plus"></i>
                    </span>
                    &nbsp;
                    <span class="button-text">
                        Add
                    </span>
                </a>
            </form>
        </div>
        <br>
        <div class="list" style="font-size: 15px; color: #000; background-color: rgb(207, 230, 230); padding: 10px 5px;">
            <i class="fa-solid fa-list" onclick=""></i> &ensp; Course &ensp; <i class="fa-solid fa-pen"></i> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<i class="fa-solid fa-toggle-on"></i> &ensp; <i class="fa-solid fa-clock"></i> &ensp; <i class="fa-solid fa-xmark"></i><br>
            <i class="fa-solid fa-list" onclick=""></i> &ensp; Course &ensp; <i class="fa-solid fa-pen"></i> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<i class="fa-solid fa-toggle-on"></i> &ensp; <i class="fa-solid fa-clock"></i> &ensp; <i class="fa-solid fa-xmark"></i><br>
            <i class="fa-solid fa-list" onclick=""></i> &ensp; Course &ensp; <i class="fa-solid fa-pen"></i> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<i class="fa-solid fa-toggle-on"></i> &ensp; <i class="fa-solid fa-clock"></i> &ensp; <i class="fa-solid fa-xmark"></i><br>
            <i class="fa-solid fa-list" onclick=""></i> &ensp; Course &ensp; <i class="fa-solid fa-pen"></i> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<i class="fa-solid fa-toggle-on"></i> &ensp; <i class="fa-solid fa-clock"></i> &ensp; <i class="fa-solid fa-xmark"></i><br>

        </div>
        <br>
        <div>
            <input type="submit" style="border: black; height: 30px; width: 40px; border-radius: 5px; background-color:rgb(207, 230, 230); border-color: black;" value="Close">
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