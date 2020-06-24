<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Landing Page | Sepatu Super - Sepatu Murah Berkualitas Khas Malangnya Kak</title>
    <link rel='stylesheet' href='style.css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnificpopup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mb.YTPlayer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/icon/favicon.ico')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</head>

<body>

    @if(session('success'))
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Konfirmasi pembayaran berhasil dikirim.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- preloader area start -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- preloader area end -->
    <!-- header area start -->
    <header id="header">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="menu-area">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('/img/spatusuper.png')}}"></a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-xs hidden-sm">
                            <div class="main-menu">
                                <nav class="nav-menu">
                                    <ul>
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#product">Product</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="{{route('confirmBuying')}}">Confirm Transaction</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- slider area start -->
    <section class="slider-area" id="home">

        <div class="container">
            <div class="col-md-6 col-sm-6 hidden-xs">
                <div class="row">
                    <div class="slider-img">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 float-right">
                <div class="row">
                    <div class="slider-inner text-right">
                        <h2>Super sepatu is real</h2>
                        <h5>Gudangnya sepatu india</h5>
                        <a href="#about"><i class="fa fa-search"></i>Tentang kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->
    <!-- service area start -->

    <!-- service area end -->
    <!-- about area start -->

    <div class="about-area ptb--100">
        <section id="about">
            <div class="container">
                <div class="section-title">
                    <h2>About us</h2>
                    Super sepatu adalah perusahaan yang berfokus dalam menjual sepatu-sepatu berkualitas dari India.
                    Banyak sekali varian sepatu india yang dimiliki oleh super sepatu, hampir seluruh produsen di
                    provinsi india berhubungan baik dengan bos kami. Bahkan sering video-call. Tidak bisa diragukan lagi
                    kualitas yang terdapat pada sebuah sepatu asal india, bagaimana tidak bahan sepatu dipilih secara
                    acak dan dipilah agar kualitasnya baik dan juga model pada sepatu-sepatu india terlihat trendy
                    ketika digunakan sehari-hari ataupun ketika ingin bepergian, misalnya. Kami bergerak di penjualan
                    sepatu india sudah lama, terhitung sejak 22 Juni 2020 atau
                    {{\Carbon\Carbon::parse('6/22/2020')->locale('id')->diffForHumans()}}. Kami super sepatu terus
                    berkomitmen untuk memberikan sepatu berkualitas dari negeri T-Series ini.
                </div>
            </div>
        </section>
    </div>

    <div class="product-area ptb--100">
        <section id="product">
            <div class="container">
                <div class="section-title">
                    <h2>Product</h2>

                    <div class='gambar'>
                        @foreach($barang as $data)
                        <div class='foto'>
                            <img src="{{URL::asset('/img/'.$data->src)}}">
                            <h3>{{$data->merk}} - {{$data->tipe}}</h3>
                            <p>Rp. {{number_format($data->harga, 2, ',', '.')}}</p>
                            <a href="buy/{{$data->id}}" class="btn btn-lg btn-success btn-block">Beli Sekarang</a>

                        </div>
                        @endforeach


                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 d-flex flex-center">
                        <div class="about-content">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="contact-area pb--100" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>

            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" name="name" placeholder="Enter Your Name">
                            <input type="text" name="email" placeholder="Enter Your Email">
                            <textarea name="msg" id="msg" placeholder="Your Message "></textarea>
                            <input type="submit" value="Send" id="send">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact_info">
                        <div class="s-info">
                            <i class="fa fa-map-marker"></i>
                            <div class="meta-content">
                                <span>Tlogomas, Kota Malang, Jawa Timur</span>

                            </div>
                        </div>
                        <div class="s-info">
                            <i class="fa fa-mobile"></i>
                            <div class="meta-content">
                                <span>147</span>
                            </div>
                        </div>
                        <div class="s-info">
                            <i class="fa fa-paper-plane"></i>
                            <div class="meta-content">
                                <span>Support@super-sepatu.india</span>
                            </div>
                        </div>
                        <div class="c-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
    <!-- footer area start -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> by Team
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/counterup.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script>
        $(window).on('load', function () {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>
