<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dịch vụ bảo trì</title>

    <!-- Boxicons for icons -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    @vite([
    'resources/css/BaoTri.css',
    'resources/css/ThanhSidebar.css',
    'resources/css/PhanFooter.css',
    'resources/js/ThongTinMoi01.js',
    'resources/js/ThanhSidebar.js',
    'resources/js/TruyCapAnh.js',
    ])

</head>

<body>

    <!-- Nút Menu -->
    <div class="menu-container">
        <div id="menu-icon" class="menu-icon">&#9776;</div> <!-- Biểu tượng Menu -->
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- Logo ở đầu sidebar -->
        <a href="{{ route('home') }}" class="sidebar-logo">
            <img data-icon="LogoGarage" alt="Logo" />
        </a>

        <!-- Icon tìm kiếm ở cuối sidebar -->
        <div class="sidebar-search">
            <a href="{{ route('tintucsearch') }}">
                <i class="fa fa-search"></i> <!-- Icon tìm kiếm -->
            </a>
        </div>
    </div>

    <!-- Overlay -->
    <div id="page-overlay" class="page-overlay">
        <ul class="menu-items">
            <li><a href="{{ route('home') }}" class="active">Trang Chủ</a></li>
            <li><a href="{{ route('gioithieu') }}">Giới Thiệu</a></li>

            <li class="has-submenu">
                <a href="{{ route('baotri') }}" class="expandable">Dịch vụ</a>
                <ul class="submenu">
                    <li><a href="{{ route('gioithieu') }}">Bảo trì</a></li>
                    <li><a href="{{ route('gammay') }}">Gầm máy</a></li>
                    <li><a href="{{ route('phuchoi') }}">Phục hồi</a></li>
                </ul>
            </li>

            <li><a href="{{ route('tintuc') }}">Tin Tức</a></li>

            <li><a href="{{ route('lienhe') }}">Liên Hệ</a></li>
        </ul>
    </div>

    <!-- Phần tiêu đề chính (Hero Section) -->
    <section class="hero">
        <div class="hero-content">
            <h2>QUY TRÌNH BẢO DƯỠNG Ô TÔ CHUYÊN NGHIỆP TẠI HÀ NỘI</h2>
            <p><a href="{{ route('home') }}">Trang chủ</a> / QUY TRÌNH BẢO DƯỠNG Ô TÔ CHUYÊN NGHIỆP TẠI HÀ NỘI</p>
        </div>
    </section>

    <!-- Dịch vụ -->
    <div class="services-section">
        <div class="service-wrapper">
            <div class="service-item">
                <img data-image="01" alt="Dịch vụ đồng sơn">
                <p>Dịch vụ đồng sơn</p>
            </div>
            <div class="service-item">
                <img data-image="02" alt="Dịch vụ gầm máy">
                <p>Dịch vụ gầm máy</p>
            </div>
            <div class="service-item">
                <img data-image="03" alt="Bảo trì, bảo dưỡng xe">
                <p>Bảo trì, bảo dưỡng xe</p>
            </div>
        </div>
    </div>

    <!-- Phần Quy trình bảo dưỡng động cơ ô tô  -->
    <section class="engine-maintenance">
        <div class="container">
            <div class="engine-title">
                <h2>QUY TRÌNH BẢO DƯỠNG Ô TÔ CHUYÊN NGHIỆP TẠI HÀ NỘI</h2>
            </div>
            <div class="engine-content">
                <div class="engine-image">
                    <img data-image="01" alt="QUY TRÌNH BẢO DƯỠNG Ô TÔ CHUYÊN NGHIỆP TẠI HÀ NỘI">
                </div>
                <div class="engine-description">
                    <p>Hệ thống gầm máy là bộ phận quan trọng nhất của tất cả các loại ôtô, động cơ được ví như trái tim của xe, mỗi km vận hành tất cả các tác động trên cung đường đó đều ảnh hưởng trực tiếp lên hệ thống gầm máy của xe, để duy trì cổ máy khỏe mạnh và khung gầm vận hành êm ái các bạn phải thường xuyên kiểm tra, sửa chữa những hỏng hóc bằng các thiết bị chuyên dụng, hiện đại và được những bàn tay và khối óc của những kỹ sư lành nghề, giàu kinh nghiệm và tinh thần trách nhiệm cao, với Garage Quang Đức sẽ đáp ứng tất cả những điều đó.</p>
                    <p>Trong lĩnh vực sửa chữa chung về máy, gầm, Garage Quang Đức luôn chứng tỏ là một trong những đơn vị đi đầu về uy tín cũng như chất lượng dịch vụ sửa chữa. Với đội ngũ Kỹ sư giàu kinh nghiệm, các Kỹ thuật viên 100% đều tốt nghiệp các khóa đào tạo từ các hãng xe, các trường đào tạo kỹ thuật hàng đầu tại Việt Nam thêm với đội ngũ nhân sự chất lượng cao với bằng cấp chứng chỉ quốc tế của các hãng xe được chúng tôi tuyển dụng, đặc biệt là những thiết bị chuẩn đoán, sửa chữa với công nghệ cao, được nhập khẩu trực tiếp từ Châu Âu. Quý khách hàng hoàn toàn yên tâm khi mang chiếc xe của mình vào Quang Đức Garage làm bảo dưỡng, sửa chữa.</p>
                    <p>Để được hỗ trợ một cách tốt nhất, Quý khách hãy liên hệ ngay qua số hotline <strong>096 2677726</strong> hoặc điền thông tin vào form đăng ký lịch chăm sóc xe, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần Thông tin Liên hệ và Ưu đãi -->
    <section class="contact-promotion">
        <div class="promotion-text">
            <p>- Đặt lịch ngay để được hưởng ưu đãi giảm giá lên tới 10%</p>
            <p>- Gọi ngay số hotline và để lại SĐT để nhận tư vấn miễn phí</p>
            <p>------------------------------</p>
            <p><span class="phone-icon">📞</span> Hotline: <strong> 0962 677726 </strong></p>
            <p>- Địa chỉ: 1075 Giải Phóng, Giáp Bát, Hoàng Mai, Hà Nội.</p>
            <p>TRUNG TÂM SỬA CHỮA Ô TÔ AHK - DỊCH VỤ CHUYÊN NGHIỆP - PHỤC VỤ TẬN TÌNH</p>
        </div>
    </section>

    <!-- Phần Các dịch vụ bảo dưỡng -->
    <section class="service-maintenance">
        <div class="container">
            <div class="section-title">
                <h2>Các dịch vụ bảo dưỡng</h2>
            </div>
            <div class="service-items">
                <div class="service-item">
                    <a href="#" class="service-link">
                        <div class="service-image">
                            <img data-image="01" alt="Xe ô tô mất phanh và cách xử lý">
                        </div>
                        <p>XE Ô TÔ MẤT PHANH VÀ CÁCH XỬ LÝ</p>
                    </a>
                </div>
                <div class="service-item">
                    <a href="#" class="service-link">
                        <div class="service-image">
                            <img data-image="02" alt="Bảng giá các cấp độ bảo dưỡng của Trung Tâm ô tô Quang Đức">
                        </div>
                        <p>Bảng giá các cấp độ bảo dưỡng của Trung Tâm ô tô Quang Đức</p>
                    </a>
                </div>
                <div class="service-item">
                    <a href="#" class="service-link">
                        <div class="service-image">
                            <img data-image="03" alt="Các dịch vụ bảo trì, bảo dưỡng xe Quang Đức cung cấp">
                        </div>
                        <p>Các dịch vụ bảo trì, bảo dưỡng xe Quang Đức cung cấp</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần Các thông tin mới nhất -->
    <section class="latest-news">
        <div class="container">
            <div class="section-title">
                <h2>Các thông tin mới nhất của Trung Tâm Ô tô Quang Đức</h2>
            </div>
            <div class="news-carousel">
                <a href="#" class="news-item">
                    <div class="news-image">
                        <img data-image="01" alt="AUDI Q7 Phục hồi sửa chữa">
                    </div>
                    <div class="news-description">
                        <h3>AUDI Q7 PHỤC HỒI SỬA CHỮA</h3>
                        <p>Việc phục hồi xe sau tai nạn là một quá trình quan trọng để đảm bảo an toàn...</p>
                    </div>
                </a>
                <a href="#" class="news-item">
                    <div class="news-image">
                        <img data-image="02" alt="Phục hồi Mazda CX5">
                    </div>
                    <div class="news-description">
                        <h3>PHỤC HỒI MAZDA CX5</h3>
                        <p>Việc phục hồi xe sau tai nạn là một quá trình quan trọng để đảm bảo an toàn...</p>
                    </div>
                </a>
                <a href="#" class="news-item">
                    <div class="news-image">
                        <img data-image="03" alt="Thay đèn xe Mercedes">
                    </div>
                    <div class="news-description">
                        <h3>THAY ĐÈN XE MERCEDES</h3>
                        <p>Việc phục hồi xe sau tai nạn là một quá trình quan trọng để đảm bảo an toàn...</p>
                    </div>
                </a>
                <a href="#" class="news-item">
                    <div class="news-image">
                        <img data-image="04" alt="Phục hồi xe tai nạn">
                    </div>
                    <div class="news-description">
                        <h3>PHỤC HỒI XE TAI NẠN</h3>
                        <p>Việc phục hồi xe tai nạn là một quá trình quan trọng để đảm bảo an toàn...</p>
                    </div>
                </a>
                <a href="#" class="news-item">
                    <div class="news-image">
                        <img data-image="05" alt="Phục hồi xe">
                    </div>
                    <div class="news-description">
                        <h3>PHỤC HỒI XE</h3>
                        <p>Việc phục hồi xe tai nạn là một quá trình quan trọng để đảm bảo an toàn...</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Phần Quy trình làm việc cực kỳ nhanh chóng -->
    <section class="work-process">
        <div class="container">
            <div class="section-title">
                <h2>Quy trình làm việc cực kỳ nhanh chóng</h2>
            </div>
            <div class="process-content">
                <p>Với quy trình chuyên nghiệp, các kỹ thuật viên của Garage Quang Đức sẽ xử lý mọi vấn đề một cách nhanh chóng nhất.</p>
                <div class="process-images">
                    <img data-image="01" alt="Hình ảnh khu vực sửa chữa 1">
                    <img data-image="02" alt="Hình ảnh khu vực sửa chữa 2">
                </div>
                <div class="process-description">
                    <p>Các dịch vụ phụ trợ bao gồm: Dịch vụ dọn rửa xe công nghệ cao, trang trí nội ngoại thất xe. Phân phối phụ tùng và trạm xăng dầu ô tô. Dịch vụ cứu hộ, cứu nạn xe ô tô. Trung tâm ủy quyền huấn luyện, đào tạo của hãng sơn Dupont ở khu vực phía Bắc Việt Nam. Trung tâm sửa chữa đã áp dụng được quy trình sơn sửa chữa nhanh: Giàn kéo nắn khung xương, máy hàn rút tôn, bấm, đinh …v.v Các loại thiết bị kiểm tra, đọc xóa lỗi động cơ. Máy hút và nạp Gas tự động cùng với toàn bộ trang thiết bị, công cụ chuyên dụng, dụng cụ cầm tay... Hiện đại và tiên tiến nhất hiện nay. Đến với trung tâm sửa chữa ô tô Quang Đức. Quý khách sẽ được phục vụ theo phong cách chuyên nghiệp, hiện đại và hài lòng với tiêu chí: “Thời gian – Chất lượng – Giá thành – Tạo nên sức cạnh tranh”</p>
                    <p><strong>Hotline:</strong> 0962677726<br>
                        <strong>Email:</strong> Garaquangduc1075@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần Footer -->
    <div class="footer-section">
        <div class="footer-container">

            <!-- Logo và thông tin liên hệ -->
            <div class="footer-column">
                <img data-icon="LogoGarage" alt="Garage Logo" class="footer-logo">
                <h3>GARAGE QUANG ĐỨC</h3>
                <ul>
                    <li><i class="fa fa-map-marker"></i><a href="https://maps.app.goo.gl/kk4zgrAmjhvnoJTW9" target="_blank"> <strong>Địa chỉ: </strong> 335 Nguyễn Khoái, Thanh Long, Hai Bà Trưng, Hà Nội </a></li>
                    <li><i class="fa fa-phone"></i><a href="tel:0962677726" target="_blank"> <strong>Hotline: </strong> 0962677726 </a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:Garaquangduc1075@gmail.com" target="_blank"> <strong>Email: </strong> Garaquangduc1075@gmail.com</a></li>

                    <a href="//www.dmca.com/Protection/Status.aspx?ID=52b584c4-d79c-4d9e-b37c-4b8f5771e4c1" title="DMCA.com Protection Status" class="dmca-badge">
                        <img src="https://images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=52b584c4-d79c-4d9e-b37c-4b8f5771e4c1" alt="DMCA.com Protection Status" />
                    </a>
                    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                </ul>
            </div>

            <!-- Thông tin công ty -->
            <div class="footer-column">
                <h4>Thông tin công ty</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="{{ route('tintuc') }}">Tin tức</a></li>
                    <li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Dịch vụ -->
            <div class="footer-column">
                <h4>Dịch vụ</h4>
                <ul>
                    <li><a href="{{ route('gioithieu') }}">Bảo trì, bảo dưỡng</a></li>
                    <li><a href="{{ route('gammay') }}">Dịch vụ gầm máy</a></li>
                    <li><a href="{{ route('phuchoi') }}">Phục hồi xe tai nạn - Va chạm</a></li>
                </ul>
            </div>

            <!-- Giờ làm việc -->
            <div class="working-hours-box">
                <div class="working-hours-icon">
                    <img data-icon="Clock-02" alt="Clock Icon">
                </div>
                <h4>GIỜ LÀM VIỆC</h4>
                <ul>
                    <li>Thứ 2: 9h00 - 19h00</li>
                    <li>Thứ 3: 9h00 - 19h00</li>
                    <li>Thứ 4: 9h00 - 19h00 </li>
                    <li>Thứ 5: 9h00 - 19h00 </li>
                    <li>Thứ 6: 9h00 - 19h00 </li>
                    <li>Thứ 7: 9h00 - 19h00 </li>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Garage AHK. All rights reserved.</p>
    </footer>

    <!-- Social Icons Fixed -->
    <div class="social-icons-fixed">
        <a href="https://www.facebook.com/garaphuchoan" target="_blank" class="social-icon facebook"><img data-icon="Logo FB" alt="Facebook"></a>
        <a href="#" target="_blank" class="social-icon zalo"><img data-icon="Logo Zalo" alt="Zalo"></a>
        <a href="tel:0923387840" target="_blank" class="icon-phone"><img data-icon="Logo Phone" alt="Phone"></a>
        <a href="https://www.facebook.com/garaphuchoan" target="_blank" class="social-icon messenger"><img data-icon="Logo Mes" alt="Messenger"></a>
        <a href="https://maps.app.goo.gl/kk4zgrAmjhvnoJTW9" target="_blank" class="social-icon maps"><img data-icon="Logo Map" alt="Google Maps"></a>
    </div>
    <script>
        $(document).ready(function() {
            $('.news-carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
            });
        });
    </script>

</body>

</html>