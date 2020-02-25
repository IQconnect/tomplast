const CONFIG = {
    ELEM: '#terms',
};

const { ELEM } = CONFIG;

const Checkbox = {
    init() {
        this.elem = document.querySelector(ELEM);

        if (this.elem) {
            const div = document.createElement('div');
            div.classList.add('form__checkbox-elem');
            this.elem.after(div);
        }
    },
};

export default Checkbox;