const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle', 'nav-menu')


const page = window.location;
const navLink = document.querySelectorAll('.nav__link').
forEach(n => {
    if (n.href.includes(`${page}`)) {
        console.log("hii")
        n.classList.add('active')  
    }else{
        n.classList.remove('active')
    }
});
// function linkAction() {
//     navLink.forEach(n => n.classList.remove('active'));
//     this.classList.add('active');
//     const navMenu = document.getElementById('nav-menu')
//     navMenu.classList.remove('show')
// }


const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

sr.reveal('.home__title', {});
sr.reveal('.button', { delay: 100 });
sr.reveal('.home__img', { delay: 200 });
sr.reveal('.home__social-icon', { interval: 200 });
sr.reveal('.about__img', {});
sr.reveal('.card', {delay :300});
sr.reveal('.img-container', {delay :100});
sr.reveal('.about__subtitle', { delay: 300 });
sr.reveal('.about__text', { delay: 200 });
sr.reveal('.skills__subtitle', {});
sr.reveal('.skills__text', {});
sr.reveal('.skills__data', { interval: 200 });
sr.reveal('.skills__img', { delay: 600 });
sr.reveal('.work__img', { interval: 200 });
sr.reveal('.contact__input', { interval: 200 });