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