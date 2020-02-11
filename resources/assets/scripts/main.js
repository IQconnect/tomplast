// import external dependencies
import 'jquery';

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
$(document).ready(function() {
  console.log('READY');
  hamburger.init();
  hero.init();
  hero.resize();
  console.log('resize');
  window.dispatchEvent(new Event('resize'));
});
