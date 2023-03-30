<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Developement</title>
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
                <li><a href="#teacher">GIẢNG VIÊN</a></li>
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
                <li><a href="phattrien.php" class="theloai">Phát Triển Web</a></li>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <li><a href="subject.php">CSS</a></li>
                <li><a href="js.php">JavaScript</a></li>
                <li><a href="#html">HTML5</a></li>
                <li><a href="#php">PHP</a></li>
                <li><a href="#rjs">ReactJS</a></li>
                <li><a href="#ts">Typescript</a></li>
                <li><a href="#ag">Angular</a></li>
                <li><a href="#njs">Node.Js</a></li>
            </ul>
        </nav>
    </div>

    <div>
        <h1>Bài Kiểm Tra Trắc Nghiệm Khóa học CSS</h1>
        <h2>Bài 1</h2>

    </div>
    <div class="quiz-container" id="quiz">
      <div class="quiz-header">
        <h2 id="question">Question Text</h2>
        <ul>
          <li>
            <input type="radio" name="answer" id="a" class="answer">
            <label for="a" id="a_text">Answer</label>
          </li>
          <li>
            <input type="radio" name="answer" id="b" class="answer">
            <label for="b" id="b_text">Answer</label>
          </li>
          <li>
            <input type="radio" name="answer" id="c" class="answer">
            <label for="c" id="c_text">Answer</label>
          </li>
          <li>
            <input type="radio" name="answer" id="d" class="answer">
            <label for="d" id="d_text">Answer</label>
          </li>
        </ul>
      </div>
      <button id="submit">Submit</button>
    </div>
    




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
    <script> 
        // window.addEventListener('load',function(){
        //   var q=$('.question'),
        //   w=["Bạn là thần đồng","Bạn rất suất xắc","Kiến thức của bạn khá tốt","Bạn có thể làm tốt hơn thế"]
        //   $(q).each(function(n){
        //     var ul=$(q[n]).find('ul'),mes=$(q[n]).parent().find('.message')
        //     console.log(mes)
        //     $(ul).each(function(i,v){
        //       var li=$(ul[i]).find('li'),p=$(ul[i]).next('p'),cor=$(ul[i]).find('li.correct')
        //       $(li).one('click',function(){
        //         $(this).parent().addClass('answered')
        //         $(this).addClass('selected')
        //         $(p).appendTo($(cor)).addClass('explaination')
        //         if(i==ul.length-1){
        //           var corr=$(ul).find('li.correct.selected').length,
        //           s=corr*100/ul.length-1
        //           v='<span class="correct">'+corr+'</span><span class="total">'+ul.length+'</span>',
        //           $(v).insertAfter($(mes))
        //           w.forEach(function(){
        //             if(s==100)$(mes).php(w[0])
        //             else if(s>=80)$(mes).php(w[1])
        //             else if(s>=50)$(mes).php(w[2])
        //             else $(mes).php(w[3])
        //           })
        //         }
        //       })
        //     })
        //   })
        // })
        const quizData = [
    {
        question: "Câu 1. Trong Javascript sự kiện OnUnload thực hiện khi nào?",
        a: "Khi bắt đầu chương trình chạy",
        b: "Khi click chuột",
        c: "Khi kết thúc một chương trình",
        d: "Khi di chuyển chuột qua",
        correct: "c",
    },
    {
        question: "Câu 2. Trong Javascript sự kiện Onblur thực hiện khi nào?",
        a: "Khi một đối tượng trong form mất focus",
        b: "Khi một đối tượng trong form có focus",
        c: "Khi di chuyển con chuột qua form",
        d: "Khi click chuột vào nút lệnh",
        correct: "a",
    },
    {
        question: "Câu 3. Trong Javascript sự kiện OnMouseOver thực hiện khi nào?",
        a: "Khi một đối tượng trong form mất focus",
        b: "Khi một đối tượng trong form có focus",
        c: "Khi di chuyển con chuột qua một đối tượng trong form",
        d: "Khi click chuột vào nút lệnh",
        correct: "c",
    },
    {
        question: "Câu 4. Trong Javascript sự kiện Onclick xảy ra khi nào?",
        a: "Khi một đối tượng trong form mất focus",
        b: "Khi một đối tượng trong form có focus",
        c: "Khi click chuột vào một đối tượng trong form",
        d: "Khi click chuột vào nút lệnh",
        correct: "d",
    },
   
    {
        question: "Câu 5. Trong Javascript sự kiện Onchange thực hiện khi nào?",
        a: "Khi một đối tượng trong form mất focus",
        b: "Khi một đối tượng trong form có focus",
        c: "Xảy ra khi giá trị của một trường trong form được người dùng thay đổi",
        d: "Khi click chuột vào nút lệnh",
        correct: "c",
    },
    
    {
        question: "Câu 6. Thẻ <input type='text'> dùng để làm gì?",
        a: "Tạo một ô text để nhập dữ liệu 1 dòng",
        b: "Tạo một ô password",
        c: "Tạo một  textbox cho phép nhập liệu nhiều dòng",
        d: " Tất cả các ý trên",
        correct: "a",
    },
    {
        question: "Câu 7. Thẻ <input type='Password'> dùng để làm gì?",
        a: "Tạo một ô text để nhập dữ liệu 1 dòng",
        b: "Tạo một ô password ",
        c: "Tạo một  textbox cho phép nhập liệu nhiều dòng",
        d: " Tất cả các ý trên",
        correct: "a",
    },
    {
        question: "Câu 8. Thẻ <textarea ></texterea> dùng để làm gì?",
        a: "Tạo một ô text để nhập dữ liệu 1 dòng",
        b: "Tạo một ô password",
        c: "Tạo một  textbox cho phép nhập liệu nhiều dòng",
        d: " Tất cả các ý trên",
        correct: "c",
    },
    {
        question: "Câu 9. Thẻ <input type=”Submit” dùng để làm gì?",
        a: "Tạo một ô text để nhập dữ liệu",
        b: "Tạo một nút lệnh dùng để gửi tin trong form đi",
        c: "Tạo một nút lệnh dùng để xóa thông tin trong form",
        d: "Tất cả các ý trên",
        correct: "b",
    },
   
    
    
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>
           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})
       </script>
    </body>
</html>