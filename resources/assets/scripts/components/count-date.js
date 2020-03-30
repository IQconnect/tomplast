const CONFIG = {
    ELEM: 'data-time',
    TIME: {
        h: 'data-hour',
        m: 'data-min',
        s: 'data-sec',
    },
};

const countDate = {
    init() {
        const { ELEM, TIME } = CONFIG;

        this.elem = document.querySelector(`[${ELEM}]`);
        this.h = document.querySelector(`[${TIME.h}]`);
        this.m = document.querySelector(`[${TIME.m}]`);
        this.s = document.querySelector(`[${TIME.s}]`);
        this.date = new Date();
        this.close = new Date().setHours(16,0,0);
        this.now = this.date.getTime();

        //console.log('init time', this.difHours(this.open, this.close).sec);
        console.log('sekund:', this.close);

        setInterval(() => {
            this.now = new Date().getTime();

            this.h.innerText=this.difHours(this.close, this.now).h;
            this.m.innerText=this.difHours(this.close, this.now).m;
            this.s.innerText=this.difHours(this.close, this.now).s;

            if(this.difHours(this.close, this.now).s < 0 || new Date().getDay() > 5) {
                this.elem.classList.add('-is-close');
            }
            else {
                this.elem.classList.remove('-is-close');
            }
        }, 200)
    },

    difHours(dt2, dt1) {
        let distance = dt2 - dt1;
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        const time = {
            s: seconds,
            m: minutes,
            h: hours,
        }
        return time;
    },
};

export default countDate;
