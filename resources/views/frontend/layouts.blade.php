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
            font-family: 'ui-sans-serif';
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
            font-size: 20px;
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
            color: white
        }

        .nav-item.header a:hover {
            background-color: #464646
        }

        .session-content {
            padding: 0 70px;
            height: 1000px;
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
            width: 46px;
            height: 46px;
            border-radius: 50%;
            color: white;
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
                        <a class="nav-link " style="padding: 15px 25px" @disabled(true)>Danh mục sản
                            phẩm</a>
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
                <div class="support">
                    <div class="support-header ">
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



</body>

</html>
