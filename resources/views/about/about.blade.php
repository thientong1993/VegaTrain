@extends('home.index')
@section('content')

<header id="header" style="background-image: url(http://static.vega.vn/adv/23.jpg);">
        <div class="content" id="head-slider">
            <h3> </h3>
        </div>
        <canvas id="myCanvas01" width="2000" height="69"></canvas>
    </header>

<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 detail">
    <div class="title-section" style="line-height: 40px;"><b> Giới thiệu chung</b></div>
    <div class="content">
        <p>Vega Corporation được th&agrave;nh lập từ th&aacute;ng 6/2003, thời gian đầu hợp t&aacute;c với c&aacute;c nh&agrave; mạng để triển khai c&aacute;c dịch vụ gi&aacute; trị gia tăng tr&ecirc;n c&aacute;c thiết bị số.&nbsp;Vega l&agrave; một trong trong c&aacute;c đối t&aacute;c lớn của c&aacute;c nh&agrave; mạng trong v&agrave; ngo&agrave;i nước (Viettel, Vinaphone, Mobifone, Metfone,&nbsp;Natcom, Unitel&hellip;).</p>

<p>&nbsp;</p>

<p>Trải qua nhiều năm ph&aacute;t triển v&agrave; trưởng th&agrave;nh, với đội ngũ nh&acirc;n vi&ecirc;n t&agrave;i năng v&agrave; nhiệt huyết c&ugrave;ng sứ mệnh ti&ecirc;n phong trong ứng dụng c&ocirc;ng nghệ cao, tạo ra c&aacute;c sản phẩm v&agrave; dịch vụ tốt nhất mang lại lợi &iacute;ch tối đa cho&nbsp;cộng đồng, c&ugrave;ng với sự tin tưởng ng&agrave;y c&agrave;ng tăng của kh&aacute;ch h&agrave;ng, Vega hiện đang&nbsp;trở th&agrave;nh một trong những c&ocirc;ng ty kinh doanh dịch vụ trực tuyến v&agrave; dịch vụ tr&ecirc;n di động trong c&aacute;c mảng video, nhạc, s&aacute;ch.....&nbsp;th&agrave;nh c&ocirc;ng nhất tại Việt Nam.&nbsp;Vega cũng l&agrave; nh&agrave; ph&aacute;t h&agrave;nh game uy t&iacute;n với hơn 20 games hấp dẫn tr&ecirc;n thị trường. Ngo&agrave;i ra, Vega c&ograve;n lu&ocirc;n kh&ocirc;ng ngừng nghi&ecirc;n cứu, đưa ra những giải ph&aacute;p c&ocirc;ng nghệ như Streaming, Ebook, CDN, Business Intelligent...</p>

<p>&nbsp;</p>

<p>Vega Corp&nbsp;l&agrave; c&ocirc;ng ty chủ quản của những website lớn: Cliptv.vn, Nhac.vn, Waka.vn...</p>

<p>&nbsp;</p>

<p>Vega lu&ocirc;n đề cao sự s&aacute;ng tạo, sự đam m&ecirc; v&agrave; nhiệt huyết của mỗi nh&acirc;n vi&ecirc;n trong c&ocirc;ng việc. Ch&uacute;ng t&ocirc;i ch&uacute; trọng tới gi&aacute; trị cốt l&otilde;i của mỗi c&aacute; nh&acirc;n, lu&ocirc;n tạo m&ocirc;i trường tốt nhất để mỗi nh&acirc;n vi&ecirc;n được thử th&aacute;ch bản th&acirc;n v&agrave; kh&aacute;m ph&aacute; những tiềm năng b&ecirc;n trong con người m&igrave;nh.&nbsp;</p>
    </div>
</div>            

<!-- include file category -->
@include('about.categoryabout')

</section>
<section id="section-navigation">
    <div class="container">
        <div class="ibreakcumb">
<a href="/">Trang Chủ</a> / <span>Giới thiệu</span></div>    </div>
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