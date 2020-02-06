var Flickity = require('flickity');

const CONFIG = {
    ELEM: '.rooms__wrapper',
    CELL: '.rooms__col',
};

const Slider = {
    init() {
        const { ELEM } = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        this.sliders = [];
        if (this.elem) {
            this.createSlider();
            this.resize();
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

    resize() {
        console.log('resize INIT', this.sliders);
        if(this.sliders) {
            this.sliders.forEach(element => {
                console.log('resize');
                element.resize();
            });
        }
    },
};

export default Slider;