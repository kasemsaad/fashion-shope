<section>
            
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
    
    
 
    

<div class="page5 ">

        <div class="row d-flex p-0 ">
                <div class="col-md-6 align-items-center justify-content-center p-0">
                    <div ><img class="imge " src="<?php echo e(url('img/fashion/1e.jpg')); ?>" alt="">
                    </div>


                </div>
                <div class="col-md-6  align-items-center justify-content-center p-0">
                    <div ><img class="imge " src="<?php echo e(url('img/fashion/e2.jpg')); ?>" alt="">
                    </div>


                </div>



    </div>

<style>
    .imge{
width: 100%;
height: 100%;
    }
</style>




    
        

    
        
        <div class="page5 py-5">

            <div class="row d-flex p-0 ">
                    <div class="col-md-12 align-items-center justify-content-center p-0">
                        <div ><img class="imge " src="<?php echo e(url('img/fashion/1e.jpg')); ?>" alt="">
                        </div>


                    </div>




        </div>

    <style>
        .imge{
    width: 100%;
    height: 100%;
        }</style>
    

</section>
<?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/front/pages/home.blade.php ENDPATH**/ ?>