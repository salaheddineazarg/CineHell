import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

import './assets/tailwind.css'




createApp(App).use(store).use(router).mount("#app");



import { library } from '@fortawesome/fontawesome-svg-core';
import { faSearch } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faSearch);

Vue.component('font-awesome-icon', FontAwesomeIcon);
