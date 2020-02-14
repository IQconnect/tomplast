const CONFIG = {
    BUTTON: '[data-tab]',
    ELEM: '[data-tabs-content]',
    CLASS: '-is-active',
};

const { ELEM, BUTTON, CLASS } = CONFIG;

const Tabs = {
    init() {
        this.buttons = document.querySelectorAll(BUTTON);
        this.elem = document.querySelectorAll(ELEM);
        this.class = CLASS;

        this.addEvents();
    },

    addEvents() {
        this.buttons.forEach(element => {
            element.addEventListener('click', e => {
                const $this = e.currentTarget;
                const id = $this.dataset.tabId;
                const index = $this.dataset.tabIndex;

                this.resetClass(this.buttons, this.class);
                $this.classList.add(this.class);

                this.changeTab(index, id);
            })
        });
    },

    resetClass(array, cls) {
        array.forEach(element => {
            element.classList.remove(cls);
        })
    },

    changeTab(index, id) {
        const $tabWrapper = document.querySelector(`[data-tabs-content="${id}"]`);

        const $tabContents = $tabWrapper.querySelectorAll('[data-tab-content]');
        
        this.resetClass($tabContents, this.class);
        $tabContents[index].classList.add(this.class);
    },
};

export default Tabs;