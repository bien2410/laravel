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
    <style>
        body {
            box-sizing: border-box;
        }

        .header {
            height: 150px;
            background-color: rgb(85, 166, 248);
            font-family: ui-monospace;
        }

        .sidebar {
            height: calc(100vh - 150px);
            border-radius: 5px solid;
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            padding-left: 46px
        }

        .sidebar h2 {
            font-weight: 700
        }

        .sidebar ul {
            border-radius: 12px;
            margin-top: 20px;
            {{--  background: rgb(23, 30, 69);  --}}
        }

        .sidebar li {}

        .sidebar a {
            padding: 24px;
            color: rgb(94, 92, 114);
            border-radius: 25px;
            font-weight: 600;
            width: 80%;
        }

        .sidebar a:hover {
            background-color: rgb(41, 28, 98);
            color: rgb(221, 218, 236);

        }

        .menu {
            height: 100px
        }

        .change {
            background-color: rgb(246, 247, 249);
            height: calc(100vh - 250px);
        }
    </style>
</head>
<div class="container-fluid">
    <div class="row text-white header align-items-center text-center">
        <div class="col-12">
            <h2>ADMIN APPLICATION WEB FEATURE</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-3 sidebar">
            <h2 class="mt-5">Admin Manage</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/admin/category">Quản lý danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý đơn đặt hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Thống kê và báo cáo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Quản lý nội dung trang web</a>
                </li>
            </ul>
        </div>
        <div class="col-9 content">
            <div class="row menu">
                <div class="col-10 search">

                </div>
            </div>
            <div class="row change">
                @yield('change')
            </div>

        </div>
    </div>
</div>

<body>

</body>

</html>
