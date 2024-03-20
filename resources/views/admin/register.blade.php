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
        * {
            margin: 0;
            padding: 0;
            border-box: box-sizing;
        }

        .header .heading {
            font-size: 34px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        .header .text {
            font-size: 14px;
            font-weight: 600;
        }

        .form-signup {
            padding: 40px;
        }

        fieldset {
            border: 3px solid #ccc;
            padding: 20px;
            border-radius: 12px;
            margin-top: 12px;
        }

        legend {
            border: none;
            padding: 0 10px;
            margin-bottom: 16px;
            font-weight: bold;
        }

        .form-signup input {
            padding: 12px;
        }

        .required,
        .error {
            color: red;
        }

        .form-signup .btn {
            padding: 12px 22px;
        }

        .btn {}

        .notice-login {
            padding: 40px 80px;
        }

        .login {
            padding: 12px;
            background-color: #000;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .notice-login fieldset {
            padding: 20px 30px 30px 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row header mt-5">
            <p class="heading">ĐĂNG KÝ TÀI KHOẢN</p>
            <p class="text">Nếu bạn chưa có tài khoản, hãy đăng ký để nhận nhiều ưu đãi của của hàng!</p>
        </div>
        <div class="row content">
            <div class="col-6 form-signup">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <fieldset>
                        <legend class="text-center">ĐĂNG KÝ TÀI KHOẢN</legend>
                        <div class="mb-3 mt-3">
                            <label for="username" class="form-label">
                                Username:
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username"
                                name="username" required value="{{ old('username') }}">
                            @error('username')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">
                                Email:
                                <span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email" required value="{{ old('email') }}">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">
                                Password:
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="password" required>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="cfpwd" class="form-label">
                                Confirm Password</label>
                            <span class="required">*</span>
                            <input type="password" class="form-control" id="cfpwd" placeholder="Confirm password"
                                name="password_confirmation">
                            @error('password_confirmation')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark mt-2">Đăng ký</button>
                    </fieldset>
                </form>
            </div>

            <div class="col-6 notice-login">
                <fieldset>
                    <legend class="text-center">ĐĂNG NHẬP</legend>
                    <p class="content">Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn
                        hàng, vận chuyển, và đặt hàng được thuận lợi</p>
                    </br>
                    <a class="login" href="">
                        Đăng nhập
                    </a>
                    </br>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>
