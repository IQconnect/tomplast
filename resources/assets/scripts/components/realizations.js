var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.realizations__list',
    CELL: '.realizations__item',
    BREAKPOINT: 767,
};

const Realization = {
    init() {
        const { ELEM, BREAKPOINT } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        this.breakpoint = BREAKPOINT;

        this.sliders = [];
        if (this.elem) {
            if (window.innerWidth < this.breakpoint) {
                this.createSlider();
                this.resize();
            }

            this.windowResize();
        }
    },

    createSlider() {
        const { CELL } = CONFIG;

        this.elem.forEach(element => {
            console.log(element);
            const slider = new Flickity(element, {
                pageDots: true,
                prevNextButtons: false,
                cellSelector: CELL,
                autoPlay: false,
                wrapAround: true,
            });

            console.log(slider);
            this.sliders.push(slider);
        });
    },

    windowResize() {
        window.addEventListener('resize', () => {
            console.log('resize window');
            if(window.innerWidth > this.breakpoint) {
                this.sliders.forEach(element => {
                    console.log('resize');
                    element.destroy();
                });
                this.sliders = [];
            }

            else {
                if(this.sliders.length == 0) {
                    this.createSlider();
                }

                this.resize();
            }
        })
    },

    resize() {
        console.log('resize INIT', this.sliders);
        if (this.sliders) {
            this.sliders.forEach(element => {
                console.log('resize');
                element.resize();
            });
        }
    },
};

export default Realization;