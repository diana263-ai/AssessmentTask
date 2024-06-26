<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Website</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('icons/font-awesome-old/css/font-awesome.min.css')}}" rel="stylesheet">
    <style>
    body {
        scroll-behavior: smooth;
    }


    .icon-container {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 20px;
    }

    .navbar {
        margin-bottom: 50px;
    }

    .tick-bullets {
        list-style: none;
        padding: 0;
        margin: 0
    }

    .tick-bullets li {
        margin-bottom: 10px;
    }

    .tick-bullets li:before {
        content: none;
    }

    .tick-bullets li i {
        font-size: 1.2rem;
        color: green;
        margin-right: 10px;
    }

    header {
        background-size: cover;
        background-position: center;
        height: 60vh;
        color: white;
    }

    .card-body {
        text-align: left;
    }

    section {
        padding: 60px 0;
    }

    .me-3 {
        margin-right: 1rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .pt-3 {
        padding-top: 1rem !important;
    }

    .pricing {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    footer {
        background-color: #007bff;
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .icon {
        width: 4rem;
        height: 4rem;
        line-height: 3rem;
        border-radius: 50%;
        border: 2px solid blue;
        text-align: center;
        font-size: 1.5rem;
        color: blue;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .list-unstyled {
        padding-left: 0;
        list-style-type: none;
    }

    .list-unstyled li {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .small-icon {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        line-height: 1.5rem;
        border-radius: 50%;
        border: 2px solid blue;
        text-align: center;
        font-size: 1rem;
        margin-right: 0.5rem;
    }

    .small-icon1 {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        line-height: 1.5rem;
        border-radius: 50%;
        border: 2px solid #000;
        text-align: center;
        font-size: 1rem;
        margin-right: 0.5rem;
    }

    #who-we-are-section {
        display: none;
    }
    </style>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Business</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="#pricing">Pricing</a></li>

                </ul>
            </div>
        </div>
    </nav>


    <header class="jumbotron jumbotron-fluid text-white bg-primary" id="who-we-are">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-6" style="font-weight:bold">Corporate Website</h1><br>
                    <p>We are a digital agency that helps brands to achieve their business outcomes. We<br>
                        see technology as a tool to create amazing things. </p><br>
                    <a href="#about" class="btn text-primary bg-white me-3 mb-3 font-weight-bold">GET
                        STARTED</a>


                </div>
                <div class="col-md-6 text-md-right">
                    <img id="myImage" src="{{ url('images/image-3.jpg') }}"
                        data-images="{{ url('images/image-1.jpg') }},{{ url('images/image-2.jpg') }},{{ url('images/image-3.jpg') }}"
                        alt="Header Image" class="img-fluid">
                </div>
            </div>
        </div>
    </header>


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img id="myImage1" src="{{ url('images/image-2.jpg') }}"
                        data1-images="{{ url('images/image-1.jpg') }},{{ url('images/image-2.jpg') }},{{ url('images/image-3.jpg') }}"
                        alt="Header Image" class="img-fluid">
                </div>
                <div class="col me-3 mb-3">
                    <h4>OUR STORY</h4>
                    <h2><strong>Our team comes with the <br>
                            experience and knowledge
                        </strong> <span></span></h2>
                    <br>
                    <div class="bg-light pt-3">
                        <a href="#who-we-are"><button type="button" class="btn text-white bg-primary me-3 mb-3">Who
                                We Are</button></a>
                        <a href="#vision"><button type="button" class="btn text-black bg-white me-3 mb-3">Our
                                Vision</button></a>
                        <a href="#about"><button type="button" class="btn text-black bg-white me-3 mb-3">Our
                                History</button></a>
                    </div>
                    <br>
                    <p>It is a long established factor that a reader will be distracted by the readable<br>
                        content of a page when looking at its layout. The point of using Lorem ipsum<br>
                        is that it has more-or-lessnormal distribution of letters, look like readable<br>
                        English.
                    </p>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the<br>
                        majority have in some form, by injected humour.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="container text-center">
        <button type="button" class="btn btn-rounded btn-outline-primary font-weight-bold"
            style="font-size:20px;">Services</button>
        <br><br><br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-capsule icon"></i>

                        </div>
                        <h4>Refreshing Design</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-bootstrap-fill icon"></i>
                        </div>
                        <h4>Solid Bootstrap 5</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-bricks icon"></i>
                        </div>
                        <h4>100+ Components</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-speedometer2 icon"></i>
                        </div>
                        <h4>Speed Optimized</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-stack icon"></i>
                        </div>
                        <h4>Fully Customizable</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="bi-arrow-repeat icon"></i>
                        </div>
                        <h4>Regular Updates</h4><br>
                        <p>Lorem ipsum dolor sit amet,adispscing elitr,<br>
                            sed diam nonumy eirmod tempor ividunt labor<br>
                            dolore magna.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
    </section><br><br>

    <section id="who-we-are-section" class="container text-center">
        <div class="container">
            <h2>Who We Are</h2>
            <p>We are a team of dedicated professionals who are passionate about delivering innovative solutions
                to
                our
                clients. Our goal is to help businesses achieve their objectives through technology and
                creativity.
            </p>
        </div>
    </section>

    <section id="pricing" class="pricing text-center">
        <div class="container">
            <button type="button" class="btn btn-rounded btn-outline-primary font-weight-bold"
                style="font-size:20px;">Pricing</button>
            <br><br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <button type="button" class="btn btn-rounded btn-outline-primary font-weight-bold"
                                    style="font-size:20px;">Starter</button>
                            </div>
                            <br>
                            <p class="text-center">Lorem ipsum is simply dummy text of the<br>
                                printing and industry </p>
                            <br>
                            <p class="text-center" style="font-size: 40px;"><sup>$</sup><b>0</b>
                                <sub>/mo</sub>
                            </p>
                            <br>
                            <button type="button"
                                class="btn btn-square btn-outline-primary font-weight-bold mx-auto d-block">START
                                FREE
                                TRIAL</button>
                            <br><br>
                            <ul style="list-unstyled text-left">
                                <li><i class="bi-check small-icon" style="color: blue;"></i> Cras justo odio.
                                </li>
                                <br>
                                <li><i class="bi-check small-icon" style="color: blue;"></i> Daoibus ac facillis
                                    in.
                                </li><br>
                                <li><i class="bi-check small-icon1"></i> orbi leo risus.</li><br>
                                <li><i class="bi-check small-icon1"></i> Expecteur sint occaecat velit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="#" class="btn btn-rounded btn-primary font-weight-bold"
                                    style="font-size:20px;">Exclusive</a>
                            </div>
                            <br>
                            <p class="text-center">Lorem ipsum is simply dummy text of the<br>
                                printing and industry</p>
                            <br>
                            <p class="text-center" style=" font-size: 40px;"><sup>$</sup><b>99</b>
                                <sub>/mo</sub>
                            </p>
                            <br>
                            <button type="button"
                                class="btn btn-square btn-primary font-weight-bold mx-auto d-block">START FREE
                                TRIAL</button>
                            <br><br>
                            <ul style="tick-bullets">
                                <li> <i class="bi-check small-icon" style="color: blue;"></i>Cras justo odio.
                                </li>
                                <br>
                                <li> <i class="bi-check small-icon" style="color: blue;"></i>Daoibus ac facillis
                                    in.
                                </li><br>
                                <li> <i class="bi-check small-icon" style="color: blue;"></i>Morbi leo risus.
                                </li>
                                <br>
                                <li> <i class="bi-check small-icon1"></i>Expecteur sint occaecat velit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <button type="button" class="btn btn-rounded btn-outline-primary font-weight-bold"
                                    style="font-size:20px;">Premium</button>
                            </div>
                            <br>
                            <p class="text-center">Lorem ipsum is simply dummy text of the<br>
                                printing and industry</p>
                            <br>
                            <p class="text-center" style="font-size: 40px;"><sup>$</sup><b>150</b>
                                <sub>/mo</sub>
                            </p>
                            <br>
                            <button type="button"
                                class="btn btn-square btn-outline-primary font-weight-bold mx-auto d-block">START
                                FREE
                                TRIAL</button>
                            <br><br>
                            <ul style="tick-bullets">
                                <li><i class="bi-check small-icon" style="color: blue;"></i>Cras justo odio.
                                </li>
                                <br>
                                <li><i class="bi-check small-icon" style="color: blue;"></i>Daoibus ac facillis
                                    in.
                                </li>
                                <br>
                                <li><i class="bi-check small-icon" style="color: blue;"></i>Morbi leo risus.
                                </li>
                                <br>
                                <li><i class="bi-check small-icon" style="color: blue;"></i>Expecteur sint
                                    occaecat
                                    velit.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="vision">
        <div class="container">
            <h2><strong>We love to make perfect<br>
                    solutions for your business
                </strong></h2><br>
            <p>Why l say old chap that is, spiffing off his nut cor blimey guvnords geeza<br>
                bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around<br>
                chesed of bum bag old lost the pilot say there spiffing off his nut.
            </p><br>
            <a href="#who-we-are"> <button type="button"
                    class="btn btn-square text-white btn-outline-light font-weight-bold">GET
                    STARTED</button></a>
        </div>
    </footer>

    <script>
    const image = document.getElementById('myImage');
    const images = image.getAttribute('data-images').split(',');
    let currentIndex = 0;


    image.addEventListener('click', () => {
        currentIndex += 1;
        if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        image.src = images[currentIndex];
    });
    </script>

    <script>
    const image1 = document.getElementById('myImage1');
    const images1 = image.getAttribute('data1-images').split(',');
    let currentIndex1 = 0;


    image1.addEventListener('click', () => {
        currentIndex1 += 1;
        if (currentIndex1 >= images1.length) {
            currentIndex1 = 0;
        }
        image1.src = images1[currentIndex1];
    });
    </script>

    <script src="{{asset('js/slim.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>