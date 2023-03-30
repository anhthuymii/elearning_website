<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giảng viên add</title>
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
        <div style="color: black; font-size: 15px;">My new course</div> <br>
        <div class="textbar">
            <ul>
                <li><a href="create_lesson.php">Course page</a></li>
                <li><a href="#">Builder</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Group</a></li>
            </ul>
        </div>
        <br>
        <div class="iconbar">
            <i class="fa-solid fa-circle-plus"><a href="giangvien.php"></a></i> &ensp;
            <i class="fa-solid fa-rotate-left"><a href="#"></a></i> &nbsp;
            <i class="fa-solid fa-rotate-right"><a href="#"></a></i> &ensp;
            <i class="fa-solid fa-circle-exclamation"><a href="#"></a></i> &ensp;
            <i class="fa-solid fa-list"><a href="#"></a></i>
        </div> <br>
        <div class="formsite">
            <form action="action_page.php" method="get" id="nameform">
                <label for="tieude">Nhập tiêu đề</label><br>
                <input type="text" name="tieude" id="tieude" value="" style="border:#000; background-color:rgb(207, 230, 230); height: 30px; width: 300px; border-radius: 5px;"><br><br>
                <label for="note">Mô tả</label><br>
                <textarea name="note" id="note" cols="30" rows="5" style="background-color:rgb(207, 230, 230); border-radius: 5px;"></textarea> <br><br>

                <label for="">Ngày tạo</label>
                <input type="date" id="start" name="trip-start"
                    value=""
                    min="2022-11-01" max="2025-12-31"
                    style="border:#000; background-color:rgb(207, 230, 230); height: 30px; width: 110px; border-radius: 5px;"><br><br>
                <label for="">Tải lên</label>
                <form action="/action_page.php" method="get" id="nameform">
                    <input type="file" id="myFile" name="filename">
                  </form> <br>
                  <select name="choice">
                    <option value="first" selected>Chọn thể loại</option>
                    <option value="second">Phát triển web</option>
                    <option value="third">Khoa học dữ liệu</option>
                    <option value="fourth">Ngôn ngữ lập trình</option>
                  </select> <br><br>
                  <select name="choice">
                    <option value="first" selected>Chọn ngôn ngữ</option>
                    <option value="second">Java</option>
                    <option value="third">C#</option>
                    <option value="fourth">C++</option>
                    <option value="fifth">C</option>
                    <option value="sixth">Python</option>
                  </select> <br><br>
            </form>
            <input type="submit" form="nameform" style="border: black; height: 30px; width: 50px; border-radius: 5px; background-color:rgb(207, 230, 230); border-color: black;" value="Submit"> &ensp;
            <button type="reset" form="nameform" style="border: black; height: 30px; width: 50px; border-radius: 5px; background-color:rgb(207, 230, 230); border-color: black;">Reset</button>
        </div> <br>
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