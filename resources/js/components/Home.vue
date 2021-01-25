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
                    <span>XEM ALBUM</span>
                    </router-link>
            </div>
            <div class="col-md-6 image">
                <img v-bind:src="'images/' + banner.banner"/> 
            </div>
        </div>
    </div>
    <div class="section-content relative">
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
</div>

</template>

<script>
    export default {
        name: 'Home',
        data:function() {
            return {
                banner:{
                    banner :'banner-shop.png'
                },
                content:{
                    content :'content.jpg'
                }
            }
        }
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
span {
    color:white;
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
</style>