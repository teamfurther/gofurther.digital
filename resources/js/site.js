/*
 * BREAKPOINTS
 */
let breakpoints = new function() {
    this.deviceWidth = window.screen.width;

    function calculateWindowWidth() {
        let w = window,
            d = document,
            e = d.documentElement,
            g = d.getElementsByTagName('body')[0];

        breakpoints.windowWidth = w.innerWidth || e.clientWidth || g.clientWidth;
    }
    window.addEventListener('load', calculateWindowWidth);
    window.addEventListener('resize', calculateWindowWidth);

    this.tablet = 769;
    this.desktop = 1000;
    this.widescreen = 1192;
    this.fullhd = 1384;

    this.isMobile = function() {
        return this.windowWidth < this.tablet;
    };

    this.isTouch = function() {
        return this.windowWidth < this.desktop;
    };

    this.fromTablet = function() {
        return this.windowWidth >= this.tablet;
    };

    this.fromDesktop = function() {
        return this.windowWidth >= this.desktop;
    };

    this.fromWidescreen = function() {
        return this.windowWidth >= this.widescreen;
    };

    this.fromFullhd = function() {
        return this.windowWidth >= this.fullhd;
    };
};

/*
 * ALERT
 */
let alert = new function() {
    this.alert = document.querySelector('.alert');

    if (this.alert) {
        // close alert
        this.alertClose = document.querySelector('.alert__close');

        function closeAlert() {
            alert.alert.classList.remove('is-open');

            setTimeout(function() {
                alert.alert.remove();
            }, 1000);
        }
        this.alertClose.addEventListener('click', closeAlert);

        // open alert
        setTimeout(function() {
            alert.alert.classList.add('is-open');
        }, 500);
    }
};

/*
 * HOMEPAGE
 */
let home = new function() {
    this.animIn = null;
    this.animLine = null;
    this.animOut = null;
    this.animOutDelay = null;
    this.hero = document.querySelector('.hero');

    function adjustHero() {
        if (document.querySelector('body').classList.contains('home')) {
            let sectionAfterHero = home.hero.nextElementSibling;

            if (breakpoints.fromDesktop()) {
                sectionAfterHero.style.marginTop = home.hero.offsetHeight + 'px';
            } else {
                sectionAfterHero.style.marginTop = '0px';
            }
        }
    }

    function animateHeroTagline() {
        if (!home.hero) {
            return;
        }

        clearInterval(home.animIn);
        clearInterval(home.animOut);
        clearTimeout(home.animLine);
        clearTimeout(home.animOutDelay);

        const line = home.hero.querySelector('.hero__tagline strong');
        line.innerHTML = '';

        const texts = JSON.parse(home.hero.querySelector('.hero__tagline').getAttribute('data-texts'));
        const longestTextLength = texts.reduce(function (length, string) {
            return length > string.length ? length : string.length
        }, 0);

        const delayBeforeDelete = 3000;
        const delayBeforeNextChar = 100;
        const delayBetweenLoops = 1000;

        let currentLine = 0;

        function animateLine() {
            let currentChar = 0;

            home.animIn = setInterval(function () {
                if (typeof texts[currentLine][currentChar] !== 'undefined') {
                    line.innerHTML += texts[currentLine][currentChar++];
                } else {
                    clearInterval(home.animIn);
                }
            }, delayBeforeNextChar);

            home.animOutDelay = setTimeout(function () {
                home.animOut = setInterval(function () {
                    if (line.innerHTML.length > 0) {
                        line.innerHTML = line.innerHTML.slice(0, -1);
                    } else {
                        clearInterval(home.animOut);

                        currentLine++;
                        if (currentLine > texts.length - 1) {
                            currentLine = 0;
                        }
                    }
                }, delayBeforeNextChar);
            }, longestTextLength * delayBeforeNextChar + delayBeforeDelete);

            home.animLine = setTimeout(animateLine, longestTextLength * delayBeforeNextChar * 2 + delayBeforeDelete + delayBetweenLoops);
        }
        animateLine();
    }

    function initHero() {
        adjustHero();
        animateHeroTagline();
    }

    window.addEventListener('focus', animateHeroTagline);
    window.addEventListener('load', initHero);
    window.addEventListener('resize', initHero);
    window.addEventListener('visibilitychange', function () {
        clearInterval(home.animIn);
        clearInterval(home.animOut);
        clearTimeout(home.animLine);
        clearTimeout(home.animOutDelay);
    });
};

/*
 * MODAL
 */
let modal = new function() {
    this.backdrop = document.querySelector('.modal__backdrop');
    this.closeTriggers = document.querySelectorAll('[data-dismiss="modal"]');
    this.triggers = document.querySelectorAll('[data-toggle="modal"]');

    // automodal
    function autoopen() {
        let auto = document.querySelector('.modal.is-auto');

        if (auto) {
            document.querySelector('body').classList.toggle('is-modal-open');
            modal.backdrop.classList.toggle('is-open');
            auto.classList.toggle('is-open');
        }
    }
    window.addEventListener('load', autoopen);

    // close modal
    function closeModal(e) {
        if (e.target == e.currentTarget) {
            let modals = document.querySelectorAll('.modal');

            document.querySelector('body').classList.remove('is-modal-open');
            modal.backdrop.classList.remove('is-open');
            Array.prototype.forEach.call(modals, function (modal) {
                modal.classList.remove('is-open');
            });
        }
    }
    [
        ...this.closeTriggers,
        ...document.querySelectorAll('.modal')
    ].forEach(function(trigger) {
        trigger.addEventListener('click', closeModal);
    }.bind(this));

    // toggle modal
    function toggleModal(e) {
        let target = document.querySelector(e.currentTarget.getAttribute('data-target'));

        document.querySelector('body').classList.toggle('is-modal-open');
        modal.backdrop.classList.toggle('is-open');
        target.classList.toggle('is-open');
    }
    if (this.triggers && this.triggers.length) {
        Array.prototype.forEach.call(this.triggers, function (trigger) {
            trigger.addEventListener('click', toggleModal);
        }.bind(this));
    }
};

/*
 * NAVBAR
 */
let navbar = new function() {
    this.header = document.querySelector('.header');
    this.navbar = document.querySelector('.navbar');
    this.navbarItems = document.querySelectorAll('.navbaritem');
    this.navbarToggle = document.querySelector('.navbar__toggle');
    this.nextSection = document.querySelector('.section:not(.hero)');
    this.subnavToggle = document.querySelectorAll('.navbar__item.has-subnav > a, .navbar__subnav__overlay');

    // toggle fixed navbar
    function toggleFixed() {
        let scrollTop = navbar.nextSection.getBoundingClientRect();

        if (scrollTop.top <= 80) {
            navbar.header.classList.add('is-fixed');
        } else {
            navbar.header.classList.remove('is-fixed');
        }
    }
    window.addEventListener('load', toggleFixed);
    window.addEventListener('scroll', toggleFixed);

    // toggle mobile navbar
    function toggle() {
        navbar.navbarToggle.classList.toggle('is-active');
        navbar.navbar.classList.toggle('is-active');
    }
    this.navbarToggle.addEventListener('click', toggle);

    // toggle subnav
    function toggleSubnav(e) {
        if (breakpoints.fromDesktop()) {
            e.preventDefault();

            if (e.target != e.currentTarget)
                return false;

            e.currentTarget.closest('.navbar__item').classList.toggle('is-open');
            navbar.header.classList.toggle('is-open');
        }
    }
    Array.prototype.forEach.call(this.subnavToggle, function(subnavToggle) {
        subnavToggle.addEventListener('click', toggleSubnav);
    }.bind(this));

    // close navbar if item clicked
    function close() {
        navbar.navbarToggle.classList.remove('is-active');
        navbar.navbar.classList.remove('is-active');
    }
    if (this.navbarItems && this.navbarItems.length > 0) {
        Array.prototype.forEach.call(this.navbarItems, function (item) {
            item.addEventListener('click', close);
        }.bind(this));
    }
};

/*
 * SMOOTH SCROLL
 */
window.addEventListener('DOMContentLoaded', function(e) {
    let links = document.getElementsByTagName('a');
    for (let i = 0; i < links.length; i++) {
        if (!links[i].hash)
            continue;

        if (links[i].origin + links[i].pathname != self.location.href)
            continue;

        (function(anchorPoint) {
            links[i].addEventListener('click', function(e) {
                anchorPoint.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                e.preventDefault();
            }, false);
        })(document.getElementById(links[i].hash.replace(/#/, "")));
    }
}, false);

/*
 * SOCIAL SHARER
 */
let social = new function() {
    this.icons = document.querySelectorAll('.social-sharer .icon');

    function openShareWindow(e) {
        e.preventDefault();

        let that = e.currentTarget.parentNode;
        let url = that.getAttribute('href');

        var winHeight = 600;
        var winWidth = 600;
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);

    }
    Array.prototype.forEach.call(this.icons, function(icon) {
        icon.addEventListener('click', openShareWindow);
    });
};
