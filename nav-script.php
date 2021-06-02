<script type="text/javascript">
	const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});


window.onload = function(){
  
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');
 
  prevBtn.addEventListener("click",function(){
    prevSlide();
 });
  nextBtn.addEventListener("click",function(){
    nextSlide();
 });
  
}
let slideNumber = 0;
const prevSlide = () =>{
  const slides = document.getElementsByClassName('slides');
const slider = document.getElementById("slider");
  const currentSlide = slider.getElementsByClassName('current');
  currentSlide[0].classList.remove("current");
  if(slideNumber == 0){
    slideNumber = slides.length-1;
  }
  else{
      slideNumber = slideNumber-1;
  }
  slides[slideNumber].classList.add("current");
}
const nextSlide = () =>{
  const slides = document.getElementsByClassName('slides');
const slider = document.getElementById("slider");
  const currentSlide = slider.getElementsByClassName('current');
  currentSlide[0].classList.remove("current");
  if(slideNumber == (slides.length-1)){
    slideNumber = 0;
  }
  else{
      slideNumber = slideNumber+1;
  }
  slides[slideNumber].classList.add("current");
}


</script>