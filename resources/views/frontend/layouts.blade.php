<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }


        .option-header {
            background-color: rgb(120, 202, 100);
            height: 60px;
            line-height: 60px;
            width: 100%;
            margin: 0;
            padding: 0 70px
        }

        .option-header a {
            text-decoration: none;
            color: white;
        }


        .mid-header {
            height: 110px;
            padding: 0 70px
        }

        .mid-header input {
            width: 450px;
            height: 40px;
            padding: 12px;
            border-radius: 50px;
            outline: none;
        }

        .mid-header button {
            padding: 6px;
            width: 48px;
            background-color: #78CA64;
            color: white;
            border: 1px solid transparent;
        }

        header .right {
            font-size: 17px;
        }

        header .right i {
            font-size: 25px;
            color: black;
        }

        .navbar {
            padding: 0 70px;

        }

        nav {
            background-color: #464646;
            color: white;
        }

        .nav-item a {
            color: white;
            font-size: 20px;
        }

        .nav-link:hover {
            background-color: #78CA64;
            color: white
        }

        .sidebar {
            height: 500px;
            overflow-y: auto;
        }

        .sidebar a {
            color: #000000;
            border: 1px solid #ccc;
            padding: 8px;

        }

        .nav-item.header {
            background-color: #464646;
            text-align: center
        }

        .nav-item.header a {
            color: white;
            font-size: 17px;
        }

        .nav-item.header a:hover {
            background-color: #464646
        }

        .session-content {
            padding: 0 70px;

        }

        .product-list {
            padding: 60px;

        }

        .product-item {
            border: 1px solid #ccc;
            padding: 30px 0;
            border-radius: 12px;
            margin: 0px 30px 60px 12px;
        }

        .product-name {
            font-size: 17px;
            font-weight: 600;
        }

        .product-price {
            font-size: 21px;
            color: #2eb92e;
        }

        .btnBuy {
            padding: 5px;
            border-radius: 50px;
            width: 167px;
            font-size: 20px;

        }

        .support {
            border: 1px solid #ccc;
            margin-top: 12px
        }

        .support-header {
            font-size: 17px;
            margin-bottom: 12px;
            height: 50px;
            background-color: #5cbf5c;
            text-align: center;
            line-height: 50px;
            font-weight: 600;
            color: white;

        }

        .infor-list {
            margin: 0;
        }

        .support-icon {
            line-height: 50px;
            background-color: green;
            width: 40px;
            height: 46px;
            border-radius: 50%;
            color: white;
            font-size: 12px;
        }

        .new-small {
            margin-top: 32px;
            border: 1px solid #ccc;
        }


        .new-header {
            padding: 20px;
            font-weight: 600;
            border-bottom: 2px solid rgb(162, 219, 148);
            margin-top: 12px;
        }


        .new-small .date-published,
        .new-small .content {
            font-size: 12px;
        }


        .footer {
            border-top: 1px solid #ccc;
        }

        .service {
            margin: 45px 70px;
        }

        .icon-service {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            border: 1px solid rgb(120, 202, 100);
            border-radius: 50%;
            height: 80px;
            width: 80px;
        }

        .content-service {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .header-content {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .detail-content {
            font-size: 14px;
            color: #ccc;
        }

        .contact-footer {
            background-color: rgb(250, 250, 250);
            height: 400px;
            padding: 72px 198px;
        }

        .contact-item .header {
            font-size: 18px;
            font-weight: 600;
        }

        .contact-item a {
            display: block;
            text-decoration: none;
            color: black;
            margin-bottom: 12px;
        }

        .navbar-footer {
            background-color: #464646;
        }

        .footer ul {
            height: 45px;

        }

        .footer .nav-link a {
            height: 45px;
            line-height: 45px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-flush">
            <div class="row option-header text-white">
                <div class="col-md-6 text-start   contact">
                    <a href="#">
                        <i class="fa-solid fa-phone"></i>
                        0900.911.900
                    </a>
                    <span> | </span>
                    <a href="#">
                        <i class="fa-solid fa-envelope"></i>
                        vti@gmail.com
                    </a>
                </div>
                <div class="col-md-6 right text-end">
                    <a href="#"> Đăng nhập</a>
                    <span> | </span>
                    <a href="#"> Đăng ký</a>
                </div>
            </div>
        </div>
        <div class="container-flush mid-header">
            <div class="row pt-4">
                <div class="col-3 logo">
                    <img src="{{ URL::asset('image/banner2.jpg') }}" alt="Ảnh" height="60px" width="150px">
                </div>
                <div class="col-6 text-center search">
                    <form action="/search" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="Tìm kiếm" id="search">
                        <span>
                            <button id="btnSearch">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </span>
                    </form>
                </div>
                <div class="col-3 text-center right">
                    <div class="row">
                        <div class="col-4">
                            <a href="#"><i class="fa-solid fa-cart-plus "></i></a>
                        </div>
                        <div class="col-4 account">
                            <i class="fa-solid fa-user"></i>
                            Admin user
                        </div>
                        <div class="col-4">
                            <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="#" style="padding: 15px 25px">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="padding: 15px 25px">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="padding: 15px 25px">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="padding: 15px 25px">Liên hệ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid session">
        <div class="row mt-4 session-banner" style="padding:0px 70px">
            <div class="col-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item header ">
                        <a class="nav-link " style="padding: 15px 25px" @disabled(true)>DANH MỤC SẢN
                            PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm hot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm nổi bật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đồng hồ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Máy tính</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Điện thoại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Âm thanh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công nghệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công nghệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công nghệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công nghệ</a>
                    </li>
                </ul>
            </div>
            <div class="col-10 banner">
                <img src="{{ URL::asset('image/bannerdienthoai.jpg') }}" alt="Ảnh" height="500px"
                    width="100%">
            </div>
        </div>
        <div class="row mt-2 session-content">
            <div class="col-2">
                <div class="row support">
                    <div class="support-header">
                        <p>HỖ TRỢ TRỰC TUYẾN</p>
                    </div>
                    <div class="row infor-list">
                        <div class="col-3 text-center">
                            <i class="fa-solid fa-phone support-icon"></i>
                        </div>
                        <div class="col-9">
                            <p>Tư vấn bàng hàng 1 </br>
                                Mrs.Chung: 0999.911.911</p>
                        </div>
                    </div>

                    <div class="row infor-list">
                        <div class="col-3 text-center">
                            <i class="fa-solid fa-phone support-icon"></i>
                        </div>
                        <div class="col-9">
                            <p>Tư vấn bàng hàng 1 </br>
                                Mrs.Chung: 0999.911.911</p>
                        </div>
                    </div>

                    <div class="row infor-list">
                        <div class="col-3 text-center">
                            <i class="fa-solid fa-phone support-icon"></i>
                        </div>
                        <div class="col-9">
                            <p>Tư vấn bàng hàng 1 </br>
                                Mrs.Chung: 0999.911.911</p>
                        </div>
                    </div>
                </div>

                <div class="row new-small">
                    <p class="new-header">TIN TỨC</p>
                    <a
                        href="https://www.24h.com.vn/thoi-trang-hi-tech/lo-trinh-san-xuat-iphone-man-hinh-gap-iphone-se-4-bat-ngo-bi-ven-man-c407a1552164.html"><img
                            src="{{ URL::asset('image/anh1.jpg') }}" alt="Ảnh" height="230px"
                            width="100%"></a>
                    <p class="new-title mt-3 fs-5">Lộ trình sản xuất iPhone màn hình gập, iPhone SE 4 bất ngờ bị
                        vén
                        màn</p>
                    <p class="date-published">Thứ Ba, ngày 19/03/2024 06:00 AM (GMT+7)</p>
                    <p class="content">Theo đúng lịch trình, Samsung sẽ trình làng các mẫu smartphone màn hình gập mới
                        nhất của mình, Galaxy Z Fold 6 và Galaxy Z Flip 6 vào mùa thu này tại sự kiện Galaxy Unpacked.
                        Trong khi các tin đồn trước đó khẳng định thông tin về Galaxy Z Fold 6 Ultra cao cấp, các nguồn
                        tin mới nhất lại cho thấy điều ngược lại. Thay vì Galaxy Z Fold 6 Ultra, Samsung đang sản xuất
                        một ...</p>
                </div>
            </div>
            <div class="col-10 product-list">
                <div class="row text-center">
                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                    <div class="col-2 product-item text-center">
                        <img src="{{ URL::asset('image/dienthoai1.jpg') }}" alt="Ảnh" height="200px"
                            width="200px">
                        <p class="product-name mt-4">TỦ LẠNH HITACHI R-W660FPGV3X (GBW)</p>
                        <p class="product-price">21.000.000</p>
                        <button class="btnBuy">Chọn mua</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row service">
                <div class="col-4">
                    <div class="row">
                        <div class="col-3 icon-service">
                            <i class="fa-solid fa-truck" style="color: #78ca64;"></i>
                        </div>
                        <div class="col-9 content-service">
                            <p class="header-content">MIỄN PHÍ GIAO HÀNG</p>
                            <p class="detail-content">Miễn phí giao hàng trong nội thành hà nội</p>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="row">
                        <div class="col-3 icon-service">
                            <i class="fa-solid fa-gift" style="color: #78ca64;"></i>
                        </div>
                        <div class="col-9 content-service">
                            <p class="header-content">KHUYẾN MÃI</p>
                            <p class="detail-content">Khuyến mãi sản phẩm nếu đơn hàng trên 1.000.000đ </p>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="row">
                        <div class="col-3 icon-service">
                            <i class="fa-solid fa-shield-halved" style="color: #78ca64;"></i>
                        </div>
                        <div class="col-9 content-service">
                            <p class="header-content">HOÀN TRẢ LẠI TIỀN</p>
                            <p class="detail-content">Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng
                                miêu
                                tả</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row contact-footer">
                <div class="col-3 contact-item">
                    <p class="header">VỀ CHÚNG TÔI</p>
                    <a href="">Trang chủ</a>
                    <a href="">Giới thiệu</a>
                    <a href="">Tin tức</a>
                    <a href="">Liên hệ</a>
                </div>


                <div class="col-3 contact-item">
                    <p class="header">HƯỚNG DẪN</p>
                    <a href="">Hướng dẫn mua hàng</a>
                    <a href="">Giao nhận và thanh toán</a>
                    <a href="">Đổi trả và bảo hành</a>
                    <a href="">Đăng ký thành viên</a>
                </div>

                <div class="col-3 contact-item">
                    <p class="header">CHÍNH SÁCH</p>
                    <a href="">Chính sách thanh toán</a>
                    <a href="">Chính sách vận chuyển</a>
                    <a href="">Chính sách đổi trả</a>
                    <a href="">Chính sách bảo hàng</a>
                </div>

                <div class="col-3 contact-item">
                    <p class="header">ĐIỀU KHOẢN</p>
                    <a href="">Điều khoản sử dụng</a>
                    <a href="">Điều khoản giao dịch</a>
                    <a href="">Dịch vụ tiện ích</a>
                    <a href="">Quyền sở hữu trí tuệ</a>
                </div>
            </div>

            <div class="row navbar-footer align-items-center">
                <div class="col-6 text-white">
                    <p class="mb-0 text-center">
                        <i class="fa-regular fa-copyright" style="color: #d7d6d6;"></i>
                        Bản quyền thuộc về Avent Team
                    </p>
                </div>
                <div class="col-6">
                    <nav class="navbar navbar-expand-sm ">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
