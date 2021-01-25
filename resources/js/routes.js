import Home from './components/Home'
import Product from './components/Product'
import Checkout from './components/Checkout'

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
        path: '/checkout',
        component: Checkout,
        name: 'checkout',
    },
];

export default routes;