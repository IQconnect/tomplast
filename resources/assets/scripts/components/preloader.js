const CONFIG = {
  ELEM: 'preloader',
  CLASS: 'preloader--hide',
};

const preloader = {
  init() {
    const { ELEM, CLASS } = CONFIG;

    this.elem = document.querySelector(`[${ELEM}]`);
    this.class = CLASS;

    setTimeout(()=>{this.hide()}, 300);
  },

  hide() {
    this.elem.classList.add(this.class);
  },
};

export default preloader;
