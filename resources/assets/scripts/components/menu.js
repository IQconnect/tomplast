const CONFIG = {
    ELEM: '[header]',
    CLASS: '-hide',
}

const { ELEM, CLASS } = CONFIG;

const menu = {
    init() {
        this.elem = document.querySelector(ELEM);
        this.class = CLASS;

        this.addEvents();
    },

    addEvents() {
        window.addEventListener('scroll', () => {
            console.log('scroll');
            this.s = window.scrollY;

            if (this.s > this.ls) {
                this.elem.classList.add(CLASS);
            }

            else {
                this.elem.classList.remove(CLASS);
            }

            this.ls = this.s;
        })
    },
}

export default menu;