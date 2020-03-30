const CONFIG = {
  ELEM: 'data-cats',
  PRODUCTS: '#products',
  NAV: '#cat-nav',
  CLASS: '-is-active',
};

const {
  ELEM,
  PRODUCTS,
  CLASS,
  NAV,
} = CONFIG;

const Cats = {
  init() {
    this.elem = document.querySelectorAll(`[${ELEM}]`);
    this.products = document.querySelector(`${PRODUCTS}`);
    this.navWrapper = document.querySelector(`${NAV}`);

    this.url = this.getPath(window.location.href);
    this.class = CLASS;

    if (this.elem.length) {
      this.topOffset = 300;
      this.timeOffset = 400;
      this.setClass();
      this.addEvents();
    }
  },

  addEvents() {
    this.elem.forEach(element => {
      element.addEventListener('click', e => {
        e.preventDefault();
        const $this = e.currentTarget;

        this.setPath($this);
        if (!$this.classList.contains(this.class)) {

          $('html, body').animate({
            scrollTop: this.topOffset,
          }, this.timeOffset);
          this.products.classList.add(this.class);
          setTimeout(() => {
            this.loadProducts();
          }, this.timeOffset);
        }
        this.setClass();
      });
    })
  },

  setClass() {
    console.log('set Class');
    this.navWrapper.classList.toggle(this.class);
    this.elem.forEach(element => {
      const href = this.getPath(element.getAttribute('href'));

      console.log(href, this.url);
      if (this.url == href) {
        element.classList.add(this.class);
        element.parentElement.classList.add(this.class);
      } else {
        element.classList.remove(this.class);
        element.parentElement.classList.remove(this.class);
      }
    });

  },

  setPath($this) {
    const title = $this.querySelector('h3').innerText;
    const href = $this.getAttribute('href');

    window.history.pushState('', title, href);

    this.url = this.getPath(window.location.href);
  },

  getPath(href) {
    return href.split('/')[href.split('/').length - 2];
  },

  loadProducts() {
    this.products.classList.add(this.class);
    this.products.innerHTML = '';

    fetch(window.location.href)
      .then((response) => {
        return response.text();
      })
      .then((html) => {
        var parser = new DOMParser();
        var doc = parser.parseFromString(html, 'text/html');

        console.log(doc);

        this.products.innerHTML = doc.querySelector(PRODUCTS).innerHTML;
      })
      .then(() => {
        this.products.classList.remove(this.class);
      });
  },
}

export default Cats
