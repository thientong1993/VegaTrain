@extends('home.index')
@section('content')
<header id="header">
    <div class="content home-slider" id="head-slider">
        <a href="https://www.youtube.com/channel/UCVuo3p14NKcb7ZOc40spQBg/feed" target="_blank">
            <div class="slider-content" style="background-image: url(http://static.vega.vn/adv/2.jpg?v=9&w=145&h=213);">
                <h3>VEGA CORPORATION</h3>
                <p>2003 - 2017</p>
            </div>
        </a>
        <a href="http://cliptv.vn/" target="_blank">
            <div class="slider-content" style="background-image: url(http://static.vega.vn/adv/38.jpg);">
                <h3></h3>
                <p></p>
            </div>
        </a>
        <a href="http://waka.vn/" target="_blank">
            <div class="slider-content" style="background-image: url(http://static.vega.vn/adv/39.jpg);">
                <h3></h3>
                <p></p>
            </div>
        </a>
        <a href="https://nhac.vn/" target="_blank">
            <div class="slider-content" style="background-image: url(http://static.vega.vn/adv/41.jpg);">
                <h3></h3>
                <p></p>
            </div>
        </a>
        <a href="https://www.vegacdn.vn/" target="_blank">
            <div class="slider-content" style="background-image: url(http://static.vega.vn/adv/44.jpg?v=2&w=145&h=213);">
                <h3></h3>
                <p></p>
            </div>
        </a>
    </div>
    <canvas id="myCanvas01" width="2000" height="69"></canvas>
</header>

<section id="section-aboutus">
    <div class="container">
        <div class="side2side hidden-sm hidden-xs">
            <div class="aboutus-img">
                <img src="images/img-vegabuilding.png" alt=""/>
            </div>
        </div>
        <div class="side2side">
            <div id="aboutus-content">
                <h4>VỀ CHÚNG TÔI</h4>
                <h3><span style="color: #111">VEGA</span> CORPORATION</h3>
                <div class="aboutus-img visible-sm-block visible-xs-block">
                    <img src="images/img-vegabuilding02.png" alt=""/>
                </div>
                <p>Vega Corporation được thành lập từ tháng 6/2003.<br>
                    Thời gian đầu hợp tác với các nhà mạng để triển khai các dịch vụ giá trị gia tăng trên các thiết bị số.</p>
                <p>Nhờ chiến lược rõ ràng cùng đội ngũ nhân viên đầy nhiệt huyết, Vega Corporation hiện đang là một trong những đơn vị phát triển các dịch vụ trực tuyến và trên di động thành công nhất tại Việt Nam với các dịch vụ như: Clip TV, Waka, Nhac.vn…
                    và là đối tác lớn của các nhà mạng. Vega cũng là nhà phát hành game uy tín với hơn 20 games hấp dẫn trên thị trường.</p>
                <p class="para-hightlight">Vega là đơn vị tiên phong trong việc ứng dụng công nghệ cao, tạo ra các sản phẩm và dịch vụ tốt nhất, mang lại lợi ích tối đa cho khách hàng và cộng đồng.</p>
                <p class="para-hightlight">Vega hướng tới mục tiêu trở thành công ty đứng đầu Việt Nam trong lĩnh vực kinh doanh dịch vụ nội dung số.</p>
                <div align="center"><a href="about" class="button-vega button">Tìm hiểu</a></div>
            </div>
        </div>
    </div>
</section>
<section id="section-product">
    <canvas id="myCanvas02" width="2000" height="69"></canvas>
    <div class="container">
        <div class="title-section">Sản phẩm & Dịch vụ</div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 product">
                <div class="icon">
                    <a  href="/vi/san-pham/vas" style="background: url(http://static.vega.vn/productcate/22.jpg) no-repeat;">VAS</a>
                </div>
                <h3><a  href="/vi/san-pham/vas">Các sản phẩm hợp tác với nhà mạng (VAS)</a></h3>
                <p>Vega là đối tác lớn của Viettel, Vinaphone, Mobifone, Metfone, Natcom, Unitel…trong việc triển khai các dịch vụ giá trị gia tăng trên các thiết bị số.</p>
            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 product">
                <div class="icon">
                    <a  href="/vi/san-pham/ott" style="background: url(http://static.vega.vn/productcate/23.jpg) no-repeat;">VAS</a>
                </div>
                <h3><a  href="/vi/san-pham/ott">Các sản phẩm OTT</a></h3>
                <p>Vega là công ty chủ quản của những website lớn như: Cliptv.vn, Nhac.vn, Waka.vn.</p>
            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 product">
                <div class="icon">
                    <a href="http://vegagame.vn/" target="_blank" href="/vi/san-pham/game" style="background: url(http://static.vega.vn/productcate/24.jpg) no-repeat;">VAS</a>
                </div>
                <h3><a href="http://vegagame.vn/" target="_blank" href="/vi/san-pham/game">Sản xuất & phát hành Game</a></h3>
                <p>Vega là nhà phát hành Game uy tín với hơn 20 games hấp dẫn trên thị trường.</p>
            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 product">
                <div class="icon">
                    <a  href="/vi/san-pham/cong-nghe" style="background: url(http://static.vega.vn/productcate/25.jpg) no-repeat;">VAS</a>
                </div>
                <h3><a  href="/vi/san-pham/cong-nghe">Giải pháp công nghệ</a></h3>
                <p>Nghiên cứu, đưa ra những giải pháp công nghệ như Streaming, Ebook, CDN, Business Intelligent...</p>
            </div>
        </div>
    </div>
</section><section id="section-newsandgal">
    <div class="container">
        <div class="row">
            <!--News-->
            <div class="col-lg-6 col-md-6 news">
                <div class="title-section"><b style="font-weight: 400;color: #111;">Nói về</b> vega<a href="/vi/tin-tuc" class="seemore">Xem thêm</a></div>
                    <ul>
                        <li>
                            <div class="thumb">
                                <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/phuong-phap-moi-giup-nguoi-Viet-thay-doi-thoi-quen-doc-sach">
                                    <img src="http://static.vega.vn/news/0/0/67/67.jpg?v=4&w=145&h=213" alt="[Dantri] Phương pháp mới giúp người Việt thay đổi thói quen đọc sách"/>
                                </a>
                            </div>
                            <div class="content">
                                <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/phuong-phap-moi-giup-nguoi-Viet-thay-doi-thoi-quen-doc-sach">[Dantri] Phương pháp mới giúp người Việt thay đổi thói quen đọc sách</a></h3>
                                <p>Phương pháp mới giúp người Việt thay đổi thói quen đọc sách</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/ebook-truyen-cam-hung">
                                    <img src="http://static.vega.vn/news/0/0/85/85.jpg?v=3&w=145&h=213" alt=" [KENH14] Không phải Facebook, Ebook mới là điều truyền cảm hứng nhất tới bạn trẻ Việt trong thời gian qua"/>
                                </a>
                            </div>
                            <div class="content">
                                <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/ebook-truyen-cam-hung"> [KENH14] Không phải Facebook, Ebook mới là điều truyền cảm hứng nhất tới bạn trẻ Việt trong thời gian qua</a></h3>
                                <p>Ebook là điều truyền cảm hứng nhất tới bạn trẻ Việt trong thời gian qua</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="/vi/tin-tuc/bao-chi-noi-ve-vega/Waka-ra-mat-audio-book">
                                    <img src="http://static.vega.vn/news/0/0/65/65.jpg?v=2&w=145&h=213" alt="[Vietnamnet] Thư viện sách điện tử lớn nhất Việt Nam lần đầu ra mắt sách nói"/>
                                </a>
                            </div>
                            <div class="content">
                                <h3><a href="/vi/tin-tuc/bao-chi-noi-ve-vega/Waka-ra-mat-audio-book">[Vietnamnet] Thư viện sách điện tử lớn nhất Việt Nam lần đầu ra mắt sách nói</a></h3>
                                <p>Waka cho ra mắt hàng ngàn cuốn Audio book</p>
                            </div>
                        </li>
                    </ul>
                </div>
            <!--Gallery-->
            <div class="col-lg-6 col-md-6 gallery">
                <div class="title-section"><b style="font-weight: 400;color: #111;">Văn hoá</b> vegiks<a href="/vi/tin-tuc/van-hoa-vegiks" class="seemore">Xem thêm</a></div>
                <div class="content">
                    <div style="width: 50%;height: 50%">
                        <a href="images/vg_summer_1.jpg" data-toggle="lightbox" data-title="Vegiks du lịch hè 2017 - HaLong Bay" data-gallery="example-gallery">
                            <img src="images/vg_summer_1.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div style="width: 50%;height: 50%">
                        <a href="images/vg_summer_2.jpg" data-toggle="lightbox" data-title="Vegiks du lịch hè 2017 - HaLong Park" data-gallery="example-gallery">
                            <img src="images/vg_summer_2.jpg" class="img-fluid">
                        </a>
                    </div>

                    <div style="width: 60%;height: 50%">
                        <a href="images/vg_summer_3.jpg" data-toggle="lightbox" data-title="Vegiks du lịch hè 2016 - FLC Sầm Sơn Resort" data-gallery="example-gallery">
                            <img src="images/vg_summer_3.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section id="section-contactus">
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
@endsection