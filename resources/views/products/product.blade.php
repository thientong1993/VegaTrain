@extends('home.index')
@section('content')

<header id="header" style="background-image: url(http://static.vega.vn/adv/30.jpg);">
    <div class="content" id="head-slider">
        <h3> </h3>
    </div>
    <canvas id="myCanvas01" width="2000" height="69"></canvas>
</header>
<!-- CONTENT -->
<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 category">
            <div class="title-section">Những dịch vụ của <b>VEGA</b></div>
                <ul>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="datailproduct">
                            <img src="http://static.vega.vn/product/78.png?v=2&w=145&h=213" alt="Waka - Nghe & Đọc sách online mọi lúc, mọi nơi"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="datailproduct">Waka</a></h3>
                        <p>Waka - Nghe & Đọc sách online mọi lúc, mọi nơi</p>
                            <p class="web-link-product"><b>Website:&nbsp;</b> <a href="datailproduct" target="_blank">http://waka.vn/</a></p>
    
                        </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/ott/cliptv.vn">
                            <img src="http://static.vega.vn/product/40.png?v=7&w=145&h=213" alt="Dịch vụ Truyền hình Internet đa nền tảng (Web, wap, mobile app, TV app và TV Box)"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/ott/cliptv.vn">Clip TV</a></h3>
                        <p>Dịch vụ Truyền hình Internet đa nền tảng (Web, wap, mobile app, TV app và TV Box)</p>
                                                    <p class="web-link-product"><b>Website:&nbsp;</b> <a href="http://cliptv.vn/" target="_blank">http://cliptv.vn/</a></p>
                        
                                                    <p><b>Wapsite:&nbsp;</b> <a href="http://m.cliptv.vn/" target="_blank">http://m.cliptv.vn/</a></p>
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/ott/nhacvn">
                            <img src="http://static.vega.vn/product/72.png?v=3&w=145&h=213" alt="Nhac.vn - Nghe nhạc mp3 online cực hot, tải nhạc chất lượng cao cực nhanh"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="http://nhac.vn/">Nhac.vn</a></h3>
                        <p>Nhac.vn - Nghe nhạc mp3 online cực hot, tải nhạc chất lượng cao cực nhanh</p>
                            <p class="web-link-product"><b>Website:&nbsp;</b> <a href="http://nhac.vn/" target="_blank">http://nhac.vn/</a></p>
                        </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="datailproduct">
                            <img src="http://static.vega.vn/product/137.png?v=1&w=145&h=213" alt="Machine Learning"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="datailproduct">Machine Learning</a></h3>
                        <p>Machine Learning</p>
                        
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/cong-nghe/BD">
                            <img src="http://static.vega.vn/product/138.png?v=2&w=145&h=213" alt="Big Data"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/cong-nghe/BD">Big Data</a></h3>
                        <p>Big Data</p>
                        
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/cong-nghe/DM">
                            <img src="http://static.vega.vn/product/140.png?v=1&w=145&h=213" alt="Data Mining"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/cong-nghe/DM">Data Mining</a></h3>
                        <p>Data Mining</p>
                        
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/vas/icook">
                            <img src="http://static.vega.vn/product/63.png?v=2&w=145&h=213" alt="Icook - Kênh Video về ẩm thực "/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/vas/icook">Icook</a></h3>
                        <p>Icook - Kênh Video về ẩm thực </p>
                                                    <p class="web-link-product"><b>Website:&nbsp;</b> <a href="http://icook.vn/" target="_blank">http://icook.vn/</a></p>
                        
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/vas/ilive">
                            <img src="http://static.vega.vn/product/37.png?v=1&w=145&h=213" alt="iLive – Truyền hình trực tiếp từ điện thoại di động"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/vas/ilive">iLive</a></h3>
                        <p>iLive – Truyền hình trực tiếp từ điện thoại di động</p>
                                                    <p class="web-link-product"><b>Website:&nbsp;</b> <a href="http://ilive.vn/" target="_blank">http://ilive.vn/</a></p>
                        
                                            </div>
                </li>
                            <li>
                    <div class="thumb" style="background-color: #fff !important;">
                        <a href="/vi/san-pham/cong-nghe/Vega-CDN">
                            <img src="http://static.vega.vn/product/141.png?v=1&w=145&h=213" alt="Vega CDN"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/san-pham/cong-nghe/Vega-CDN">Vega CDN</a></h3>
                        <p>Vega CDN</p>
                        
                                            </div>
                </li>
                    </ul>
    </div>


<!-- include category product -->
@include('products.categoryproduct')

</section>
<section id="section-navigation">
    <div class="container">
        <div class="ibreakcumb">
<a href="/">Trang Chủ</a> / <span>Sản phẩm</span></div>    </div>
</section>
<section id="section-contactus">
    <div class="container">
        <div class="contactus">
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                <div class="title-section"><b style="font-weight: 400;color: #111;">Liên hệ</b> Vega</div>
            </div>
            <div class="col-lg-3 col-md-3 address">
                <h3>Trụ sở chính</h3>
<!--                <p class="content">Tầng 8, Toà V.E.T, Số 98 đường Hoàng Quốc Việt, NGhĩa Đô, Cầu Giấy, HN</p>-->
<!--                <p class="phone">Điện thoại: (84-4) 3 755 4190<br>Fax: (84-4) 3 755 7831</p>-->
                <p class="content"><h3><strong>H&agrave; Nội</strong></h3>

<p><strong>Địa chỉ</strong>: Tầng 8, T&ograve;a nh&agrave; V.E.T, Số&nbsp;98 Đường&nbsp;Ho&agrave;ng Quốc Việt, Phường Nghĩa Đ&ocirc;, Quận Cầu Giấy, TP.&nbsp;H&agrave; Nội</p>

<p><strong>Điện thoại</strong>: (84-24) 3 755 4190</p>

<p><strong>Fax</strong>: (84-24) 3 755 7831&nbsp;</p>

<p><strong>Website</strong>: <a href="http://www.vega.com.vn">http://www.vega.com.vn</a></p>

<p><strong>Email</strong>: info@vega.com.vn&nbsp;</p>
</p>
            </div>
            <div class="col-lg-3 col-md-3 address">
                <h3>Chi nhánh</h3>
<!--                <p class="content">C2/A7 Tiền Giang, Phường 2, Quận Tân Bình, TP.HCM</p>-->
<!--                <p class="phone">Điện thoại: (84-8) 35 435 123</p>-->
                <p class="content"><h3 style="color:rgb(51, 51, 51); font-style:normal"><strong>TP.&nbsp;Hồ Ch&iacute; Minh</strong></h3>

<p><strong>Địa chỉ</strong>: 29 Tiền Giang, Phường 2, Quận T&acirc;n B&igrave;nh, TP. Hồ Ch&iacute; Minh</p>

<p><strong>Điện thoại</strong>: (84-28) 3 547 2123</p>

<h3>&nbsp;</h3>
</p>
            </div>
            <div class="col-lg-4 col-md-4 address email">
                <h3>Liên hệ nhanh</h3>
<!--                <p class="content">H.tác Kinh doanh: biz@vega.com.vn<br>H.tác truyền thông: marketing@vega.com.vn<br>Tuyển dụng: tuyendung@vega.com.vn</p>-->
                <p class="content"><p><strong>Hợp t&aacute;c kinh doanh:</strong> biz@vega.com.vn</p>

<p>&nbsp;</p>

<p><strong>Hợp t&aacute;c truyền th&ocirc;ng:</strong> marketing@vega.com.vn</p>

<p>&nbsp;</p>

<p><strong>Tuyển dụng:</strong> tuyendung@vega.com.vn | tuyendungsg@vega.com.vn</p>
</p>
            </div>
        </div>
    </div>
</section>
    <section id="section-map"></section>
    <canvas id="myCanvas02" style="display: none" width="2000" height="200"></canvas>
    <canvas id="myCanvas03" style="display: none" width="2000" height="200"></canvas>
@endsection