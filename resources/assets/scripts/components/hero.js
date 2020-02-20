var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.hero',
    CELL: '.hero__cell',
    BUTTON: '.hero__btn',
    CLASS: '-is-active',
};

const Hero = {
    init() {
        const { ELEM, BUTTON, CLASS } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        this.btn = document.querySelectorAll(BUTTON);
        this.class = CLASS;
        this.sliders = [];
        console.log('this.elem', this.elem.length);
        if (this.elem.length) {
            this.createSlider();
            this.resize();
            this.detectChange();
            this.addEvents();
        }
    },

    createSlider() {
        const { CELL } = CONFIG;

        this.elem.forEach(element => {
            console.log(element);
            const slider = new Flickity(element, {
                pageDots: false,
                prevNextButtons: false,
                cellSelector: CELL,
                autoPlay: false,
                wrapAround: true,
            });

            console.log(slider);
            this.sliders.push(slider);
        });
    },

    detectChange() {
        this.sliders[0].on('select', () => {
            const index = this.sliders[0].selectedIndex;
            this.addButtonClass(index);
        })
    },

    addEvents() {
        this.btn.forEach(elem => {
            elem.addEventListener('click', (e) => {
                const index = e.currentTarget.dataset.index;
                this.changeSlide(index);
            })
        })
    },

    changeSlide(index) {
        this.sliders[0].select(index);
        this.addButtonClass(index)
    },

    addButtonClass(index) {
        this.btn.forEach(elem => {
            elem.classList.remove(this.class);
        })
        this.btn[index].classList.add(this.class);
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

export default Hero;