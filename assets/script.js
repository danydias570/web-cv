const navigation = document.querySelector('.scrollDownFooter');
const navigationScroll = document.querySelector('#header-menu');
const modalContainer2 = document.querySelector(".modal-container2");
const modalTriggers2 = document.querySelectorAll(".modal-trigger2");
const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");


window.addEventListener('scroll', () => {
    if(window.scrollY > 10){
        navigation.classList.add('anim-scrollDownFooter');
        navigationScroll.classList.add('anim-header-menu');
    } else {
        navigation.classList.remove('anim-scrollDownFooter');
        navigationScroll.classList.remove('anim-header-menu');
    }
})


modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))
function toggleModal(){
  modalContainer.classList.toggle("active")
}


modalTriggers2.forEach(trigger => trigger.addEventListener("click", toggleModalBis))
function toggleModalBis(){
  modalContainer2.classList.toggle("active")
}