<head>
    <link rel="stylesheet" href="css/L.style.css">
`   <link rel="stylesheet" href="css/L.css-circular-prog-bar.css">
    <script src="https://kit.fontawesome.com/4b89062b79.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
</head>
    <!-- main -->
    <section>

        <div class="main">
            <div class="search-bar">
                <!-- <form action="">
                    <input type="text" placeholder="Search">
                </form> -->
                <form action="" class="search-form">
                    <div class="search">
                        <input class="search-text" type="text" placeholder="Search..."/>
                        <button class="button-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    
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
            
           
                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>

                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="progress-circle over50 p60">
                            <span>60%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>
                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                   
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="progress-circle over50 p78">
                            <span>78%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>
                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                            
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="progress-circle p30">
                            <span>30%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>
        </div>
        
        
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
            
    </script>
