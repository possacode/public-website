import ScrollReveal from "scrollreveal";

const header = document.querySelector('.header')

const handleScroll = () => {
    if (window.scrollY >= 60) {
        header.classList.add('header-sticky')
    } else {
        header.classList.remove('header-sticky')
    }
};

if (header) {
    window.addEventListener('scroll', handleScroll)
}

const revealElements = document.querySelectorAll('[data-reveal]')
const revealer = ScrollReveal({
    scale: 1,
    distance: '45px',
    duration: 500,
    cleanup: true,
})

revealElements.forEach((el) => {
    const origin = el.dataset.revealOrigin || 'bottom'
    const delay = el.dataset.revealDelay || 0

    revealer.reveal(el, {
        origin,
        delay,
    })
})
