// khai báo các component
Vue.component('app', require('./components/App'));
Vue.component('home', require('./components/Home'));
Vue.component('product', require('./components/Product'));
Vue.component('checkout', require('./components/Checkout.vue'));

// import vue router, component và routes
import App from './components/App'
import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// use router
Vue.use(VueRouter);

// khai báo dùng router này
const router = new VueRouter({
    routes,
    mode: 'history'
});

// và cuối cùng là tạo 1 instance Vue và render tại phần tử có id là app,
// render tại component App và dùng router đã khai báo ở trên
const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});