import './bootstrap';
import router from './routes.js';

new Vue({
    el: '#vue',
    router,
    vuetify,
    mounted() {
        //try removing this. you'll see v-bottom-navigation hides on scroll up
        OverlayScrollbars(document.querySelectorAll('body'), {});
    },
});

