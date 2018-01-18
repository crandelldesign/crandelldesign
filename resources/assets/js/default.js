
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

document.addEventListener('DOMContentLoaded', function(){
    // Revisit Page Transitions Later
    /*Barba.Pjax.Dom.wrapperId = 'wrapper';
    Barba.Pjax.Dom.containerClass = 'site-container';
    Barba.Pjax.start();

    Barba.Pjax.getTransition = function() {
      return HideShowTransition;
    };
    Barba.Dispatcher.on(eventName, function() {
      //your listener
    });*/
}, false);




// Auto Hide Navbar on Scroll
// https://codepen.io/pirrera/pen/rayoLW
;(function(document, window, index) {
    'use strict';

    var elSelector = 'nav.navbar',
        element = document.querySelector(elSelector);

    if (!element) return true;

    var elHeight = 0,
        elTop = 0,
        dHeight = 0,
        wHeight = 0,
        wScrollCurrent = 0,
        wScrollBefore = 0,
        wScrollDiff = 0;

    window.addEventListener('scroll', function() {
        elHeight = element.offsetHeight;
        dHeight = document.body.offsetHeight;
        wHeight = window.innerHeight;
        wScrollCurrent = window.pageYOffset;
        wScrollDiff = wScrollBefore - wScrollCurrent;
        elTop = parseInt(window.getComputedStyle(element).getPropertyValue('top')) + wScrollDiff;

        if (wScrollCurrent <= 0)
            element.style.top = '0px';

        else if (wScrollDiff > 0)
            element.style.top = (elTop > 0 ? 0 : elTop) + 'px';

        else if (wScrollDiff < 0) {
            if (wScrollCurrent + wHeight >= dHeight - elHeight)
                element.style.top = ((elTop = wScrollCurrent + wHeight - dHeight) < 0 ? elTop : 0) + 'px';

            else
                element.style.top = (Math.abs(elTop) > elHeight ? -elHeight : elTop) + 'px';
        }

        wScrollBefore = wScrollCurrent;
    });

}(document, window, 0));
