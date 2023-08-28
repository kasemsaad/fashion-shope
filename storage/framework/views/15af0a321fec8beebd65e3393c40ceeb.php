<!doctype html>
<html class="h-100" data-bs-theme="auto" lang="en">

<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title><?php echo $__env->yieldContent('title', 'Admin Area'); ?></title>

    <link href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/" rel="canonical">

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon"
        sizes="180x180">
    <link type="image/png" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" rel="icon"
        sizes="32x32">
    <link type="image/png" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" rel="icon"
        sizes="16x16">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json" rel="manifest">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" rel="mask-icon"
        color="#712cf9">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" rel="icon">

    <meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(url('admin/css/sticky-footer-navbar.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center bg-light" id="bd-theme"
            data-bs-toggle="dropdown" type="button" aria-expanded="false" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" type="button"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" type="button"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" type="button"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <header>
        
        <nav  class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-dark" href="http://localhost/fashion-shop/public">
                    Free Shipping on All orders Over $75
                </a>
                <button id="navs" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link text-dark" href="http://localhost/fashion-shop/public/login">Login</a>
                                </li>

                                                            <li class="nav-item">
                                    <a class="nav-link text-dark" href="http://localhost/fashion-shop/public/register">Register</a>
                                </li>
                                                                        </ul>
                </div>
            </div>
        </nav>
        

        

            <div id="boxnav" class="boxnav w-100 d-flex justify-content-center align-items-center " >
            <nav class="navbar rounded-1  navbar-expand-lg bg-black navbar-dark">
              <div id="bn" class="container ">
                  <a class="item navbar-brand fa-2xl" href="#home">
                    <img id="icon" class="nav-item" style="width: 10rem;height:50px; " src="<?php echo e(url('img/2d.png')); ?>" alt=""></a>
                  <button  id="nava"  class=" navbar-toggler  collapsed" type="button"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span  class="navbar-toggler-icon"></span>
                  </button>
                  <div  id="listt" class="collapse navbar-collapse   " aria-expanded="false" id="navbarSupportedContent">
                      <ul  class="navbar-nav mx-auto  mb-lg-0 ">
                          <li class="nav-item ">
                              <a class="item active" aria-current="page" href="#home"><span>Home</span> </a>
                          </li>
                          <li class="nav-item">
                              <a class="item  " href="#about">Men</a>
                          </li>
                          <li class="nav-item">
                              <a class="item " href="#category">Women</a>
                          </li>
                          <li class="nav-item">
                              <a class="item " href="http://127.0.0.1:5500/api.html">Kids</a>
                          </li>
                          <li class="nav-item">
                              <a class="item " href="http://127.0.0.1:5500/api.html">Explicabo Quia</a>
                          </li>
                          <li class="nav-item">
                              <a class="item " href="http://127.0.0.1:5500/api.html">Hic lpsum </a>
                          </li>
                      </ul>

                  </div>
              </div>
          </nav>
          </div>
        
        
<div class="page1">
        <div class="container  p-2 d-flex justify-content-center align-items-center ">
            <div class="show d-flex   bg-info justify-content-between align-items-center" id="show">
                <img src="<?php echo e(url('img/fashion/1d.jpg')); ?>" class="w-100 h-100" id="x" alt="" >
                <i id="leftarrow" class="fas fa-circle-arrow-left "></i>
                <i id="rightarrow" class="fas fa-circle-arrow-right end-0 "></i>

            </div>
            <div class="row w-100 " >
                <div class="col-md-4 w-100 text-center p-1">
                    <img src="<?php echo e(url('img/fashion/1d.jpg')); ?>" class="m p-1  " alt="" >
                    <img src="<?php echo e(url('img/fashion/2d.jpeg')); ?>"  class="m p-1 " alt="" >
                    <img src="<?php echo e(url('img/fashion/3d.jpg')); ?>" class="m p-1 " alt="" >

                </div>
                </div>
            </div>
        </div>
            <script>var imgContainer=document.getElementById("x")
                var showw=document.getElementById('showw')

                var imgChange=document.querySelectorAll(".m")
                var show=document.getElementById('show')

                var closebtn=document.getElementById("closebtn")
                var rightarrow=document.getElementById("rightarrow")
                var leftarrow=document.getElementById("leftarrow")
                var imglist=Array.from(document.querySelectorAll('.col-md-4 img'))
                var currentindex=0;



                for(var i=0;i<imgChange.length;i++){
                   imgChange[i].addEventListener('click',function(e){
                      var imgsrc=e.target.getAttribute('src')
                      imgContainer.setAttribute('src',imgsrc)
                      show.classList.add('d-felx')
                      show.classList.remove('d-none')
                       currentindex = imglist.indexOf(e.target)

                   })
                }



                  rightarrow.addEventListener('click', function rightarrow(){
                   currentindex++
                   currentindex>=imglist.length?currentindex=0:''
                   var newimgsrc=imglist[currentindex].getAttribute('src')
                   imgContainer.src=newimgsrc
                   }
                  )
                  leftarrow.addEventListener('click', function leftarrow(){
                   currentindex--
                   currentindex==-1?currentindex=imglist.length -1:''
                   var newimgsrc=imglist[currentindex].getAttribute('src')
                   imgContainer.src=newimgsrc
                   }
                  )

                //    setInterval(() => {
                //       currentindex++
                //    currentindex>=imglist.length?currentindex=0:''
                //    var newimgsrcc=imglist[0].getAttribute('src')
                //    showw.src=newimgsrcc
                //    console.log(showw.s)
                //       }, 3000);
                </script>
                <style>
                    #x{
    width:500px ;
}
.page1{
    height: 100vh;
    width: 100%;
}
.m{
   width: 0%;
    height:0%;
    cursor: pointer;

}
.show{
    width: 100%;
    height: 90vh;
    margin-top: 35rem;
    position: absolute;
    z-index: ;
    display: inline-block;

}
i{
    z-index: 9;
    position: absolute;
    size: 30rem;
    padding: 10px;
    color: rgb(243, 240, 237);
    font-size: 30px;
    cursor: pointer;

}
                </style>
        
        
        <div class="page2 ">

            <div class="container  ">
                <div class="row d-flex justify-content-between  ">
                        <div class="col-md-6  align-items-center justify-content-center">
                            <div ><img class="img1 " src="<?php echo e(url('img/fashion/2d.jpeg')); ?>" alt="">
                            </div>
                            <div class="d-flex pt-2 " style="color:  #da12a8;"><h3 class="me-4 display-6">H o t </h3><h3 class=" display-6"> C o l l e c t i o n</h3>
                            </div>
                            <div class="d-flex pt-1"><h1 class="me-4 display-4" >New Trend For women </h1>
                            </div>
                            <div class="d-flex pt-1"><h5  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius corporis cupiditate quas a  quia similique officia eveniet aliquid susc</h5>
                            </div>
                            <div class="d-flex pt-1"><h5  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius corporis cupiditate quas a  quia similique officia eveniet aliquid susc</h5>
                            </div>
                            <div class="d-flex pt-1"><a class="btn display-3"href="https://www.youtube.com/watch?v=dy-JJjdLct0">Shop Now</a>
                            </div>
                        </div>
                            <div class="col-md-4  ">
                                <div ><img class="img2 my-5" src="<?php echo e(url('img/fashion/2d.jpeg')); ?>" alt="">
                                    <div ><img class="img2 " src="<?php echo e(url('img/fashion/2d.jpeg')); ?>" alt="">
                                    </div>
                                </div></div>

                </div>

            </div>
        <style>
        .page2{
    height: auto;
    width: 100%;
}
.btn{
      border: 1px solid#da12a8;
      color: var(--white-color);
      font-weight: bolder;
      transition: .8s;

     }
     .btn:hover{
      border: 1px solid black;
      background-color: black;
      color: #da12a8;
      transition: .8s;

     }
.img1{
    height:27rem;
    width: 100%;
}
.img2{
    height:20rem;
    width: 100%;
}
.img4{
    height:20rem;
    width: 100%;
    padding-bottom: 10rem;
}
 </style>
        
        
        <ul class="nav nav-pills my-4 justify-content-center navbar-dark   py-3" id="pills-tab" role="tablist">
            <li class="nav-item px-2" role="presentation">
              <button class="btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
            </li>
            <li class="nav-item px-2" role="presentation">
              <button class="btn  activek" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Men</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="btn  " id="pills-profile1-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">Women</button>
              </li>
            <li class="nav-item px-2" role="presentation">
                <button class="btn " id="pills-profile1-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">Kids</button>
              </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"><div class="container">
                <div class="container d-flex justify-content-center align-items-center ">
                    <div class="co1">
                        <div class="row g-3 ">

                            <div class="col-md-4 position-relative overflow-hidden">
                                <img class="w-100 h-100" src="./img/eg1.jpg" alt="">
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>

                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"><div class="container">
                <div class="container d-flex justify-content-center align-items-center ">
                    <div class="co1">
                        <div class="row g-3 ">
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>

                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
            <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab" tabindex="0"><div class="container">
                <div class="container d-flex justify-content-center align-items-center ">
                    <div class="co1">
                        <div class="row g-3 ">
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                            <div class="col-md-4 position-relative overflow-hidden">
                                
                                <h6 class="text2 d-flex justify-content-center align-items-center position-absolute w-100 h-100" ></h6>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        
        







        
    </header>

    <!-- Begin page content -->


    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary">Place sticky footer content here.</span>
        </div>
    </footer>


    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</html>

        
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;500;600;700&display=swap');
:root {
  --main-font: 'Dosis', sans-serif;
  --light-bg: #1B2430;
  --main-color:#da12a8;
  --font-color: #fff;
  --transition: .7s;
  --border:2px solid rgb(51, 51, 51);
}

body{
  font-family:Dosis, sans-serif;
  height: 0;
  overflow: scroll;
}
*{
padding: 0;
margin: 0;
box-sizing: border-box;
}
span{
  color: var(--main-color);
}
#forms{
  width: 100%;
  height: 100vh;
  background-image: url(../img/bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;

}
#forms::after{
  content: '';
  width: 100%;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.918);
  position:absolute;
  top: 0;
  z-index: -1;
}
form{
  display: flex;
  align-items: center;
}
.box{
  width: 100%;
  height: 60vh;
  display: flex;
  align-items: center;
  position: relative;

}
.box1{
  width: 40%;
  background-color: var(--light-bg);
  position: relative;
}


input{
  border-radius: 8px;
}
.inputestyle{
width: 90%;
height: 40px;
padding-top: 15px;
}
.inputestyle:focus{
  background-color:var(--main-color);
  color: var(--font-color);
  border: .3px solid wheat;
}
.forget{
  text-decoration: none;
  color: var(--font-color);
  padding-top: 10px;
  cursor: pointer;
}
.alert1{
  width: 80%;
  height: 50%;
  position: absolute;
  top: 25%;
  left: 10%;
  z-index: 9999;

}
.error{
  height: 3rem;
  display: flex;
  align-items: center;
  padding-left: 4px;
}
/* ///////////////////////indx1/////////////////////////// */

.loading{
  height: 100vh;
  z-index: 999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
}

/* /////////////////////////////nav/////////////////////////////////// */
.navbar-brand{
  margin-bottom: 27.5px;

}
.boxnav{
  position: fixed;
  z-index: 999999999;

}


.navbar{
  width:100%;
  position: fixed;
  display: flex;
  justify-content: center;
  background-color:var(--light-bg);
  position: relative;

}
.item px-2{
  color: var(--font-color) ;
  text-decoration: none;
  padding-left: 10px;
  height: 10px;
  transition: var(--transition);
}
li{
  height: 50px;
  display: flex;
  align-items: center;
  cursor: pointer;
  transition: var(--transition);
}
.item:hover{
  color:#da12a8;
  height: 10px;
  padding-bottom: 18px;
  transition: var(--transition);
}
/* //////////////////////scrollbar////////////////////////////// */
::-webkit-scrollbar {
  width: .5rem;
  transition: width 2s;
}

::-webkit-scrollbar-track {
  margin: 5px 0;
  border-radius: 2px;
}

::-webkit-scrollbar-thumb {
  background: var(--light-bg);
  border-radius: 4px;
}

/* //////////////////////////sec1///////////////////////////////// */
.sec1{
  background-image: url(../img/bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: 93vh;
  z-index: -1;
  position: relative;


}
.sec1::after{
  content: '';
  width: 100%;
  height: 93vh;
  background-color: rgba(0, 0, 0, 0.918);
  position:absolute;
  top: 0;
  z-index: -1;

}
.sec2{
  position: relative;
}

.row{
  height:auto;
  padding-bottom: 40px;
}
.cc{
width: 21.2rem;
height:33.2rem ;
position: relative;
overflow: hidden;
margin-top: 40px;
transition: var(--transition);
}
.cc:hover{
  cursor: pointer;
  margin-top: 20px;
  color: var(--font-color);

}
.cc::after{
  content: "";
  width:100%;
  height:300%;
  background-color: #1B2430;
  border-radius: 5px;
  position: absolute;
  right: 100%;
  z-index: -1;
}
.cc:hover.cc::after{
  right: 0;
  top: 0;
  transition: 1s;
  background-color: #E94560;
  transform: rotate(180deg);
}
/* //////////////////////////////////////////sec3////////////////////////////////////////////////// */
.sec3{
  width: 100%;
  height: auto;
  background-color: var(--light-bg);
  position: relative;

}

.text h3{
  border-bottom: #E94560 solid ;
  color: var(--font-color);
}
.col-md-6{
  width:550px ;
  height: 100%;
  margin-left: 55px;
  margin-top: 33px;
  }
  .f{
    width:550px ;
  height: 100%;
  }
  /* //////////////////////////////////////////sec4////////////////////////////////////////////////// */
.fa-brands{
  text-decoration: none;
  color: var(--font-color);
  transition: var(--transition);
}
.fa-brands:hover{
  color: var(--main-color);
}
.sec4{
  width: 100%;
  background-image: url(../img/bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  z-index: -1;
  position: relative;


}
.sec4::after{
  content: '';
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.918);
  position:absolute;
  top: 0;
  z-index: -1;

}
.review-item{
  width: 170px;
  height: 170px;
}
.review-item::after{
  content: '';
  box-shadow: 1px 1px 10px 2px var(--main-color);
  border: 1px solid var(--main-color);
  width: 170px;
  height: 170px;
  position: absolute;
  transition: var(--transition);
}
.review-item:hover.review-item::after{
border-radius: 50%;
transform: rotate(30deg);
}
/* /////////////////////////////////////////////////// */
.to-up{
  margin: 40px;

  animation: 1s ge infinite alternate;
}
@keyframes ge{
  0%{}
  100%{
margin-bottom: 1%; }
}

@media screen and (max-width:655px) {
 .forget{
  font-size: 10px;
 }
 #login{
  width: 40px;
  font-size: 10px;
 }

}
@media screen and (max-width:1016px) {
 #error{
font-size: 10px;
 }
 }
</style>
<script>

///////////////////////////////////////////////////
//     $(".icon").animate({opacity: '0', rotate:'360deg'},3000,
//       async function(){

//         await $('.loading').hide(3000)
// setInterval(() => {
//    let body1=document.getElementById('body1');

//    body1.classList.remove('overflow-hidden')

// }, 3000);

//       });

////////////////////////////////////////////////////////////
      let nava=document.getElementById('nava');
      let list=document.getElementById('listt');
      let logOutBtn=document.getElementById('logOutBtn')

      nava.addEventListener('click',function(){
         if (list.classList[2]!=='show'){
            list.classList.add('show')
         }
         else{
            list.classList.remove('show')
         }

      })

      logOutBtn.addEventListener('click',function(){
         window.location.assign("index.html")
      })
      ////////////////////////////////////////////////////
      let scrolpoinyer=document.getElementById("scrolpoinyer")

      scrolpoinyer.addEventListener('click',function(){
         window.scrollTo(0,0)
      })
      let x=document.getElementById("home")
      let z=x.offsetTop
      window.addEventListener('scroll',function(){
         let scrolwindow=window.scrollY
         if(scrolwindow>z){
            scrolpoinyer.classList.remove('d-none')

                  }
                  else{
                     scrolpoinyer.classList.add('d-none')

                  }
      })
/////////////////////////////////////////////////////////
      let boxnav=document.getElementById("boxnav")
      let navbar=document.getElementById("navbar")
      let v=document.getElementById("list")
      let s=v.offsetTop
      window.addEventListener('scroll',function(){
         let scrolwindow=window.scrollY
         if(scrolwindow>s){

            boxnav.classList.remove('p-5')
            boxnav.animate({'width':'100%'},3000)
               // boxnav.classList.add('p-5')

                  }
                  else{

                     setInterval(() => {
                        boxnav.classList.add('p-5')
                        boxnav.classList.add('w-100')


                     }, 3000);
                  }

      })
      let rand1;
      let rand2;
      let rand3;
      ss=JSON.parse(localStorage.getItem('proudcts'))
      let box=`  <span>${ss[0].NAME}</span>`
      document.getElementById('loginname').innerHTML=box
setInterval(() => {
   rand1=Math.round(Math.random()*4055)
   rand2=Math.round(Math.random()*5222)
   rand3=Math.round(Math.random()*6055)
   let box1=`<span>${rand1}k</span>`
   console.log(box1)
         document.getElementById('review-random1').innerHTML=box1
         let box2=`<span>${rand2}k</span>`
         console.log(box2)
               document.getElementById('review-random2').innerHTML=box2
               let box3=`<span>${rand3}k</span>`
               console.log(box3)
                     document.getElementById('review-random3').innerHTML=box3

}, 2000);



</script>
<?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/loggin&regist/layout/main.blade.php ENDPATH**/ ?>