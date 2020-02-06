const Parallax = require('parallax-js')

const CONFIG = {
    ELEM: '[hero]',
}

const { ELEM } = CONFIG;

const hero = {
    init() {
        this.elem = document.querySelector(ELEM);
        if(this.elem) {
            new Parallax(this.elem);
        }
    },
}

export default hero;