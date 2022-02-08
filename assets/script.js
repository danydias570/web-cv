const navigation = document.querySelector('.scrollDownFooter');
window.addEventListener('scroll', () => {

    if(window.scrollY > 10){
        navigation.classList.add('anim-scrollDownFooter');
    } else {
        navigation.classList.remove('anim-scrollDownFooter');
    }
})



const navigationScroll = document.querySelector('#header-menu');
window.addEventListener('scroll', () => {

    if(window.scrollY > 10){
        navigationScroll.classList.add('anim-header-menu');
    } else {
        navigationScroll.classList.remove('anim-header-menu');
    }
})



const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

function toggleModal(){
  modalContainer.classList.toggle("active")
}



const modalContainer2 = document.querySelector(".modal-container2");
const modalTriggers2 = document.querySelectorAll(".modal-trigger2");

modalTriggers2.forEach(trigger => trigger.addEventListener("click", toggleModalBis))

function toggleModalBis(){
  modalContainer2.classList.toggle("active")
}