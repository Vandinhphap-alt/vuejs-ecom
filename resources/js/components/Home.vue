<template>
<div>
    <div id="banner">
        <div class="row" style="position:relative;">
            <div class="col-md-6 position">
                <h2>ÁO DÀI BÀ SUI</h2>
                <p style="text-align: justify;">Tổng hợp những mẫu áo dài cho mẹ không thể bỏ qua. Nhiều mẫu áo dài sang trọng cho người trung niên. Nhiều kích cỡ để lựa chọn.</p>
                    <router-link
                        class="nav-link click"
                        :class="[{active: $route.name === 'products'}]"
                        :to="{name: 'products'}"
                    >
                    <span style="color:white;">XEM ALBUM</span>
                    </router-link>
            </div>
            <div class="col-md-6 image">
                <img v-bind:src="'images/' + banner.banner"/> 
            </div>
        </div>
    </div>
    <div class=" section-content relative">
        <div class="row row-collapse row-full-width align-middle" id="row-1487869657">
            <div id="col-1507349183" class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_600379934">
                        <div class="img-inner dark">
                            <img class="images-content" v-bind:src="'images/' + content.content"/> 			
                        </div>
                        </div>
                    </div>
            </div>
        	<div id="col-971143233" class="col medium-6 small-12 large-6">
                <div class="col-inner text-center" style="max-width:520px;">
                    <h2><span style="color: #ffffff;">ÁO CƯỚI TRUNG HOA</span></h2>
                    <p style="text-align: justify;"><span style="color: #c0c0c0;">Hoài Giang shop là đơn vị chuyên Bán và Cho thuê áo khỏa Trung Hoa. Với nhiều năm kinh nghiệm, chúng tôi hỗ trợ:</span></p>
                    <p><span style="color: #c0c0c0;">♥ Mẫu mã vô cùng đa dạng</span></p>
                    <p><span style="color: #c0c0c0;">♥ Thiết kế mới theo xu hướng</span></p>
                    <p><span style="color: #c0c0c0;">♥ Giá cả phải chăng</span></p>
                    <p><span style="color: #c0c0c0;">♥ Quy định rõ ràng</span></p>
                    <router-link
                        class="nav-link click"
                        :class="[{active: $route.name === 'products'}]"
                        :to="{name: 'products'}"
                    >
                    <span>XEM ALBUM</span>
                    </router-link>		
                </div>
            </div>
        </div>
    </div>
     <div class="product container">
        <div class="row">
            <div class="list-product">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12" v-for="category in categories">
                            <div class="single-product">
                                <div class="product-img">
                                    <router-link
                                    class="nav-link"
                                    :class="[{active: $route.name === 'products'}]"
                                    :to="{name: 'products'}"
                                    >
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                    </router-link>
                                </div>
                                    <div class="product-content">
                                        <h3><router-link
                                            class="nav-link"
                                            :class="[{active: $route.name === 'products'}]"
                                            :to="{name: 'products'}"
                                            >
                                            {{category.name}}
                                            </router-link></h3>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
    <div class="section-content relative">
        <div class="row row-collapse row-full-width align-middle" id="row-1487869657">
            <div id="col-1507349183" class="col col-md-4">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_600379934">
                        <div class="img-inner dark">
                            <img class="images-section" v-bind:src="'images/' + section.left"/> 			
                        </div>
                    </div>
                </div>
            </div>
        	<div id="col-971143233" class="col col-md-4 medium-6 small-12 large-6">
                <div class="col-inner">
                    <div class="banner has-hover" id="banner-174511329">
                        <div class="banner-inner fill">
                            <div class="banner-bg fill">
                                <div class="bg fill bg-fill bg-loaded"></div>
                                <div class="overlay"></div>            
                            </div>
                            <div class="banner-layers container">
                            <div class="fill banner-link"></div>            
                    <div id="text-box-1348855118" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                        <div class="text dark">
                            <div class="text-inner text-center">
                        <h2><span style="font-size: 81%;font-weight: 500;">ÁO DÀI CƯỚI CAO CẤP</span></h2>
                        <p><span style="font-size: 140%;font-weight: 500;">Hiện đại, sang trọng</span></p>
                        <p><span style="font-size: 140%;font-weight: 500;">Cập nhật xu hướng</span></p>
                        <p><span style="font-size: 140%;font-weight: 500;">Đạ dạng, nhiều kích cỡ</span></p>
                        <p><span style="font-size: 140%;font-weight: 500;">Giá cả cạnh tranh</span></p>
                        <a href="https://hoaigiangshop.com/ao-dai-cuoi-2" target="_self" class="button primary is-shade is-xlarge">
                        <span>Xem ngay album</span>
                        </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

		</div>
            </div>
            <div id="col-1507349183" class="col col-md-4">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_600379934">
                        <div class="img-inner dark">
                            <img class="images-section" v-bind:src="'images/' + section2.right"/> 			
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </div>
   
</div>
</div>

</template>

<script>
import axios from 'axios'
import _ from 'lodash';
    export default {
        name: 'Home',
        data:function() {
            return {
                banner:{
                    banner :'banner-shop.png'
                },
                content:{
                    content :'content.jpg'
                },
                section:{
                    left :'contentleft.jpg'
                },
                section2:{
                    right :'contentright.jpg'
                },
                categories:[

                ],
            }
        },
        created(){
            axios.get('http://127.0.0.1:8000/api/listcategory')
            .then(response => {
                this.categories = response.data.data
            })
        },

    }
</script>
<style scoped>
.image-content {
  width: 100%;
  height:640px;
}
.position {
    position:absolute;
    top:50%;
    left:6%;
    width: 40%;
    margin-left: 7%;
    text-align:center;
}
.image {
    top:50%;
    left:50%;
}
h1, h2, h3, h4, h5, h6, .heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a {
    font-family: "Quicksand", sans-serif;
}
h1, h2, h3, h4, h5, h6, .heading-font, .banner h1, .banner h2 {
    font-weight: 700;
}
.h2, h2 {
    font-size: 1.6em;
    line-height: 1.3;
}
h1, h2, h3, h4, h5, h6 {
    color: #000000;
    width: 100%;
    margin-top: 0;
    margin-bottom: .5em;
    text-rendering: optimizeSpeed;
}
.title {
    text-align:center;
    font-weight:700;
}
.click {
    background-color: #006d6d;
    padding:10px;
    width:27%;
    margin:0 auto;
}

.section-content.relative {
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: rgb(0, 0, 0);
    margin-left: 20px;
    margin-right: 20px;
    margin-top:30px;
}
div#col-971143233{
    position:relative;
}
.col-inner.text-center {
    top: 19%;
    left: 5%;
    position: absolute;
}
img.images-content {
    padding-left:30px;
}
#text-box-1348855118 {
  width: 100%;
}
#text-box-1348855118 .text {
  font-size: 100%;
}
.images-section {
    width:100%;
}
div#text-box-1348855118{
    margin-top:105px;
}
h2 {
    font-weight:700;
    color:#fff;
}

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
    transition: opacity 0.5s ease, transform 2s cubic-bezier(0, 0, 0.44, 1.18), -webkit-transform 2s cubic-bezier(0, 0, 0.44, 1.18);
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
    background: #F7941D !important;
    color: #fff !important;
    text-align: center;
    padding: 5px 12px;
    z-index: 3;
    opacity: 0;
    -webkit-transition: opacity .6s, margin .3s;
    -o-transition: opacity .6s, margin .3s;
    transition: opacity .6s, margin .3s;
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
    border: 6px solid #F7941D;
    border-left: 0px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid transparent;
}

.single-product .product-img .product-action a:hover {
    color: #F7941D;
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
    color: #F7941D;
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
    -webkit-transition: all .35s ease 0s;
    -o-transition: all .35s ease 0s;
    transition: all .35s ease 0s;
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
    color: #F7941D;
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
    opacity: .6;
    margin-right: 2px;
}
</style>