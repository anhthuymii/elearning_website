<head>
     <link rel="stylesheet" href="quiz.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="style_create_lesson.css"> <!-- Resource style -->
        <script src="../baigiang/js/modernizr.js"></script> <!-- Modernizr -->
</head>

  <!-- <section> -->
	<form class="cd-form floating-labels">
		<fieldset>
            <legend>TẠO BÀI GIẢNG</legend>
            
            <div class="icon">
                <h4>Chương 1</h4>
				
                
		    </div> 
           

			<div class="icon">
                <h4 class="name">Tên Chương : </h4>
				<label class="cd-label" for="cd-name"></label>
				<input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                <div>
                    <input type="submit" value="Save">
                    
                </div>
		    </div> 
		</fieldset>

		<fieldset>
			<legend>Bài Giảng</legend>
			<div>
                <div class="icon">
                    <h4>Video</h4>
                    <label class="cd-label" for="cd-name"></label>
                    <input class="chap" type="text" name="cd-name" id="cd-name" required>
                    
                </div> 
               
    
                <div class="icon">
                    <h4>PDF</h4>
                    <label class="cd-label" for="cd-name"></label>
                    <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                    <div>
                        <input type="submit" value="Save">
                    </div>
			</div> 
        </div>
        </fieldset>
            <!--câu hỏi-->
            <section>
                <fieldset>
                <legend>câu hỏi </legend>
            <div class="two-column">
                                    <div class="single-col">
                                      <div class="styled-input-container">
                                      <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name"> Câu hỏi 1: </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name"> A</label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">B </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">C</label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">D </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                            <legend>câu trả lời đúng </legend>
                            <p class="cd-select icon"> 
                                    <select class="budget">
                                        <option value="0">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                        <option value="3">D</option>
                                    </select>
                                </p>

                                <div>
                                    <input type="submit" value="Save">
                    
                              </div>
            </section>
                </fieldset>
           

 <!--end câu hỏi -->
		
	</form>

   