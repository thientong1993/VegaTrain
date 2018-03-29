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
    <div class="title-section" style="line-height: 40px;"><b> Sứ mệnh - Tầm nhìn</b></div>
    <div class="content">
        <h3><strong>Sứ mệnh của Vega</strong></h3>

        <p>- Đối với người ti&ecirc;u d&ugrave;ng: Mang dịch vụ c&oacute; gi&aacute; trị đến người d&ugrave;ng với chất lượng nội dung v&agrave; c&ocirc;ng nghệ vượt trội.</p>

        <p>- Đối với nh&acirc;n vi&ecirc;n: Mang đến m&ocirc;i trường l&agrave;m việc ho&agrave; hợp, s&aacute;ng tạo, c&ocirc;ng bằng v&agrave; t&ocirc;n trọng l&acirc;n nhau.</p>

        <p>- Đối với đối t&aacute;c: Hợp t&aacute;c c&ocirc;ng bằng, đ&ocirc;i b&ecirc;n c&ugrave;ng c&oacute; lợi.</p>

        <p>&nbsp;- Đối với x&atilde; hội: Chung tay chia sẻ c&ugrave;ng cộng đồng th&ocirc;ng qua c&aacute;c hoạt động x&atilde; hội.</p>

        <p>&nbsp;</p>

        <h3><strong>Tầm nh&igrave;n của Vega</strong></h3>

        <p>Vega hướng tới mục ti&ecirc;u trở th&agrave;nh doanh nghiệp vững mạnh v&agrave; ph&aacute;t triển bền vững. L&agrave; đơn vị ti&ecirc;n phong trong việc ứng dụng c&ocirc;ng nghệ cao, tạo ra c&aacute;c sản phẩm v&agrave; dịch vụ tốt nhất, mang lại lợi &iacute;ch tối đa cho kh&aacute;ch h&agrave;ng v&agrave; cộng đồng.</p>
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