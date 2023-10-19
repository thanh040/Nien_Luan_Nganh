<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="public/assets/img/library.png" type="image/x-icon" sizes="32x32">
        <title >LIBRARY</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="resources/css/style.css" rel="stylesheet">
    </head>
    <style>
        div .tittle-library{
            text-align: center;
            color:#16a085;
        }
        div.
    </style>
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"> 
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"> 
                    <span class="sr-only">Loading...</span>
                </div>
            </div> --}}
            <!-- Spinner End -->
    
    
            <!-- Navbar Start -->
            <div class="container-fluid nav-bar bg-transparent">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                    <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                        <div class="icon p-2 me-2">
                            <img class="img-fluid" src="public/assets/img/library.png" alt="Icon" style="width: 30px; height: 30px;">
                        </div>
                        <h1 class="m-0 text-primary">Library</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="{{ url('/about') }}" class="nav-item nav-link">Về chúng tôi</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quản lý đề tài luận văn</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ url('/thesis-by-industry') }}" class="dropdown-item">Quản lý đề tài luận văn theo ngành</a>
                                    <a href="{{ url('/thesis-according-to-instructors') }}" class="dropdown-item">Quản lý đề tài luận văn theo giáo viên</a>
                                </div>
                            </div>
                            <div><a href="{{ url('/login') }}" class="nav-item nav-link"><u>Đăng Nhập</u></a></div>
                        </div>
                        
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->
    
    
            <!-- Header Start -->
            <div class="container-fluid header bg-white p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6 p-5 mt-lg-5">
                        <h1 class="display-5 animated fadeIn mb-4">Hãy Tìm <span class="text-primary">Đề Tài Luận Văn </span>Phù Hợp Với Bạn</h1>
                        <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Cùng Bắt Đầu Nào</a>
                    </div>
                    <div class="col-md-6 animated fadeIn">
                        <div class="owl-carousel header-carousel">
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="/public/assets/img/1.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
    
    
            <!-- Search Start -->
            <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Tên Đề Tài Luận Văn">
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3">
                                        <option selected>Tên Giáo Viên</option>
                                        <option value="1">Giáo Viên 1</option>
                                        <option value="2">Giáo Viên 2</option>
                                        <option value="3">Giáo Viên 3</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3">
                                        <option selected>Tên Ngành</option>
                                        <option value="1">Ngành  1</option>
                                        <option value="2">Ngành 2</option>
                                        <option value="3">Ngành 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-dark border-0 w-100 py-3">Tìm Kiếm</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End -->
            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Liên Lạc</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Đường 3/2, Đại Học Cần Thơ</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+09090909</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>ctu@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Đường dẫn</h5>
                            <a class="btn btn-link text-white-50" href="">Trang Chủ</a>
                            <a class="btn btn-link text-white-50" href="">Về Chúng Tôi</a>
                            <a class="btn btn-link text-white-50" href="">Quản Lý Đề Tài Luận Văn</a>
                            <a class="btn btn-link text-white-50" href="">Chính Sách Bảo Mật Và Bản Quyền </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Hình Ảnh</h5>
                            <div class="row g-2 pt-2">
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-1.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-2.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-3.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-4.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-5.webp" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="public/assets/img/cantho-university-6.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Liên Hệ Ngay</h5>
                            <p>Hãy Liên Hệ Ngay Với Chúng Tôi Nếu Bạn Cần Trao Đổi Thêm Thông Tin</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng Nhập</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    
    
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
