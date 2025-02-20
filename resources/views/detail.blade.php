<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$buku->nama_buku}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}" type="text/css">

    <style>
        .button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 0px 4px rgb(255, 255, 255);
  cursor: pointer;
  transition-duration: 0.3s;
  overflow: hidden;
  position: relative;
}

.svgIcon {
  width: 12px;
  transition-duration: 0.3s;
}

.svgIcon path {
  fill: white;
}

.button:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: 0.3s;
  background-color: rgb(255, 0, 0);
  align-items: center;
}

.button:hover .svgIcon {
  /* width: 20px; */
  transition-duration: 0.3s;
  transform: translateY(-200%);
}

.button::before {
  position: absolute;
  bottom: -20px;
  content: "Back to Top";
  color: white;
  /* transition-duration: .3s; */
  font-size: 0px;
}

.button:hover::before {
  font-size: 13px;
  opacity: 1;
  bottom: unset;
  /* transform: translateY(-30px); */
  transition-duration: 0.3s;
}

.btn-class-name {
  --color: 250, 255, 100;
  border-radius: 0.5em;
  transition: 0.3s;
  background-color: rgba(var(--color), 0.2);
  color: rgb(var(--color));
  fill: rgb(var(--color));
  font-family: monospace;
  font-weight: bolder;
  font-size: x-large;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  cursor: pointer;
  border: 2px solid rgb(var(--color));
  box-shadow: 0 0 10px rgba(var(--color), 0.4);
  outline: none;
  display: flex;
  align-items: center;
  padding: 0.5em 1em;
}

.btn-class-name:hover {
  box-shadow: 0 0 0 5px rgba(var(--color), 0.5);
}

.btn-class-name span {
  transform: scale(0.8);
  transition: 0.3s;
}

.btn-class-name:hover span {
  transform: scale(1);
}

.btn-class-name svg {
  font-size: 0;
  transform: scale(0.5) translateX(0%) rotate(-180deg);
  transition: 0.3s;
}

.btn-class-name:hover svg {
  font-size: 20px;
  transform: scale(1) translateX(20%) rotate(0deg);
}

.btn-class-name:active {
  transition: 0s;
  box-shadow: 0 0 0 5px rgb(var(--color));
}

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #000;
	display: flex;
	justify-content: center;
	align-items: center;
}

.loader {
	display: flex;
	align-items: center;
}

.bar {
	display: inline-block;
	width: 3px;
	height: 20px;
	background-color: rgba(255, 255, 255, .5);
	border-radius: 10px;
	animation: scale-up4 1s linear infinite;
}

.bar:nth-child(2) {
	height: 35px;
	margin: 0 5px;
	animation-delay: .25s;
}

.bar:nth-child(3) {
	animation-delay: .5s;
}

@keyframes scale-up4 {
	20% {
		background-color: #ffff;
		transform: scaleY(1.5);
	}

	40% {
		transform: scaleY(1);
	}
}


    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
  <div class="loader">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
</div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="{{ asset('front/assets/img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ asset('/storage/bukus/' . $buku->image) }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $buku->nama_buku }}</h3>
                                
                            </div>
                            <p>{{$buku->sinopsis}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Author:</span> {{$buku->author}}</li>
                                            <li><span>Publisher:</span> {{$buku->Publisher->nama_publisher}}</li>
                                            <li><span>Stok:</span> {{$buku->stok}}</li>
                                            <li><span>Genre:</span> {{$buku->Kategori->nama_kategori}}</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <!-- From Uiverse.io by Dhanya4 --> 
                                <button class="btn-class-name">
                                <span>Pinjam Buku   </span>
                                <svg viewBox="0 0 320 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"
                                    ></path>
                                </svg>
                                </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->
        <center>
    <a href="#" id="scrollToTopButton">
<button class="button">
  <svg class="svgIcon" viewBox="0 0 384 512">
    <path
      d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
    ></path>
  </svg>
</button>
</a>
</center>
<br>  
        <!-- Footer Section Begin -->
        <footer class="footer">
          
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{ asset('front/assets/img/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__nav">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories</a></li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                      </div>
                  </div>
              </div>
          </footer>
          <!-- Footer Section End -->

          <!-- Search model Begin -->
          <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="{{ asset('front/assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('front/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('front/assets/js/player.js')}}"></script>
        <script src="{{ asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('front/assets/js/mixitup.min.js')}}"></script>
        <script src="{{ asset('front/assets/js/jquery.slicknav.js')}}"></script>
        <script src="{{ asset('front/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('front/assets/js/main.js')}}"></script>

    </body>

    </html>