<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Basic Page Needs -->
    <title>Luxe Hotel</title>
    <!--<meta name="robots" content="index, follow">-->
    <meta name="keywords">
    <meta name="description" content="Luxe Hotel">
    <meta name="robots" content="noindex">
    <link rel="icon" href="favicon.ico">

    <!--Link css page index-->
    <link href="frontend/content/Css/main.css" rel="stylesheet" />
    <link href="frontend/content/Css/responsive.css" rel="stylesheet" />
    <link href="frontend/content/Css/room.css" rel="stylesheet" />
   <link rel="stylesheet" href="frontend/files/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!-- Favicons -->
    <!-- Vendor CSS files cdn -->
    <link rel="stylesheet" href="frontend/files/plugins/bootstrap-4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/files/fonts/fontawesome-pro-5.15.2/css/all.min.css">

    <!-- Plugin css local-->
   <link rel="stylesheet" href="frontend/files/cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    <link rel="stylesheet" href="frontend/files/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/files/plugins/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontend/files/plugins/slick/slick.css">
    <link rel="stylesheet" href="frontend/files/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="frontend/files/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="frontend/files/plugins/menu.css">
</head>

<body>

@include('layout.header')

@include('layout.slider')

<section class="main">
    <div class="main_space"></div>
    <div class="main_hotel">
        <div class="container hotel_container">
            <div class="row hotel_row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_img">
                        
                        <img src="frontend/files/images/ab.jpg" alt="No picture">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotel_col">
                    <div class="hotel_text">
                        <div class="text_name">
                            <h3>
                                Ch&#224;o mừng đến với Luxe Hotel
                            </h3>
                            <div class="text">
                                <div style="text-align:justify">Luxe Hotel&nbsp;với c&aacute;c ph&ograve;ng biệt thự v&agrave; bungalow được trang bị đầy đủ tiện nghi, kh&ocirc;ng gian b&ecirc;n trong được b&agrave;i tr&iacute; theo phong c&aacute;ch sang trọng pha trộn những n&eacute;t truyền thống của người Việt v&agrave; những n&eacute;t hiện đại của phương T&acirc;y. Ch&uacute;ng t&ocirc;i c&oacute; đội ngũ nh&acirc;n vi&ecirc;n được đ&agrave;o tạo b&agrave;i bản, chuy&ecirc;n nghiệp v&agrave; t&aacute;c phong chuy&ecirc;n nghiệp, phục vụ tận t&igrave;nh.<br />
Luxe Hotel tự tin mang đến cho bạn sự thăng hoa về cảm x&uacute;c, những trải nghiệm tốt nhất, tuyệt vời nhất trong kỳ nghỉ dưỡng của bạn. H&atilde;y đến với ch&uacute;ng t&ocirc;i, ch&uacute;ng t&ocirc;i đảm bảo rằng bạn sẽ kh&ocirc;ng hối tiếc.</div>

                            </div>
                            <br />
                            <b>
                                <i></i>
                            </b>
                            

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_space-end"></div>
    <div class="main_space"></div>
    <div class="main_lodging">
        <div class="container lodging_container">
            <div class="lodging_title">
                <span>Khám phá</span>
                <h2 class="title" style="color:#111111;">Các hạng phòng</h2>
            </div>
        </div>
        <div class="main_space-mg30"></div>
        <div class="carousel_lod">
            <div class="container car_container">
                <div class="carousel_lod--list owl-carousel">
                        <div class="item">
                            <div class="col-lg-12 col-md-12">
                                <a href="phong-nghi/12/phong-triple.html">
                                    <div class="item_content">
                                        <div class="item_img">
                                            <img src="frontend/files/images/room/Triple-Room-with-Balcony/Triple-Room-with-Balcony.jpg" alt="phong-triple">
                                        </div>
                                        <div class="item_text">
                                            <h3>Ph&#242;ng Triple</h3>
                                            <div class="item_text-price">
                                                Chỉ từ 1.500.000 VNĐ/Đêm
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12">
                                <a href="phong-nghi/13/phong-senior.html">
                                    <div class="item_content">
                                        <div class="item_img">
                                            <img src="frontend/files/images/room/Senior-Deluxe-Room/Bedroom-Boos-Apartmen3t.jpg" alt="phong-senior">
                                        </div>
                                        <div class="item_text">
                                            <h3>Ph&#242;ng Senior</h3>
                                            <div class="item_text-price">
                                                Chỉ từ 1.100.000 VNĐ/Đêm
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12">
                                <a href="phong-nghi/1013/phong-connecting.html">
                                    <div class="item_content">
                                        <div class="item_img">
                                            <img src="frontend/files/images/room/Senior-Deluxe-Room/Bedroom-Apartment-4.jpg" alt="phong-connecting">
                                        </div>
                                        <div class="item_text">
                                            <h3>Ph&#242;ng Connecting</h3>
                                            <div class="item_text-price">
                                                Chỉ từ 1.650.000 VNĐ/Đêm
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-12">
                                <a href="phong-nghi/2014/phong-deluxe.html">
                                    <div class="item_content">
                                        <div class="item_img">
                                            <img src="frontend/files/images/room/deluxe/Deluxe-Room-1.jpg" alt="phong-deluxe">
                                        </div>
                                        <div class="item_text">
                                            <h3>Ph&#242;ng Deluxe</h3>
                                            <div class="item_text-price">
                                                Chỉ từ 900.000 VNĐ/Đêm
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <!--End lodging-->
    <div class="carousel_two">
        <div class="carousel_two-n owl-carousel owl-theme">

                <div class="item" style="background-image: url(frontend/files/images/dv/spa/10.jpg);height: 600px;background-repeat: no-repeat;background-size: cover;">
                    <div class="col-lg-6 col-md-6 car-t-overlay"></div>
                    <div class="item_context">
                        <div class="container car-t-container">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title">
                                    Spa như chưa từng c&#243; trước đ&#226;y
                                </h3>
                                <div class="text">
                                    <p>Ngay từ khi bạn bước v&agrave;o, mọi cảm gi&aacute;c đều mời bạn thư gi&atilde;n. H&atilde;y tham gia một cuộc h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; v&agrave; kết nối lại t&acirc;m tr&iacute;, cơ thể v&agrave; tinh thần - được hướng dẫn bởi c&aacute;c nh&agrave; trị liệu Aman gi&agrave;u kinh nghiệm của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i mong được ch&agrave;o đ&oacute;n bạn.</p>
                                </div>
                                <div class="button_booknow">
                                    <a href="lien-he1.html">
                                        <button>Li&#234;n hệ</button>
                                    </a>
                                </div>
                                <div class="nav-slide">
                                    <div class="nav-prev">
                                        <i class="fal fa-angle-left"></i>
                                    </div>
                                    <div class="nav-next">
                                        <i class="fal fa-angle-right"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(frontend/files/images/dv/trai-nghiem-do-thi-tinh-te/claudio-guglieri-194323-unsplash-1.jpg);height: 600px;background-repeat: no-repeat;background-size: cover;">
                    <div class="col-lg-6 col-md-6 car-t-overlay"></div>
                    <div class="item_context">
                        <div class="container car-t-container">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title">
                                    Trải nghiệm đ&#244; thị tinh tế
                                </h3>
                                <div class="text">
                                    <p>Ngay từ khi bạn bước v&agrave;o, mọi cảm gi&aacute;c đều mời bạn thư gi&atilde;n. H&atilde;y tham gia một cuộc h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; v&agrave; kết nối lại t&acirc;m tr&iacute;, cơ thể v&agrave; tinh thần - được hướng dẫn bởi c&aacute;c nh&agrave; trị liệu Aman gi&agrave;u kinh nghiệm của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i mong được ch&agrave;o đ&oacute;n bạn.</p>
                                </div>
                                <div class="button_booknow">
                                    <a href="lien-he1.html">
                                        <button>Li&#234;n hệ</button>
                                    </a>
                                </div>
                                <div class="nav-slide">
                                    <div class="nav-prev">
                                        <i class="fal fa-angle-left"></i>
                                    </div>
                                    <div class="nav-next">
                                        <i class="fal fa-angle-right"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="main_space-end" style="border-bottom: none;"></div>
    <!--End experience-->
    <div class="main_vacation">
        <div class="container vacation_container">
            <div class="vacation_title">
                
                <h2 class="title" style="color:#111111;margin:0 0 30px 0">Dịch vụ</h2>
            </div>
            <div class="row vacation_row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/Nhu-cau-su-dung-xe-don-nguoi-ra-san-bay-tang-cao.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Đưa đ&#243;n s&#226;n bay
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/bua-sang-1.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Bữa s&#225;ng miễn ph&#237;
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/tim-hieu-thu-nhap-cua-huong-dan-vien-du-lich-quoc-te-03.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Hướng dẫn vi&#234;n du lịch th&#224;nh phố
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="vacation_content">
                                <div class="vacation_img">
                                    <img src="frontend/files/images/dv/Corallo-FIRE-set-up-e1554377061139.jpg" alt="No picture">
                                </div>
                                <div class="vacation_overlay"></div>
                                <div class="vacation_icon">
                                    
                                    <div class="icon_title">
                                        Tiệc BBQ b&#227;i biển
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <div class="main_youtube" style="background-image: url(frontend/files/files/background.jpg);background-repeat: no-repeat;background-size: cover;height: 600px;">
        <div class="youtube_overlay">
            <div class="youtube_text">
                <div class="youtube_icon">
                    <a href="https://youtu.be/CMC8jaUjVQk" data-fancybox=""><i class="fab fa-youtube"></i></a>
                </div>
                <div class="youtube_subtitle">Khám phá. Đi lang thang. Nghỉ ngơi</div>
                <h3 class="youtube_title">
                    Một cuộc đi chơi bạn sẽ <br>đặc biệt nhớ tới
                </h3>
            </div>
        </div>
    </div>
    <!--End youtube-->
    <div class="main_space"></div>
    <div class="team_orthers">
        <div class="container team_container">
            <div class="team_text">
                <span class="subtitle"></span>
                <h2 class="title" style="color:#111111;margin: 0 0 30px 0;font-weight: 400;">Phản hồi kh&#225;ch h&#224;ng</h2>
            </div>
            <div class="row team_row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/mike-fleetwood.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Robert Downey Jr</div>
                            <div class="orther_item-text">
                                <p>
                                    Tôi rất thích buổi sáng đi dạo trong khuân viên của khách sạn, không khí rất trong lành và có rất nhiều loài hoa đẹp mà tôi chưa từng được thấy.
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/tripadvisor.png" alt="No picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/joanna-roberts.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Jenni</div>
                            <div class="orther_item-text">
                                <p>
                                    "Chỗ ở rất thoải mái, rộng rãi và đặc biệt là rất thoáng mát và không khí rất trong lành. Tôi rất ưng ý với những món ăn được phục vụ tại khách sạn. Tôi nhất định sẽ quay trở lại đây trong tương lai gần."
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/booking.png" alt="No picture">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="orthers_item">
                            <div class="orther_item-img">
                                <img src="frontend/files/files/alex-johnson.jpg" alt="No picture">
                            </div>
                            <div class="orther_item-name">Hostal Miralva</div>
                            <div class="orther_item-text">
                                <p>
                                    "Chất lương các dịch vụ của khách sạn rất tốt, tôi và gia đình của tôi đã có những trải nghiệm vô cùng tuyệt vời nơi đây."
                                </p>
                            </div>
                            <div class="orther_item-logo">
                                <img src="frontend/files/files/booking.png" alt="No picture">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <!--End team orther-->
    <div class="main_offer" style="background-image: url(frontend/files/images/hotel/5f8b5279e24f16114f5e.jpg);background-repeat: no-repeat;background-size: cover;height: 600px;">
        <div class="youtube_overlay">
            <div class="youtube_text">
                <form action="https://luxehotel.webhotel.vn/lien-he" method="get">
                    <input type="hidden" name="ID" value="21" />
                    <div class="youtube_subtitle">Chỉ c&#243; trong th&#225;ng 3</div>
                    <h3 class="youtube_title">
                       Giảm 20% <br>Giảm gi&#225; ưu đ&#227;i th&#225;ng 3
                    </h3>
                    <div class="button_getnow">
                        <a href="javascript:void(0)"><button>Đăng ký ngay</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main_space"></div>
    <!--End offer-->
    <div class="main_news">
        <div class="container news_container">
            <div class="news_text">
                <span class="subtitle">Bài viết</span>
                <h2 class="title" style="color:#111111;margin: 0 0 30px 0;font-weight: 400;">Những bài viết nổi bật</h2>
            </div>
            <div class="news_list">
                <div class="row news_list-row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                        <img src="frontend/files/images/news/Cho_tinh_Sapa_3.jpg" alt="cho-tinh-sapa">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">
                                            Chợ t&#236;nh Sapa
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Chợ t&igrave;nh Sapa được tổ chức tại thị trấn Sapa, đ&acirc;y l&agrave; phi&ecirc;n chợ của d&acirc;n tộc Dao được tổ chức v&agrave;o tối thứ 7 h&agrave;ng tuần.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4150/cho-tinh-sapa.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4142/nui-fansipan.html">
                                        <img src="frontend/files/images/news/Fansipan-Mountain.jpg" alt="nui-fansipan">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4142/nui-fansipan.html">
                                            N&#250;i Fansipan
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        ​Đỉnh Phanxipăng - với độ cao 3.143m so với mực nước biển, nằm về ph&iacute;a T&acirc;y Nam thị trấn Sa Pa, huyện Sa Pa.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4142/nui-fansipan.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">
                                        <img src="frontend/files/images/news/thac-tinh-yeu-sapa.jpg" alt="​thac-tinh-yeu">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">
                                            ​Th&#225;c T&#236;nh Y&#234;u
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        ​Th&aacute;c T&igrave;nh Y&ecirc;u l&agrave; một ngọn th&aacute;c nổi tiếng nằm ở x&atilde; San Sả Hồ, c&aacute;ch trung t&acirc;m thị trấn Sa Pa 16 km.&nbsp;
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4140/%e2%80%8bthac-tinh-yeu.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/4138/nui-ham-rong.html">
                                        <img src="frontend/files/images/news/1463025766_nui-ham-rong-1.jpg" alt="nui-ham-rong">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/4138/nui-ham-rong.html">
                                            N&#250;i H&#224;m Rồng
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        N&uacute;i H&agrave;m Rồng ở Thanh H&oacute;a nằm trong quần thể di t&iacute;ch H&agrave;m Rồng bao gồm: Cầu H&agrave;m Rồng, n&uacute;i H&agrave;m Rồng v&agrave; Thiền viện Tr&uacute;c L&acirc;m H&agrave;m Rồng.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/4138/nui-ham-rong.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">
                                        <img src="frontend/files/images/news/kham-pha-ban-lao-chai-ta-van-khi-di-du-lich-sapa-3.jpg" alt="ban-lao-chai-ta-van">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">
                                            Bản Lao Chải &amp; Tả Van
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Nhờ vẻ đẹp h&ugrave;ng vĩ của ruộng bậc thang, n&uacute;i non cũng như th&aacute;c nước, Lao Chải v&agrave; Tả Van đ&atilde; trở th&agrave;nh địa điểm l&yacute; tưởng cho c&aacute;c hoạt động ngo&agrave;i trời.
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/3137/ban-lao-chai-ta-van.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="news_list-item">
                                <div class="news_item-img">
                                    <a href="tin-tucs/3101/ban-cat-cat.html">
                                        <img src="frontend/files/images/news/cac-diem-du-lich-sapa.jpg" alt="ban-cat-cat">
                                    </a>
                                </div>
                                <div class="news_item-text">
                                    <div class="news_item-title">
                                        <a href="tin-tucs/3101/ban-cat-cat.html">
                                            Bản C&#225;t C&#225;t
                                        </a>
                                    </div>
                                    
                                    <div class="news_item-content">
                                        Thi&ecirc;n đường m&acirc;y Sapa - niềm tự h&agrave;o của v&ugrave;ng n&uacute;i T&acirc;y Bắc đ&atilde; kh&ocirc;ng c&ograve;n xa lạ với du kh&aacute;ch trong v&agrave; ngo&agrave;i nước.&nbsp;
                                    </div>
                                    <div class="read_more">
                                        <a href="tin-tucs/3101/ban-cat-cat.html">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="text-center"><a href="tin-tucs.html">B&#224;i viết li&#234;n quan</a></div>
        </div>
    </div>
    <!--End main_news-->
    <div class="main_gallery">
        <div class="container">
            <h2 class="text-center">H&#236;nh ảnh</h2>
            <div class="gallery-grid gallery-home">
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/room/deluxe/Deluxe-Room-1.jpg" data-fancybox="gallery"><img src="frontend/files/images/room/deluxe/Deluxe-Room-1.jpg" alt="No picture"></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/room/deluxe/Deluxe-Room-2.jpg" data-fancybox="gallery"><img src="frontend/files/images/room/deluxe/Deluxe-Room-2.jpg" alt="No picture"></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/dv/san-bay/Doan-ket-cung-cap-nhieu-loai-xe-phuc-vu-nhu-cau-dua-don-san-bay.jpg" data-fancybox="gallery"><img src="frontend/files/images/dv/san-bay/Doan-ket-cung-cap-nhieu-loai-xe-phuc-vu-nhu-cau-dua-don-san-bay.jpg" alt="No picture"></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/room/deluxe/Deluxe-Room-3.jpg" data-fancybox="gallery"><img src="frontend/files/images/room/deluxe/Deluxe-Room-3.jpg" alt="No picture"></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/room/deluxe/Deluxe-Room-4.jpg" data-fancybox="gallery"><img src="frontend/files/images/room/deluxe/Deluxe-Room-4.jpg" alt="No picture"></a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery_img">
                            <a href="frontend/files/images/room/deluxe/Deluxe-Room-5.jpg" data-fancybox="gallery"><img src="frontend/files/images/room/deluxe/Deluxe-Room-5.jpg" alt="No picture"></a>
                        </div>
                    </div>
            </div>
            <div class="text-center gallery-btn"><a href="gallery.html" class="btn-more">Xem th&#234;m</a></div>
        </div>
    </div>
</section>


    <section class="footer">
        <div class="main_footer">
            <div class="container footer_container">
                <div class="row footer_row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer_logo" style="margin: 0 0 15px 0;">
                            <img src="frontend/files/images/logo-dark.png" alt="No picture">
                        </div>
                        <div class="footer_info" style="font-size: 13px">
                            <p>http://luxehotel.webhotel.vn/</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">Liên hệ</h3>
                        <div class="footer_contact">
                            <ul class="contact_address">
                                <li class="contact_address-item">
                                    <i class="fas fa-map-marker-alt"></i> Số 147 Mai Dịch, Cầu Giấy, H&#224; Nội
                                </li>
                                <li class="contact_address-item">
                                    <a href="#">
                                        <i class="fas fa-phone-alt"></i> 0242 242 0777
                                    </a>
                                </li>
                                <li class="contact_address-item">
                                    <a href="#">
                                        <i class="far fa-envelope"></i> info@webhotel.vn
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">Đường dẫn</h3>
                        <div class="footer_quick">
                            <ul class="quick_list">
                                    <li class="quick_list-item">
                                        <a href="lien-he.html">Li&#234;n hệ</a>
                                    </li>
                                    <li class="quick_list-item">
                                        <a href="ve-chung-toi.html">Về ch&#250;ng t&#244;i</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <h3 style="color:#ffffff">ĐỪNG BỎ LỠ BẤT KỲ BẢN CẬP NHẬT NÀO</h3>
                        <div class="input_email">
                            <input type="text" placeholder="Email">
                            <i class="far fa-envelope"></i>
                        </div>
                        <a href="#">
                            <button class="button_signUp">Đăng ký ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <span>
                    Copyright &#169;Luxe Hotel 2022 All Rights Reserved
                </span>
            </div>
        </div>
    </section>

    <!-- Vendor JS files -->


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="frontend/files/connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="Dp8TmuKp"></script>
    <script src="frontend/content/Js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript " src="frontend/files/cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="frontend/files/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="frontend/plugins/bootstrap-4.5.2/js/bootstrap.min.js"></script>
    <script src="frontend/plugins/owlcarousel/owl.carousel.min.js"></script>
    

    <script src="frontend/files/cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="frontend/plugins/daterangepicker/daterangepicker.js"></script>
    
    <script src="frontend/content/Js/main.js"></script>
    
    <script type="text/javascript">
        const navbarMenu = document.getElementById("navbar");
const burgerMenu = document.getElementById("burger");
const overlayMenu = document.querySelector(".overlay");

// Show and Hide Navbar Function
const toggleMenu = () => {
   navbarMenu.classList.toggle("active");
   overlayMenu.classList.toggle("active");
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
   navbarMenu
      .querySelector(".menu-dropdown.active .submenu")
      .removeAttribute("style");
   navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
   if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
      e.preventDefault();
      const menuDropdown = e.target.parentElement;

      // If Dropdown is Expanded, then Collapse It
      if (menuDropdown.classList.contains("active")) {
         collapseSubMenu();
      } else {
         // Collapse Existing Expanded Dropdown
         if (navbarMenu.querySelector(".menu-dropdown.active")) {
            collapseSubMenu();
         }

         // Expanded the New Dropdown
         menuDropdown.classList.add("active");
         const subMenu = menuDropdown.querySelector(".submenu");
         subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
   }
};

// Fixed Resize Window Function
const resizeWindow = () => {
   if (window.innerWidth > 992) {
      if (navbarMenu.classList.contains("active")) {
         toggleMenu();
      }
      if (navbarMenu.querySelector(".menu-dropdown.active")) {
         collapseSubMenu();
      }
   }
};

// Initialize Event Listeners
burgerMenu.addEventListener("click", toggleMenu);
overlayMenu.addEventListener("click", toggleMenu);
navbarMenu.addEventListener("click", toggleSubMenu);
window.addEventListener("resize", resizeWindow);

    </script>
    
</body>


<!-- Mirrored from luxehotel.webhotel.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 07:29:41 GMT -->
</html>
