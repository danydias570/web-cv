const navigation = document.querySelector('.scrollDownFooter');

window.addEventListener('scroll', () => {

    if(window.scrollY > 10){
        navigation.classList.add('anim-scrollDownFooter');
    } else {
        navigation.classList.remove('anim-scrollDownFooter');
    }
})