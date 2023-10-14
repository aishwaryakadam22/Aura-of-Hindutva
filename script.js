let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}

/*-------- swiper ---------- */

var swiper = new Swiper(".books-list", {
   
   loop:true,
   centeredSlides:true,
   autoplay:{
       delay:9500,
       disableOnInteraction:false,
   },
   breakpoints: {
    0: {
       slidesPerView: 1,   
     },
     768: {
       slidesPerView: 2, 
     },
     1024: {
       slidesPerView: 3, 
     },
   },
 });

 /*-------- featured section start ---------- */

var swiper = new Swiper(".featured-slider", {
   
   spaceBetween:10,
   loop:true,
   centeredSlides:true,
   autoplay:{
       delay:9500,
       disableOnInteraction:false,
   },
   navigation:{
       nextEl:".swiper-button-next",
       prevEl:".swiper-button-prev",
   },
   breakpoints: {
    0: {
       slidesPerView: 1,   
     },
     450:{
       slidesPerView: 2,   
     },
     768: {
       slidesPerView: 3, 
     },
     1024: {
       slidesPerView: 4, 
     },
   },
 });

 /*-------- reviews section start ---------- */

 var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides:true,
  autoplay:{
      delay:9500,
      disableOnInteraction:false,
  },
  breakpoints: {
   0: {
      slidesPerView: 1,   
    },
    768: {
      slidesPerView: 2, 
    },
    1024: {
      slidesPerView: 3, 
    },
  },
});
