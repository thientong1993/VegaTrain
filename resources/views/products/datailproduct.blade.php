@extends('home.index')
@section('content')

   <header id="header" style="background-image: url(asset/images/img-slider01.jpg);">
        <div class="content" id="head-slider">
            <h3><b>vega</b> </h3>
<!--            <p>Auctor platea a a ipsum nascetur mattis eu suspendisse a facilisis vestibulum adipiscing fermentum in a parturient vulputate hendrerit parturient phasel hendrerit lus volutpat.</p>-->
        </div>
        <canvas id="myCanvas01" width="2000" height="69"></canvas>
    </header>
<!-- / HEADER -->

<!-- CONTENT -->
<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 detail">
    <div class="title-section"><b><span style="color: #000">dịch vụ</span> Waka</b></div>
    <p>Waka - Nghe & Đọc sách online mọi lúc, mọi nơi</p>
    <div class="content">
        <p>Waka l&agrave; kho s&aacute;ch điện tử, truyện tranh, b&agrave;i viết tạp ch&iacute; phong ph&uacute; về thể loại, đa dạng về nội dung.</p>

<p>Kho s&aacute;ch của Waka li&ecirc;n tục được cập nhật, bổ sung bởi c&aacute;c nh&agrave; s&aacute;ch, nh&agrave; xuất bản, c&aacute;c t&aacute;c giả trong v&agrave; ngo&agrave;i nước với đầy đủ c&aacute;c thể loại như truyện ngắn, tiểu thuyết, s&aacute;ch kinh doanh, s&aacute;ch gi&aacute;o tr&igrave;nh v&agrave; c&aacute;c t&aacute;c phẩm kinh điển, c&aacute;c t&aacute;c phẩm &ldquo;best seller&rdquo; tr&ecirc;n thị trường.</p>

<p>Ứng dụng Waka tương th&iacute;ch với hầu hết c&aacute;c thiết bị đọc từ c&aacute;c tr&igrave;nh duyệt tr&ecirc;n m&aacute;y t&iacute;nh c&aacute; nh&acirc;n (PC, laptop) cho đến c&aacute;c hệ điều h&agrave;nh như iOS, Android, WindowPhone tr&ecirc;n&nbsp;điện thoại th&ocirc;ng minh (smartphone).</p>

<p>S&aacute;ch v&agrave; th&ocirc;ng tin đọc s&aacute;ch của người d&ugrave;ng được đồng bộ tự động tr&ecirc;n c&aacute;c thiết bị. Điều đ&oacute; c&oacute; nghĩa rằng bạn c&oacute; thể đọc cuốn s&aacute;ch bạn y&ecirc;u th&iacute;ch bất cứ nơi đ&acirc;u, bất cứ khi n&agrave;o v&agrave; tr&ecirc;n bất k&igrave; thiết bị n&agrave;o. Đặc biệt với khả năng đọc Offline, người d&ugrave;ng Waka c&oacute; thể đọc s&aacute;ch&nbsp;ngay&nbsp;cả khi kh&ocirc;ng c&oacute; internet.</p>

<p><strong>Đối với Độc giả:</strong></p>

<p>&nbsp; &nbsp; &bull; Đăng k&yacute; t&agrave;i khoản nhanh ch&oacute;ng, thuận tiện. Hỗ trợ đăng k&yacute; từ c&aacute;c t&agrave;i khoản Mạng x&atilde; hội như Facebook, Google+.</p>

<p>&nbsp; &nbsp; &bull; S&aacute;ch mới li&ecirc;n tục cập nhật li&ecirc;n tục từ c&aacute;c nh&agrave; xuất bản, nh&agrave; s&aacute;ch trong nước. C&aacute;c b&agrave;i viết tạp ch&iacute; được lựa chọn v&agrave; sưu tầm bởi đội ngũ bi&ecirc;n tập vi&ecirc;n gi&agrave;u kinh nghiệm</p>

<p>&nbsp; &nbsp; &bull; Đọc s&aacute;ch mọi l&uacute;c, mọi nơi, đồng bộ nội dung v&agrave; lịch sử đọc s&aacute;ch tr&ecirc;n đa m&agrave;n h&igrave;nh, đa thiết bị.</p>

<p>&nbsp; &nbsp; &bull; Với những đầu s&aacute;ch hot, thu ph&iacute;, thao t&aacute;c&nbsp;Thanh to&aacute;n dễ d&agrave;ng,&nbsp;hỗ trợ nhiều k&ecirc;nh thanh to&aacute;n như thẻ c&agrave;o, thẻ ATM, thẻ Vxu, thẻ quốc tế, v&iacute; điện tử. Lịch sử giao dịch r&otilde; r&agrave;ng.</p>

<p>&nbsp; &nbsp; &bull; Cơ hội được hưởng th&ecirc;m những quyền lợi cực ưu đ&atilde;i khi trở th&agrave;nh VIP Waka tại:&nbsp;<a href="https://waka.vn/vip" style="box-sizing: border-box; background-color: transparent; color: rgb(34, 34, 34); text-decoration-line: none; outline: none; cursor: pointer;">https://waka.vn/vip</a></p>

<p><strong>Đối với t&aacute;c giả, nh&agrave; s&aacute;ch, nh&agrave; ph&aacute;t h&agrave;nh:</strong></p>

<p>&nbsp; &nbsp; &bull; Tạo kho s&aacute;ch ri&ecirc;ng biệt, tạo thương hiệu ri&ecirc;ng</p>

<p>&nbsp; &nbsp; &bull; Tiếp cận h&agrave;ng triệu người đọc: Waka gi&uacute;p c&aacute;c t&aacute;c giả, nh&agrave; s&aacute;ch, nh&agrave; ph&aacute;t h&agrave;nh giới thiệu s&aacute;ch của m&igrave;nh tới hơn 3 triệu người đọc tr&ecirc;n dịch vụ. Ch&uacute;ng t&ocirc;i gi&uacute;p s&aacute;ch của bạn ng&agrave;y c&agrave;ng tiếp cận nhiều độc giả hơn nữa.</p>

<p>&nbsp; &nbsp; &bull; Bản quyền s&aacute;ch số được bảo vệ: Nội dung số được bảo vệ bằng c&ocirc;ng nghệ DRM, tr&aacute;nh sao ch&eacute;p, t&aacute;i sử dụng nội dung. Tất cả c&aacute;c trường hợp s&aacute;ch vi phạm bản quyền đều được xử l&yacute; nghi&ecirc;m ngặt.</p>

<p>&nbsp; &nbsp; &bull; Hỗ trợ c&aacute;c t&aacute;c giả, nh&agrave; s&aacute;ch, nh&agrave; xuất bản bảo vệ bản quyền&nbsp;với phương thức r&agrave; so&aacute;t v&agrave; khiếu nại vi phạm được thực hiện h&agrave;ng ng&agrave;y.</p>
    </div>
</div>            

<!-- include category product -->
@include('products.categoryproduct')


</section>
<section id="section-navigation">
    <div class="container">
        <div class="ibreakcumb">
<a href="/">Trang Chủ</a> / <span>SẢN PHẨM</span></div>    </div>
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