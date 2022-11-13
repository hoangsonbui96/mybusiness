<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/135b549aa7.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/home.js') }}" ></script>

</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-9 mt-3 mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt align-content-center text-white"></i>
                        <p class="mb-0 ml-2 text-white">Kronne Invest</p>
    
                        <i class="fas fa-phone-alt align-content-center text-white ml-5"></i>
                        <p class="mb-0 ml-2 text-white">+1 234 56789</p>
    
                    </div>      
                </div>
                <div class="col-fix mt-3 mb-3">
                    <div class="row">
                        <div class="gray-color mr-2 social-icon">
                            <a href="#">
                                <i class="fab fa-facebook-square padding-icon text-white"></i>
                            </a>
                        </div>
                        <div class="gray-color mr-2 social-icon">
                            <a href="#">
                                <i class="fab fa-twitter padding-icon text-white"></i>
                            </a>
                        </div>
                        <div class="gray-color mr-2 social-icon">
                            <a href="#">
                                <i class="fab fa-google-plus-square padding-icon text-white"></i>
                            </a>
                        </div>
                        <div class="gray-color mr-2 social-icon">
                            <a href="#">
                                <i class="fab fa-instagram-square padding-icon text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <sub-header>
        <div class="container">
            <div class="row" >
                <div class="col-4">
                    <a href="#">
                        <img src="https://kronne.cz/wp-content/uploads/2017/03/logo_kronne-e1490524115897.png" alt="" style="width:100px" class="logo-web">
                    </a>
                </div>
                <div class="col-8 d-flex align-items-center">
                    <div>
                        <nav>
                            <ul class="m-0">
                                <li class="about-us">
                                    <div class="line-h-90">
                                        About us  
                                    </div>
                                    <div class="dropdown-menus">
                                        <a class="dropdown-item" href="#">
                                            <div class="poppins-font">Company</div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="poppins-font">Our Team</div>
                                        </a>
                                    </div>                                     
                                </li>
                                <li class="business">
                                    <div class="line-h-90">
                                        Business                                     
                                    </div>
                                </li>
                                <li class="about-us">
                                    <div class="line-h-90">
                                        Education
                                    </div>
                                    <div class="dropdown-menus">
                                        <a class="dropdown-item" href="#">
                                            <div class="poppins-font">University programmes</div>
                                        </a>
                                        <a class="dropdown-item poppins-font" href="#">                                         
                                            <div class="poppins-font">Managerial education</div>
                                        </a>
                                        <a class="dropdown-item poppins-font" href="#">
                                            <div class="poppins-font">Translation services</div>
                                        </a>
                                    </div>  
                                </li>
                                <li>
                                    <div class="line-h-90">
                                        Partners
                                    </div>
                                </li>
                                <li>
                                    <div class="line-h-90">
                                        References
                                    </div>
                                </li>
                                <li>
                                    <div class="line-h-90">
                                        News
                                    </div>
                                </li>
                                <li>
                                    <div class="line-h-90">
                                        Contact
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </sub-header>
    <div class="d-flex justify-content-center">
        <div class="containers dropdown-menus2">
            <div class="row mb-2">
                <div class="col-4 d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('photo/sea-consulting.png') }}" alt="" id="sea-pic">
                        <div class="poppins-font">SEA consulting</div>
                        <button class="btn btn-warning padding-btn text-white">Read more</button>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('photo/eu-consulting.png') }}" alt="" id="sea-pic">
                        <div class="poppins-font">EU consulting</div>
                        <button class="btn btn-warning padding-btn text-white">Read more</button>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('photo/china-consulting.png') }}" alt="" id="china-pic">
                        <div class="d-flex justify-content-center">
                            <div class="poppins-font">China consulting</div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-warning padding-btn text-white">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <body>
        <div class="relative-pos">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 banner-pic" src="{{ asset('photo/home-pic.webp') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 banner-pic" src="{{ asset('photo/home-pic2.webp') }}" alt="Second slide">
                  </div>
                </div>
            </div>

            <div class="d-flex justify-content-center slide-item">
                <div>
                    <div class="d-flex justify-content-center text-center">
                        <div class="mb-5 text-white">
                            <h1>FAST & EASY</h1>
                            <div>We are building bridges in seo technology in order to</div>
                            <div>connect the client’s goal to reality.</div>
                        </div>
                    </div>
    
                    <div class="d-flex justify-content-between">

                        <div class="cols-fix-1 mr-50">
                            <div class="item-1 text-center text-white">
                                <div class="container-item">
                                    <i class="fas fa-school mb-2" style="font-size: 45px"></i>
                                    <div class="poppins-font">Education</div>                                   
                                    <div class="padding-item">
                                        Get an analysis report made of more 
                                        than 50 criteria based on SEO, design, 
                                        content
                                    </div>
                                    <button class="btn read-more-btn-1 btn-items">Read more</button>
                                </div>

                            </div>
                        </div>
    
                        <div class="cols-fix-2 mr-50">
                            <div class="item-1 text-center text-white">
                                <div class="container-item">
                                    <i class="fas fa-briefcase mb-2" style="font-size: 45px"></i>
                                    <div class="poppins-font">Business</div>                                   
                                    <div class="padding-item">
                                        Get an analysis report made of more 
                                        than 50 criteria based on SEO, design, 
                                        content
                                    </div>
                                    <button class="btn read-more-btn-2 btn-items">Read more</button>
                                </div>

                            </div>
                        </div>

                        <div class="cols-fix-3 mr-50">
                            <div class="item-1 text-center text-white">
                                <div class="container-item">
                                    <i class="fas fa-users mb-2" style="font-size: 45px"></i>
                                    <div class="poppins-font">About us</div>                                   
                                    <div class="padding-item">
                                        Get an analysis report made of more 
                                        than 50 criteria based on SEO, design, 
                                        content
                                    </div>
                                    <button class="btn read-more-btn-3 btn-items">Read more</button>
                                </div>

                            </div>
                        </div>

                        <div class="cols-fix-4 mr-50">
                            <div class="item-1 text-center text-white">
                                <div class="container-item">
                                    <i class="fas fa-phone mb-2" style="font-size: 45px"></i>
                                    <div class="poppins-font">Contact</div>                                   
                                    <div class="padding-item">
                                        Get an analysis report made of more 
                                        than 50 criteria based on SEO, design, 
                                        content
                                    </div>
                                    <button class="btn read-more-btn-4 btn-items">Read more</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

          
    </body>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</body>
</html>