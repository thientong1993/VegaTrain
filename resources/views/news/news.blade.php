@extends('home.index')
@section('content')

<header id="header" style="background-image: url(http://static.vega.vn/adv/26.jpg);">
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
    <div class="title-section">VEGA <b>Tin tức</b></div>
            <ul>
                            <li>
                    <div class="thumb">
                        <a href="datailnews">
                            <img src="http://static.vega.vn/news/0/0/68/68.jpg?v=2&w=145&h=213" alt="[ICT News] Ứng dụng sách điện tử Waka đã có hàng triệu tài khoản người dùng"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="datailnews">[ICT News] Ứng dụng sách điện tử Waka đã có hàng...</a></h3>
                        <p>Ứng dụng sách điện tử Waka đã có hàng triệu tài khoản người dùng
</p>
                        24/02/2017                    </div>
                </li>
                            <li>
                    <div class="thumb">
                        <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/nguoi-Viet-tre-doc-sach">
                            <img src="http://static.vega.vn/news/0/0/599/599.jpg?v=2&w=145&h=213" alt="[Cafebiz] Waka: người Việt trẻ đọc sách trung bình 12h mỗi tuần"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="datailnews">[Cafebiz] Waka: người Việt trẻ đọc sách trung...</a></h3>
                        <p>Waka: người Việt trẻ đọc sách trung bình 12h mỗi tuần
</p>
                        24/02/2017                    </div>
                </li>
                            <li>
                    <div class="thumb">
                        <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/Waka-ra-mat-audio-book">
                            <img src="http://static.vega.vn/news/0/0/65/65.jpg?v=2&w=145&h=213" alt="[Vietnamnet] Thư viện sách điện tử lớn nhất Việt Nam lần đầu ra mắt sách nói"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/Waka-ra-mat-audio-book">[Vietnamnet] Thư viện sách điện tử lớn nhất Việt...</a></h3>
                        <p>Waka cho ra mắt hàng ngàn cuốn Audio book</p>
                        24/02/2017                    </div>
                </li>
                            <li>
                    <div class="thumb">
                        <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/doc-sach-kieu-moi">
                            <img src="http://static.vega.vn/news/0/0/66/66.jpg?v=2&w=145&h=213" alt="[VnExpress] 3 ứng dụng đọc sách online hữu ích trên thiết bị di động"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/doc-sach-kieu-moi">[VnExpress] 3 ứng dụng đọc sách online hữu ích...</a></h3>
                        <p>3 ứng dụng đọc sách online hữu ích trên thiết bị di động
</p>
                        24/02/2017                    </div>
                </li>
                            <li>
                    <div class="thumb">
                        <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/ebook-truyen-cam-hung">
                            <img src="http://static.vega.vn/news/0/0/85/85.jpg?v=3&w=145&h=213" alt=" [KENH14] Không phải Facebook, Ebook mới là điều truyền cảm hứng nhất tới bạn trẻ Việt trong thời gian qua"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/ebook-truyen-cam-hung"> [KENH14] Không phải Facebook, Ebook mới là điều...</a></h3>
                        <p>Ebook là điều truyền cảm hứng nhất tới bạn trẻ Việt trong thời gian qua</p>
                        24/02/2017                    </div>
                </li>
                            <li>
                    <div class="thumb">
                        <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/phuong-phap-moi-giup-nguoi-Viet-thay-doi-thoi-quen-doc-sach">
                            <img src="http://static.vega.vn/news/0/0/67/67.jpg?v=4&w=145&h=213" alt="[Dantri] Phương pháp mới giúp người Việt thay đổi thói quen đọc sách"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/phuong-phap-moi-giup-nguoi-Viet-thay-doi-thoi-quen-doc-sach">[Dantri] Phương pháp mới giúp người Việt thay đổi...</a></h3>
                        <p>Phương pháp mới giúp người Việt thay đổi thói quen đọc sách</p>
                        24/02/2017                    </div>
                </li>
                    </ul>
    </div>           

<!-- include file category news -->
@include('news.categorynews')

</section>
<section id="section-navigation">
    <div class="container">
        <div class="ibreakcumb">
<a href="/">Trang Chủ</a> / <span>Tin tức</span></div>    </div>
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