// import external dependencies
import 'jquery';
import 'fancybox';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
// import Router from './util/Router';
// import common from './routes/common';
// import home from './routes/home';
// import aboutUs from './routes/about';
// import AOS from 'aos';

import hamburger from './components/hamburger';
import hero from './components/hero';
import tabs from './components/tabs';
import TabsSlider from './components/tabs-slider';
import realizations from './components/realizations';
import gmap from './components/gmap';
import cats from './components/cats';
import checkbox from './components/checkbox';
import header from './components/header';
import preloader from './components/preloader';
import raports from './components/raports';
import countDate from './components/count-date';

/** Populate Router instance with DOM routes */
// const routes = new Router({
//   // All pages
//   common,
//   // Home page
//   home,
//   // About Us page, note the change from about-us to aboutUs.
//   aboutUs,
// });

// Load Events
$(document).ready(function () {
  console.log('READY');
  hamburger.init();
  hero.init();
  hero.resize();
  tabs.init();
  TabsSlider.init();
  realizations.init();
  console.log('resize');
  gmap.init();
  cats.init();
  checkbox.init();
  header.init();
  window.dispatchEvent(new Event('resize'));
  raports.init();
  countDate.init();
  preloader.init();

  // window.addEventListener('scroll', () => {
  //   skrollr.init();
  // });
});
