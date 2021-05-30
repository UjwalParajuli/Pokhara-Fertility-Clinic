window.addEventListener('load', () => {

    const scrollToTopBtn = document.querySelector('#scroll-to-top');
    const topHeader = document.querySelector('.top-header');

    //Scroll To Top

    window.addEventListener('scroll', function() {
        window.cancelAnimationFrame(scrollToTop);
        
        if(window.scrollY > 500) {
            scrollToTopBtn.classList.remove('hidden');
            topHeader.classList.add('scrolled');
        } else {
            scrollToTopBtn.classList.add('hidden');
            topHeader.classList.remove('scrolled');
        }
    });

    scrollToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollToTop();
    });

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
          window.requestAnimationFrame(scrollToTop);
          window.scrollTo(0, c - c / 15);
        }
    };

    //Mobile Menu
    
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.pfc-navigation');
    const closeBtn = document.querySelector('.close-menu');

    hamburger.addEventListener('click', () => {
        menu.classList.toggle('shown');
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.toggle('shown');
    });


    //Review Slider

    new Splide( '.splide', {
        type   : 'loop',
        perPage: 3,
        arrows: false,
        gap: '15px',
        breakpoints: {
            768: {
                perPage: 2,
            },
            554: {
                perPage: 1
            }
        }
    } ).mount();
    
} );