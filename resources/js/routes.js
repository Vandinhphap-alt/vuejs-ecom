import Home from './components/Home'
import Product from './components/Product'
import Cart from './components/Cart'

const routes = [{
        path: '/',
        component: Home,
        name: 'home',
    },
    {
        path: '/products',
        component: Product,
        name: 'products',
    }, {
        path: '/cart',
        component: Cart,
        name: 'cart',
    },
];

export default routes;