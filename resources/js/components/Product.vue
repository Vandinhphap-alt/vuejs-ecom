<template>
    <div>
        <div id="myproduct">
            <div class="row mt-2 mb-2">
                <div class="col-md-10">&nbsp;</div>
                <div class="col-md-2 text-right">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cart" >
                        <i class="fa fa-shopping-cart"></i> <span class="badge badge-light"> {{badge}} </span>
                    </button>
                    <!-- Modal -->
                    <div id="cart" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">your cart</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped text-left">
                                        <tbody>
                                            <tr v-for="(cart, n) in carts" v-bind:key="cart.id">
                                                <td>{{cart.name}}</td>
                                                <td>Rp. {{cart.price}}</td>
                                                <td width="100"><input type="text" readonly class="form-control" v-model="cart.amount"/></td>
                                                <td width="60">
                                                    <button @click="removeCart(n)" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    total price : {{totalprice}} &nbsp;
                                     <a href="/checkout" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" :class="{ loading: loading }">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h1 class="mt-4">Filters</h1>
                    <h3 class="mt-2">Price</h3>
                    <div class="form-check" v-for="(price, index) in prices">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            :value="index"
                            :id="'price' + index"
                            v-model="selected.prices"
                        />
                        <label class="form-check-label" :for="'price' + index">
                            {{ price.name }} ({{ price.products_count }})
                        </label>
                    </div>
                    <h3 class="mt-2">Categories</h3>
                    <div
                        class="form-check"
                        v-for="(category, index) in categories"
                    >
                        <input
                            class="form-check-input"
                            type="checkbox"
                            :value="category.id"
                            :id="'category' + index"
                            v-model="selected.categories"
                        />
                        <label
                            class="form-check-label"
                            :for="'category' + index"
                        >
                            {{ category.name }} ({{ category.products_count }})
                        </label>
                    </div>

                    <h3 class="mt-2">Manufacturers</h3>
                    <div
                        class="form-check"
                        v-for="(manufacturer, index) in manufacturers"
                    >
                        <input
                            class="form-check-input"
                            type="checkbox"
                            :value="manufacturer.id"
                            :id="'manufacturer' + index"
                            v-model="selected.manufacturers"
                        />
                        <label
                            class="form-check-label"
                            :for="'manufacturer' + index"
                        >
                            {{ manufacturer.name }} ({{
                                manufacturer.products_count
                            }})
                        </label>
                    </div>
                </div>
                <div
                    class="col-xl-3 col-lg-9 col-md-4 col-12"
                    v-for="product in products"
                >
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img
                                    class="default-img"
                                    src="https://via.placeholder.com/550x750"
                                    alt="#"
                                />
                                <img
                                    class="hover-img"
                                    src="https://via.placeholder.com/550x750"
                                    alt="#"
                                />
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a
                                        data-toggle="modal"
                                        data-target="#exampleModal"
                                        title="Quick View"
                                        href="#"
                                        ><i class=" ti-eye"></i
                                        ><span>Quick Shop</span></a
                                    >
                                    <a title="Wishlist" href="#"
                                        ><i class=" ti-heart "></i
                                        ><span>Add to Wishlist</span></a
                                    >
                                    <a title="Compare" href="#"
                                        ><i class="ti-bar-chart-alt"></i
                                        ><span>Add to Compare</span></a
                                    >
                                </div>
                                <div class="product-action-2">
                                    <button
                                        @click="addCart(product)"
                                        class="btn btn-primary"
                                    >
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>
                                <a>{{ product.name }}</a>
                            </h3>
                            <div class="product-price">
                                <span>{{ product.price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import _ from "lodash";
export default {
    name: "Product",
    data: function() {
        return {
            carts: [],
            cartadd: {
                id: '',
                name: '',
                description: '',
                price: '',
                amount: ''
            },
            badge: "0",
            quantity: "1",
            totalprice: "0",
            prices: [],
            categories: [],
            manufacturers: [],
            products:[],
            product: {
                id: '',
                name: '',
                description: '',
                price: '',
                amount: ''
            },
            loading: true,
            selected: {
                prices: [],
                categories: [],
                manufacturers: []
            }
        };
    },
    mounted() {
        this.loadCategories();
        this.loadManufacturers();
        this.loadPrices();
        this.loadProducts();
    },
    watch: {
        selected: {
            handler: function() {
                this.loadCategories();
                this.loadManufacturers();
                this.loadPrices();
                this.loadProducts();
            },
            deep: true
        }
    },
    created() {
        this.viewCart();
    },
    methods: {
        viewCart() {
            if (localStorage.getItem("carts")) {
                this.carts = JSON.parse(localStorage.getItem("carts"));
                this.badge = this.carts.length;
                this.totalprice = this.carts.reduce((total, item) => {
                    return total + this.quantity * item.price;
                }, 0);
            }
            console.log(this.carts);
        },
        addCart(pro) {
            this.cartadd.id = pro.id;
            this.cartadd.name = pro.name;
            this.cartadd.price = pro.price;
            this.cartadd.description = pro.description;
            this.cartadd.amount = this.quantity;
            this.carts.push(this.cartadd);
            this.cartadd = {};
            this.storeCart();
        },
        removeCart(pro) {
            this.carts.splice(pro, 1);
            this.storeCart();
        },
        storeCart() {
            let parsed = JSON.stringify(this.carts);
            localStorage.setItem("carts", parsed);
            this.viewCart();
        },
        loadCategories: function() {
            axios
                .get("http://127.0.0.1:8000/api/categories", {
                    params: _.omit(this.selected, "categories")
                })
                .then(response => {
                    this.categories = response.data.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        loadProducts: function() {
            axios
                .get("http://127.0.0.1:8000/api/products", {
                    params: this.selected
                })
                .then(response => {
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        loadManufacturers: function() {
            axios
                .get("http://127.0.0.1:8000/api/manufacturers", {
                    params: _.omit(this.selected, "manufacturers")
                })
                .then(response => {
                    this.manufacturers = response.data.data;
                    this.loading = false;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        loadPrices: function() {
            axios
                .get("/api/prices", {
                    params: _.omit(this.selected, "prices")
                })
                .then(response => {
                    this.prices = response.data;
                    this.loading = false;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
};
</script>
<style scoped>
.single-product {
    margin-top: 50px;
}

.single-product .product-img {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.single-product .product-img a {
    display: block;
    position: relative;
}

.single-product .product-img a img {
    width: 100%;
}

.single-product .product-img a img.hover-img {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.5s ease, transform 2s cubic-bezier(0, 0, 0.44, 1.18),
        -webkit-transform 2s cubic-bezier(0, 0, 0.44, 1.18);
}

.single-product .product-img a span.price-dec {
    background-color: #f6931d;
    display: inline-block;
    font-size: 11px;
    color: #fff;
    right: 20px;
    top: 20px;
    padding: 1px 16px;
    font-weight: 700;
    border-radius: 0;
    text-align: center;
    position: absolute;
    text-transform: uppercase;
    border-radius: 30px;
    height: 26px;
    line-height: 25px;
}

.single-product .product-img a span.new {
    background-color: #8493ca;
    display: inline-block;
    font-size: 11px;
    color: #fff;
    right: 20px;
    top: 20px;
    padding: 1px 16px;
    font-weight: 700;
    border-radius: 0;
    text-align: center;
    position: absolute;
    text-transform: uppercase;
    border-radius: 30px;
    height: 26px;
    line-height: 24px;
}

.single-product .product-img a span.out-of-stock {
    background-color: #ed1b24;
    display: inline-block;
    font-size: 11px;
    color: #fff;
    right: 20px;
    top: 20px;
    padding: 1px 16px;
    font-weight: 700;
    border-radius: 0;
    text-align: center;
    position: absolute;
    text-transform: uppercase;
    border-radius: 30px;
    height: 26px;
    line-height: 24px;
}

.single-product .product-img .product-action {
    display: inline-block;
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: 99;
    border-radius: 3px;
}

.single-product .product-img .product-action a {
    background-color: transparent;
    color: #333;
    display: block;
    font-size: 16px;
    display: inline-block;
    margin-right: 15px;
    text-align: right;
    height: 52px;
    position: relative;
    top: 2px;
}

.single-product .product-img .product-action a:last-child {
    margin-right: 0;
    border: none;
}

.single-product .product-img .product-action a i {
    line-height: 40px;
}

.single-product .product-img .product-action a span {
    visibility: hidden;
    position: absolute;
    background: #f7941d !important;
    color: #fff !important;
    text-align: center;
    padding: 5px 12px;
    z-index: 3;
    opacity: 0;
    -webkit-transition: opacity 0.6s, margin 0.3s;
    -o-transition: opacity 0.6s, margin 0.3s;
    transition: opacity 0.6s, margin 0.3s;
    font-size: 11px;
    right: 0;
    line-height: 14px;
    top: -12px;
    margin-top: -5px;
    margin-right: 0;
    display: inline-block;
    width: 120px;
    border-radius: 15px 0 0 15px;
}

.single-product .product-img .button-head .product-action a span::after {
    position: absolute;
    content: "";
    right: 0;
    bottom: -12px;
    border: 6px solid #f7941d;
    border-left: 0px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid transparent;
}

.single-product .product-img .product-action a:hover {
    color: #f7941d;
}

.single-product .product-img .product-action a:hover span {
    visibility: visible;
    opacity: 1;
    color: #333;
    background: #fff;
    margin-top: -12px;
}

.single-product .product-img .product-action.pro-action-width-dec a {
    width: 30px;
    height: 30px;
    font-size: 14px;
}

.single-product .product-img .product-action.pro-action-width-dec a i {
    line-height: 30px;
}

.single-product .product-img .product-action.pro-action-width-dec-2 {
    bottom: 45px;
}

.single-product .product-img .product-action-2 {
    position: absolute;
    left: 0;
    bottom: 0;
    text-align: left;
    z-index: 99;
    -webkit-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
}

.single-product .product-img .product-action-2 a {
    display: block;
    background-color: transparent;
    color: #333;
    text-align: left;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    line-height: 1;
    display: inline-block;
}

.single-product .product-img .product-action-2 a:hover {
    color: #f7941d;
}

.single-product .button-head {
    background: #fff;
    display: inline-block;
    height: 40px;
    width: 100%;
    position: absolute;
    left: 0;
    bottom: -50px;
    z-index: 9;
    height: 50px;
    line-height: 50px;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.single-product:hover .button-head {
    bottom: 0;
}

.single-product .product-img .shop-list-quickview {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0;
    right: 0;
    text-align: center;
    z-index: 99;
    margin-top: 20px;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease 0s;
    -o-transition: all 0.35s ease 0s;
    transition: all 0.35s ease 0s;
}

.single-product .product-img .shop-list-quickview a {
    color: #000;
    background-color: #fff;
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    font-size: 18px;
}

.single-product .product-img .shop-list-quickview a:hover {
    background-color: #222;
    color: #fff;
}

.single-product .product-img .shop-list-quickview a i {
    line-height: 50px;
}

.single-product .product-content {
    margin-top: 20px;
}

.single-product .product-img:hover.default-overlay::before {
    background-color: rgba(38, 38, 38, 0.2);
    z-index: 9;
    -webkit-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
    pointer-events: none;
    opacity: 1;
}

.single-product .product-img:hover.default-overlay.metro-overlay::before {
    background-color: rgba(38, 38, 38, 0.4);
    z-index: 9;
    -webkit-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
    pointer-events: none;
    opacity: 1;
}

.single-product .product-img:hover img.hover-img {
    opacity: 1;
}

.single-product .product-content h3 {
    line-height: 22px;
}

.single-product .product-content h3 a {
    font-size: 14px;
    font-weight: 500;
    margin: 0;
}

.single-product .product-content h3 a:hover {
    color: #f7941d;
}

.single-product .product-content .product-price {
    margin: 6px 0 0 0;
}

.single-product .product-content .product-price span {
    font-size: 15px;
    font-weight: 500;
}

.single-product .product-content .product-price span.old {
    text-decoration: line-through;
    opacity: 0.6;
    margin-right: 2px;
}
</style>
