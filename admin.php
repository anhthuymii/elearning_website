<?php 
    //   session_start();
    //   ob_start();
      if((isset($_SESSION['role']))&&($_SESSION['role']==1)){
        
        
      
?>

<head>
    <link rel="stylesheet" href="css/L.style.css">
   <link rel="stylesheet" href="css/L.css-circular-prog-bar.css">
    <script src="https://kit.fontawesome.com/4b89062b79.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/L.popup.css">
</head>

    <!-- main -->
    <section>

        <div class="main">
            <div class="search-bar">
                
                <form action="" method="post" class="search-form">
                    <div class="search">
                        <input name="s" class="search-text" type="text" placeholder="Tên gv / khóa học"/>
                        <!-- <button type="submit" name="search" class="button-search"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                        <input type="submit" value="search" class="button-search" name="search"/>

                    </div>
                </form>
            </div>
            
            <div class="search-bar">
                <p class="filter">Filter</p>
               
            </div>
            <div class="search-bar">
                <form action="" class="filter-form">
                  
                    <div class="search">
                        <select style="width: 194px;">
                            <option>All course</option>
                            <option>Completed</option>
                            <option>Learning</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="clear"></div>

                    <?php

                        if(isset($alert))
                            echo $alert;

                        // var_dump($course);
                        if(isset($lcourse)&&(count($lcourse) > 0)){
                            $a = 0;
                            foreach($lcourse as $i){
                                $a ++;
                                echo '
                                <div class="shadow mt-4 b-5 bg-body rounded row">
                                    <div class="col-1 ">
                                        <div class="tag-course"></div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="course2">
                                            <div class="fs-2 pb-4">'.$i['name'].'</div>';
                                    
                                    $id = $i['user_id'];
                                    $author = getUserById($id);
                                    $crid = $i['course_id']-100;
                                    echo'
                                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>'.$author[0]['fullname'].'</div>
                                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> '.$i['date'].'</i></div>
                                        </div>
                                    </div>
                
                                    <div class="col-2">
                                        <div class="popup" onclick="myFunction('.$i['course_id'].')">
                                            <a class="btn btn-primary bt" role="button"><i class="fa-solid fa-plus"></i></a>
                                            <div class="cont shadow " id="'.$i['course_id'].'">
                                                <ul type="none" class="fs-4 op">
                                                    <li class="mt-2"><a class="text" href="#popup1'.$i['course_id'].'">Thêm chương mới</a></li>
                                                    
                                                    <li class="mt-2"><a class="text" href="addbt.php?cid='.$i['course_id'].'">Thêm bài tập</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="popupa" onclick="popup2('.$crid.')">
                                            <a class="btn btn-primary bt" href="#" role="button"><i class="fa-solid fa-trash"></i></a>
                                            <div class="contain shadow " id="'.$crid.'">
                                                <ul type="none" class="fs-4 op">
                                                    <li class="mt-2"><a class="text" href="#popupa'.$i['course_id'].'">Xóa chương</a></li>
                                                    
                                                    <li class="mt-2"><a class="text" href="addbt.php?cid='.$i['course_id'].'">Xóa bài tập</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <a class="btn btn-primary bt" href="#" role="button"><i class="fa-solid fa-pen-to-square"></i></a>


                                        

                                    ';?>
                                 
                                    <?php
                                    // them chuong
                                    $chap = countChap($i['course_id']);
                                    $chap[0]['COUNT(*)'] += 1;
                                    // var_dump($chap);
                                    echo '<div id="popup1'.$i['course_id'].'" class="overlay">
                                            <div class="pop">
                                                <h2>Chương '.$chap[0]['COUNT(*)'].'</h2>
                                                <a class="close" href="#">&times;</a>
                                                <div class="content">
                                                    <form action="index.php?act=addchap&&uid='.$i['course_id'].'" method="post">
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Tên chương</label>
                                                            <input type="text" class="form-control" name="chapname">
                                                        </div>
                                                        <input name="id" value="'.$i['course_id'].'" hidden>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Link tài liệu</label>
                                                            <input type="text" class="form-control" name="ref">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Link video (nếu có)</label>
                                                            <input type="text" class="form-control" name="video">
                                                        </div>
                                                        
                                                        <input type="submit" name="addchap" class="btn btn-primary">
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                        ';
                                            $lchap = getChapByCid($i['course_id']);
                                        echo'    <div id="popupa'.$i['course_id'].'" class="overlay">
                                            <div class="pop">
                                                <h2>Danh sách chương</h2>
                                                <a class="close" href="#">&times;</a>
                                                <div class="content">
                                                
                                                
                                                
                                                <table class="fs-4 table table-bordered">
                                                    <tr>
                                                        <th  >STT</th>
                                                        <th  class="text-center">Tên Chương</th>
                                                        
                                                    </tr>';
                                                    $tmp = 1; 
                                                foreach($lchap as $m){

                                                    echo '<tr>
                                                        <form action="index.php?act=delchap&&cid='.$m['chap_id'].'" method="post">
                                                            <td>'.$tmp.'</td>
                                                            <td>'.$m['name'].'</td>
                                                            <td class="text-center"><input name="delchap" style="margin-top: 0;" class="btn btn-primary" type="submit" value="Delelte"></td>
                                                            <input name="chid" value="'.$m['chap_id'].'" hidden>
                                                        </form>
                                                    </tr>';
                                                    $tmp++;
                                                }
                                               echo ' </table>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            </div>';
                                                    
                                               
                                        
                                  
                            }
                        }
                    ?>
                                    
                           
          

    </section>
     
    <script>
        function random_bg_color() {
            var x = Math.floor(Math.random() * 256);
            var y = Math.floor(Math.random() * 256);
            var z = Math.floor(Math.random() * 256);
            var bgColor = "rgb(" + x + "," + y + "," + z + ")";
            
            return bgColor;
            }

            var list = document.querySelectorAll(".tag-course");
            for (var i = 0; i < list.length; i++){
                color = random_bg_color();
                list[i].style.backgroundColor = color;
            }
            
        function myFunction(id) {
            var popup = document.getElementById(id);
            // alert(id);
            popup.classList.toggle("show");
        }
        
        function popup2(id) {
            var popup = document.getElementById(id);
            // alert(id);
            popup.classList.toggle("show");
        }
    </script>
<?php
    }else{
        echo '<img src="https://m1.quebecormedia.com/emp/emp/Capture_d_e_cran_le_2022_08_02_a_17.16.49b5c990ac-db0d-40b0-8d05-0865905a6385_ORIGINAL.jpg" width=100px>';
    }
?>
