<?php
    
    
    session_start();
    ob_start();
   
        include "./pdo/connectdb.php";
        include "./pdo/account.php";
        include "./pdo/course.php";
        include "./pdo/chapter.php";
        include "./pdo/question.php";
        include "./pdo/answer.php";
        include "header.php";
        if(isset($_GET['act'])){
            switch($_GET['act']){
                case 'home':
                    $lcourse = getAllCourse();
                    include "home.php";
                    break;
                
                case 'signup':
                
                    if((isset($_POST['signup']))&&($_POST['signup'])){
                        if($_POST['username'] != '' && $_POST['fullname'] !='' && $_POST['email'] != '' && $_POST['password'] === $_POST['repassword']){
                            $name = $_POST['username'];
                            $fullname = $_POST['fullname'];
                            $mail = $_POST['email'];
                            $pass = $_POST['password'];
                            $repass = $_POST['repassword'];

                            $acc = getUserByName($name);
                            
                            if($acc == null){
                                $pass = md5($_POST['password']);
                                $kq = insertUser($name,  $fullname, $mail, $pass);
                                if($kq > 0)
                                    $alert2 = "Đăng ký thành công";
                                else $alert2 = "Đăng ký thất bại";

                            }
                            else{
                                // $alert2 = "Tài khoản đã tồn tại";
                                $alert2 = $name;
                            }
                        }
                        else  $alert2 = "Mật khẩu không khớp";

                        header('location: login.php?alert2='.$alert2.'');
                        
                    }
                    break;   

                case 'login':
                    // session_regenerate_id(true);
                    
                    if((isset($_POST['login']))&&($_POST['login'])){
                        $name = $_POST['username'];
                        // $pass = $_POST['password'];
                        $pass = md5($_POST['password']);
                        $acc = validated($name, $pass);
                        $_SESSION['acc'] = $acc;
                        if($acc == null){
                            $alert = "Sai tên hoặc mật khẩu";
                            // include "login.php?alert='.$alert.'";
                            header('location: login.php?alert='.$alert.'');
                            
                        }
                        else{
                            $_SESSION['role'] = $acc[0]['role'];
                            $_SESSION['username'] = $acc[0]['username'];
                            header('location: index.php');
                        }
                       
                    }
                    break;    

                case 'addchap':
                
                    if((isset($_POST['addchap']))&&($_POST['addchap'])){
                       
                        $name = $_POST['chapname'];
                        $ref = $_POST['ref'];
                        $video = $_POST['video'];
                        $id = $_POST['id'];
                       
                        $kq = insertChap($name, $ref, $video, $id);
                        // include "theloai.php";
                        if($kq > 0){
                            $alert = "Thêm thành công";
                            include "admin.php";
                            
                        }
                        else{
                            $alert = "Thêm thất bại";
                            include "admin.php";
                            
                        }
                        
                    }
                    break;   
                
                case 'delchap':
                    if((isset($_POST['delchap']))&&($_POST['delchap'])){
                        
                        $chid = $_POST['chid'];
                        
                        $kq = deleteChapByCId($chid);
                        // include "theloai.php";
                        if($kq > 0){
                            $alert = "Xóa thành công";
                            include "admin.php";
                            
                        }
                        else{
                            $alert = "Xóa thất bại";
                            include "admin.php";
                            
                        }
                        
                    }
                    break;

                case 'addbt':
            
                    if((isset($_POST['addbt']))&&($_POST['addbt'])){
                        
                        // stt chap
                        $chid = $_POST['chap']; 
                        
                        // stt kh
                        $cid = $_POST['cid'];
                        // cau hoi
                        $tmp = 0;
                        for($i=1; $i<=5; $i++){
                            $question = $_POST['question'.$i.''];
                            $kq = insertBt($question, $chid, $cid);
                            
                            if($kq > 0){
                                for($n=1 ; $n<=4; $n++){
                                    $a = $_POST[''.$i.''.$n.''];
                                   
                                    $istrue = $_POST['istrue'.$i.''];
                                    if($istrue == $n)
                                        $rs = insertAnsw($a, 1, $kq);
                                    else $rs = insertAnsw($a, 0, $kq);
                                    
                                    if($rs > 0)
                                        $tmp++;
                                }
                               
                            }
                                
                        }
                       
                        if($tmp == 5){
                            $alert = "Thêm thành công";
                            include "admin.php";
                            // header('location: admin.php');
                            
                        }
                        else{
                            $alert = "Thêm thất bại";
                            include "admin.php";
                            // header('location: admin.php');
                        }
                        
                    }
                    break;   
                    
                case 'student':
                    include "student_profile.php";
                    break;

                case 'admin':
                    if((isset($_POST['search']))&&($_POST['search'])){
                        $query = $_POST['s'];
                        $lcourse = getCourseByQuery($query);
                       
                    }
                    else{
                        $lcourse = getAllCourse();}
                    include "admin.php";
                    break;
               
                    
                case 'logout':
                    unset($_SESSION['username']);
                    unset($_SESSION['role']);
                    unset($_SESSION['acc']);
                    header('location: index.php');
                    break;

                    // thuy
                    case 'course':
                        $kq= getchapterbyCId($_GET['course_id']);
                        include "subject.php";
                        break;
                    
                    // dung
                    case 'theloai':
                    
                        $llang1 = getcoursebyCat($_GET['id']);
                    
                        include "theloai.php";
                        break;
    
                    case 'ngonngu':
                        $llang2 = getcoursebyLag($_GET['id']);
                            include "ngonngu.php";
                        
                       
                        break;

                default:
                    $lcourse = getAllCourse();
                    include "home.php";
                    break;
            }
                
        }  
        
        else{
            $lcourse = getAllCourse();
            include "home.php";
        }
        include "footer.php";

    
       
    
?>