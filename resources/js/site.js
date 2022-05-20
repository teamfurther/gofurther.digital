/*
 * BREAKPOINTS
 */
let breakpoints = new function () {
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

    this.isMobile = function () {
        return this.windowWidth < this.tablet;
    };

    this.isTouch = function () {
        return this.windowWidth < this.desktop;
    };

    this.fromTablet = function () {
        return this.windowWidth >= this.tablet;
    };

    this.fromDesktop = function () {
        return this.windowWidth >= this.desktop;
    };

    this.fromWidescreen = function () {
        return this.windowWidth >= this.widescreen;
    };

    this.fromFullhd = function () {
        return this.windowWidth >= this.fullhd;
    };
};

/*
 * ALERT
 */
let alert = new function () {
    this.alert = document.querySelector('.alert');

    if (this.alert) {
        // close alert
        this.alertClose = document.querySelector('.alert__close');

        function closeAlert() {
            alert.alert.classList.remove('is-open');

            setTimeout(function () {
                alert.alert.remove();
            }, 1000);
        }
        this.alertClose.addEventListener('click', closeAlert);

        // open alert
        setTimeout(function () {
            alert.alert.classList.add('is-open');
        }, 500);

        // push GTM
        if (this.alert.getAttribute('data-gtm-show')) {
            const values = JSON.parse(this.alert.getAttribute('data-gtm-show'));
            for (let key in values) {
                gtag('event', key, values[key]);
            }
        }
    }
};

/*
 * BLOG
 */
let blog = new function () {
    if (document.querySelector('.blog__pagination')) {
        let currentPage = 0;
        const itemsPerPage = 10;
        const totalItems = document.querySelectorAll('.posts > .columns > .column').length;

        document.querySelector('.blog__pagination__total').innerHTML = totalItems;

        loadPosts();

        function loadPosts() {
            currentPage++;

            let currentItems = currentPage * itemsPerPage;

            if (currentItems >= totalItems) {
                currentItems = totalItems;

                document.querySelector('.blog__pagination__btn').classList.add('is-hidden');
            }

            document.querySelectorAll('.posts > .columns > .column:nth-child(-n+' + currentItems + ')').forEach((el) => {
                el.classList.remove('is-hidden');
            });

            document.querySelector('.blog__pagination__bar span').style.width = (currentItems / totalItems * 100) + '%';
            document.querySelector('.blog__pagination__current').innerHTML = currentItems;
        }

        document.querySelector('.blog__pagination__btn').onclick = function () {
            loadPosts();
        };
    }

    if (document.querySelector('.blog__tag-selector')) {
        document.querySelector('.blog__tag-selector select').onchange = function (event) {
            window.location = event.target.value;
        };
    }
};

/*
 * GTM
 */
let gtm = new function () {
    if (document.querySelector('[data-gtm-click]')) {
        document.querySelectorAll('[data-gtm-click]').forEach((el) => {
            el.onclick = function () {
                const values = JSON.parse(el.getAttribute('data-gtm-click'));
                for (let key in values) {
                    gtag('event', key, values[key]);
                }
            };
        });
    }
};

/*
 * HERO
 */
let heroContainer = new function () {
    this.hero = document.querySelector('.hero');

    function adjustHero() {
        if (document.querySelector('body').classList.contains('has-hero')) {
            let sectionAfterHero = heroContainer.hero.nextElementSibling;

            if (breakpoints.fromDesktop()) {
                sectionAfterHero.style.marginTop = heroContainer.hero.offsetHeight + 'px';
            } else {
                sectionAfterHero.style.marginTop = '0px';
            }
        }
    }
    window.addEventListener('load', adjustHero);
    window.addEventListener('resize', adjustHero);
};

/*
 * MODAL
 */
let modal = new function () {
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
        if (e.target === e.currentTarget) {
            let modals = document.querySelectorAll('.modal');

            document.querySelector('body').classList.remove('is-modal-open');
            modal.backdrop.classList.remove('is-open');
            Array.prototype.forEach.call(modals, function (modal) {
                // reset content
                const content = modal.querySelector('.modal__content');
                if (content) {
                    const contentHtml = content.innerHTML;
                    while (content.firstChild) {
                        content.removeChild(content.firstChild);
                    }
                    content.innerHTML = contentHtml;
                }

                // remove class
                modal.classList.remove('is-open');
            });
        }
    }
    [
        ...this.closeTriggers,
        ...document.querySelectorAll('.modal')
    ].forEach(function (trigger) {
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
let navbar = new function () {
    this.navbar = document.querySelector('.navbar');

    if (this.navbar) {
        this.body = document.querySelector('body');
        this.header = document.querySelector('.header');
        this.navbarMobile = document.querySelector('.navbar--mobile');
        this.navbarItems = document.querySelectorAll('.navbar__item');
        this.navbarToggle = document.querySelector('.navbar__toggle');
        this.nextSection = document.querySelector('.section:not(.hero)');
        if (!this.nextSection) {
            this.nextSection = document.querySelector('.footer');
        }
        this.subnavToggle = document.querySelectorAll('.navbar__item.has-subnav > a, .navbar__item__caret, .navbar__subnav__overlay');

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
            navbar.body.classList.toggle('has-disabled-scroll');
            navbar.navbarToggle.classList.toggle('is-active');
            navbar.navbarMobile.classList.toggle('is-active');
        }

        this.navbarToggle.addEventListener('click', toggle);

        // toggle subnav
        function toggleSubnav(e) {
            if (breakpoints.fromDesktop()) {
                e.preventDefault();

                if (e.target !== e.currentTarget)
                    return false;

                e.currentTarget.closest('.navbar__item').classList.toggle('is-open');
                navbar.header.classList.toggle('is-open');
            }
        }

        Array.prototype.forEach.call(this.subnavToggle, function (subnavToggle) {
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
    }
};

/*
 * SERVICES
 */
let services = new function () {
    if (document.querySelector('.services__animated')) {
        function toggleRotation() {
            this.container = document.querySelector('#services');
            this.servicesAnimation = document.querySelector('.services__animated');
            this.strategyAndResearchHeight = document.querySelector('.services__service:nth-child(1)').offsetHeight;
            this.uxResearchAndDesignHeight = document.querySelector('.services__service:nth-child(2)').offsetHeight;

            if (this.container.getBoundingClientRect().top < -this.uxResearchAndDesignHeight - this.strategyAndResearchHeight + 200) {
                this.servicesAnimation.classList.remove('is-rotated-0', 'is-rotated-120');
                this.servicesAnimation.classList.add('is-rotated-240');
            } else if (this.container.getBoundingClientRect().top < -this.strategyAndResearchHeight + 100) {
                this.servicesAnimation.classList.remove('is-rotated-0', 'is-rotated-240');
                this.servicesAnimation.classList.add('is-rotated-120');
            } else {
                this.servicesAnimation.classList.remove('is-rotated-120', 'is-rotated-240');
                this.servicesAnimation.classList.add('is-rotated-0');
            }
        }

        window.addEventListener('scroll', toggleRotation);
    }
};

/*
 * SMOOTH SCROLL
 */
window.addEventListener('DOMContentLoaded', function () {
    let links = document.getElementsByTagName('a');
    for (let i = 0; i < links.length; i++) {
        if (!links[i].hash)
            continue;

        if (links[i].origin + links[i].pathname !== self.location.href)
            continue;

        (function (anchorPoint) {
            links[i].addEventListener('click', function (e) {
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
let social = new function () {
    this.icons = document.querySelectorAll('.social-sharer .icon');

    function openShareWindow(e) {
        e.preventDefault();

        let that = e.currentTarget.parentNode;
        let url = that.getAttribute('href');

        let winHeight = 600;
        let winWidth = 600;
        let winTop = (screen.height / 2) - (winHeight / 2);
        let winLeft = (screen.width / 2) - (winWidth / 2);
        window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);

    }
    Array.prototype.forEach.call(this.icons, function (icon) {
        icon.addEventListener('click', openShareWindow);
    });
};