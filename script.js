var lightningBall = bodymovin.loadAnimation({
    container: document.getElementById('lightningball'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:'94439-abstract.json'
  });

var wave = bodymovin.loadAnimation({
    container: document.getElementById('wave'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:'lf20_avae0drv.json'
  });
  
var activeContainer = document.querySelector('.nav-options-active')
var moveHome = document.querySelector('.nav-home')
var moveAbout = document.querySelector('.nav-about')
var moveWorks = document.querySelector('.nav-works')
var moveServices = document.querySelector('.nav-services')
var moveContact = document.querySelector('.nav-contact')

moveHome.addEventListener ("click", e => {
  activeContainer.style.left = "0%";
})

moveAbout.addEventListener ("click", e => {
    activeContainer.style.left = "20%";  
});

moveWorks.addEventListener ("click", e => {
  activeContainer.style.left = "40%";
})

moveServices.addEventListener ("click", e => {
  activeContainer.style.left = "60%";
})

moveContact.addEventListener ("click", e => {
  activeContainer.style.left = "80%";
})
