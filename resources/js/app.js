// Imports
require("./bootstrap");
window.Vue = require("vue").default;

import VueRouter from "vue-router";
Vue.use(VueRouter);

// Components
import App from "./components/App.vue";
import Home from "./components/Home/Index.vue";
import UserIndex from "./components/Users/Index.vue";

Vue.component("pagination", require("laravel-vue-pagination"));

// Routes
const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/users",
        name: "users.index",
        component: UserIndex,
    },
];

// Router
const router = new VueRouter({
    mode: "history",
    routes,
});

// App
const app = new Vue({
    el: "#app",
    components: { App },
    router,
});
