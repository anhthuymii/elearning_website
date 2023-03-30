<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body{
        background-color: #b8b0b029;
    }
    .add{
        background-color: #fff;
        width: 60%;
        margin: 5% auto;
        padding: 2%;
    }
    .size{
        width: 20%;
    }
</style>
<body>


    <div class="shadow add">
        <h2 style="text-align: center;">Bài tập trắc nghiệm</h2>
        <?php
            if(isset($alert))
            echo $alert;
        ?>

        <form action="index.php?act=addbt" method="post">
        <div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Chương</label>
                <select name="chap" class="form-select size" aria-label="Default select example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Câu 1</label>
                <input type="text" class="form-control" name="question1">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án</label>
                <input type="text" class="form-control" name="11">
                <input type="text" class="form-control" name="12">
                <input type="text" class="form-control" name="13">
                <input type="text" class="form-control" name="14">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án đúng</label>
                <select name="istrue1" class="form-select size" aria-label="Default select example">
                   
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Câu 2</label>
                <input type="text" class="form-control" name="question2">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án</label>
                <input type="text" class="form-control" name="21">
                <input type="text" class="form-control" name="22">
                <input type="text" class="form-control" name="23">
                <input type="text" class="form-control" name="24">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án đúng</label>
                <select name="istrue2" class="form-select size" aria-label="Default select example">
                    
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>>
                </select>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Câu 3</label>
                <input type="text" class="form-control" name="question3">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án</label>
                <input type="text" class="form-control" name="31">
                <input type="text" class="form-control" name="32">
                <input type="text" class="form-control" name="33">
                <input type="text" class="form-control" name="34">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án đúng</label>
                <select name="istrue3" class="form-select size" aria-label="Default select example">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Câu 4</label>
                <input type="text" class="form-control" name="question4">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án</label>
                <input type="text" class="form-control" name="41">
                <input type="text" class="form-control" name="42">
                <input type="text" class="form-control" name="43">
                <input type="text" class="form-control" name="44">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án đúng</label>
                <select name="istrue4" class="form-select size" aria-label="Default select example">
                    
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Câu 5</label>
                <input type="text" class="form-control" name="question5">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án</label>
                <input type="text" class="form-control" name="51">
                <input type="text" class="form-control" name="52">
                <input type="text" class="form-control" name="53">
                <input type="text" class="form-control" name="54">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đáp án đúng</label>
                <select name="istrue5" class="form-select size" aria-label="Default select example">
                <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
            </div>
        </div>
        <?php
        
            $cid = $_GET['cid'];
            echo '<input name="cid" value="'.$cid.'" hidden>'
        ?>
        
        <input type="submit" name="addbt" class="btn btn-primary">
    </form>
    </div>
    
</body>
</html>