    <header>
                

                <div id="boxnav" class="boxnav w-100 d-flex justify-content-center align-items-center " >
                    <nav class="navbar rounded-1  navbar-expand-lg bg-black navbar-dark ">
                      <div id="bn" class="container ">
                          <a class="item navbar-brand fa-2xl" href="#home">
                            <img id="icon" class="nav-item" style="width: 10rem; height:50px; " src="<?php echo e(url('img/2d.png')); ?>" alt=""></a>
                          <button  id="nava"  class=" navbar-toggler pt-1 collapsed" type="button"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span  class="navbar-toggler-icon"></span>
                          </button>
                          <div  id="listt" class="collapse navbar-collapse bg-dark  " aria-expanded="false" id="navbarSupportedContent">
                              <ul  class="navbar-nav    ">
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
                                      <a class="item " href="">Kids</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="item " href="">Explicabo Quia</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="item " href="">Hic lpsum </a>
                                  </li>
                              </ul>

                          </div>
                      </div>
                  </nav>
                  </div>
                

        
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
        
        
        <div class="input-group d-flex justify-content-center align-items-center">
            <div class="form-outline d-flex justify-content-center align-items-center p-4">
              <input type="search" id="form1" class="form-control" placeholder="Search" />
            </div>
            <a type="button" class=" d-flex justify-content-center align-items-center " >
              <i class="fas fa-search"></i>
            </a>
          </div>
        

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</html>


<style>



/* /////////////////////////////nav/////////////////////////////////// */
.navbar-brand{
  margin-bottom: 27.5px;

}
.boxnav{
  position: fixed;
  z-index: 99999999999999999999999999;
  margin-top:9.3rem;

}


.navbar{
      width:100%;
  position: fixed;
  display: flex;
  justify-content: center;
  background-color:var(--light-bg);


}
.item {
  color: rgb(250, 250, 250);
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






</style>
<script>


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
            // boxnav.animate({'height':'100%'},3000)
            //    // boxnav.classList.add('p-5')

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

<?php echo $__env->make('front.layout.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fashion-shop\resources\views/front/layout/header.blade.php ENDPATH**/ ?>