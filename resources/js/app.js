require('./bootstrap'); //import main library

require('bulma'); //import Bulma for CSS framework

window.Vue = require('vue'); //import Vue for JS framework

//import home from './components/Home.vue'; //import & define
import pizza from './components/Pizza.vue';
const app = new Vue({
	components: {
        //home
		pizza //register
	}
}).$mount('#app');