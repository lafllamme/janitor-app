<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/storage/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/storage/icons/favicon.ico" type="image/x-icon">
    <script src="js/app.js" defer></script>
    <script src="js/scripts.js" defer></script>
    <script src="storage/js/jquery.min.js"></script>
    <script src="storage/js/bootstrap.min.js" defer></script>
    <link href="css/app.css" type="text/css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hausmeisterservice</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/saysomething');

        @import url('http://fonts.cdnfonts.com/css/antipasto-pro');

        @import url('http://fonts.cdnfonts.com/css/amoitar');

        /* Main Font */
        @font-face {
            font-family: 'myWebFont';
            src: url("fonts/mainFont.otf") format("opentype");
        }

        @font-face {
            font-family: 'secondFont';
            src: url("fonts/secondFont.otf") format("opentype");
        }
    </style>
    <!-- Fonts -->
    <!-- Styles -->
</head>

<body>
    <div id="app"></div>
    <div class="loader-wrapper">
        <div id="page">
            <div id="phrase_box">
                <svg width="100%" height="100%">
                    <defs>
                        <mask id="mask" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse">
                            <linearGradient id="linearGradient" gradientUnits="objectBoundingBox" x2="0" y2="1">
                                <stop stop-color="white" stop-opacity="0" offset="0%" />
                                <stop stop-color="white" stop-opacity="1" offset="30%" />
                                <stop stop-color="white" stop-opacity="1" offset="70%" />
                                <stop stop-color="white" stop-opacity="0" offset="100%" />
                            </linearGradient>
                            <rect width="100%" height="100%" fill="url(#linearGradient)" />
                        </mask>
                    </defs>
                    <g width="100%" height="100%" style="mask: url(#mask);">
                        <g id="phrases"></g>
                    </g>
                </svg>
            </div>
            <div id="footerNew">
                <div id="logo"></div>HM. AUGUSTIN
            </div>
        </div>
    </div>
    <div id="loading"></div>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top" id="nav">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

                <div class="box">
                    <img src="storage/icons/foreground.png" class="stack-top" alt>

                </div>
                <div class="box stack-top"">  
                <img id=" opacity" src="storage/icons/background.png" class="role" alt>
                </div>

            </a> <button class=" navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active"> <a class="nav-link" id="nav-link" href="#about"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home" id="far"></i></span>Über Uns</a> </li>
                    <li class="nav-item px-lg-2"> <a class="nav-link" id="nav-link" href="#services"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa" id="far"></i></span>Services</a> </li>
                    <li class="nav-item px-lg-2"> <a class="nav-link" id="nav-link" href="#home"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user" id="far"></i></i></span>Home</a> </li>

                    <li class="nav-item px-lg-2 dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Info
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" id="nav-link" href="#gallery">Galerie</a>
                            <a class="dropdown-item" id="nav-link" href="#portfolio">Portfolio</a>
                            <a class="dropdown-item" id="nav-link" href="#gallery">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item px-lg-2"> <a class="nav-link" id="nav-link" href="#contact"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Kontakt</a> </li>
                </ul>
                <ul class="navbar-nav mr-auto ml-auto ml-20 mt-3 mt-lg-0" id="ficons1">
                    <li class="nav-item"> <a class="nav-link" id="nav-link" href="#">
                            <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" id="nav-link" href="#">
                            <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" id="nav-link" href="#">
                            <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" id="nav-link" href="#">
                            <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                        </a> </li>
                </ul>
            </div>
            <ul class="navbar-nav mr-auto ml-auto ml-20 mt-3 mt-lg-0" id="ficons">
                <li class="nav-item"> <a class="nav-link" href="#">
                        <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">
                        <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">
                        <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                    </a> </li>
            </ul>




        </div>
    </nav>




    <!-- main banner -->
    <section class="bgimage" id="home">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text" onclick="scrollDown()">

                    <div id="div" class="hero_title" onclick="scrollDown()">Herzlich Willkommen</div>
                    <div id="div" class="hero_desc" onclick="scrollDown()">
                        <span>bei Hausmeisterservice Augustin</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div id="aboutText" class="container mt-4 pt-4">
            <h1 class="text-center shake"><u>Unser Team</u>&nbsp;<i style="font-size: 1.5rem;" class="fa-solid fa-people-carry-box"></i></h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="https://img.freepik.com/free-photo/team-janitors-cleaning-office_392895-8040.jpg?size=626&ext=jpg" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-8 mt-4">
                    <p style="text-align:center;">Als Hausmeisterservice bieten wir für Gewerbekunden als auch privaten
                        Haushalten eine große Auswahl an Dienstleistungen – von der Verwaltung und
                        Aufsicht von Wohnanlagen, über die Durchführung von kleinen Reparaturen,
                        Entrümpelungen und der Gartenpflege, bis hin zur Instandhaltung und Reinigung
                        Ihrer Immobilien.
                        Flexibilität, Kompetenz Zuverlässigkeit zeichnet uns aus. Die uns anvertrauten
                        Aufgaben werden stehts gewissenhaft und mit größter Sorgfalt durchgeführt. Wir
                        sind engagiert eine schnelle und zufriedenstellende Lösung für Ihr Problem zu
                        finden und verrichten unsere Arbeit zu Ihrer vollsten Zufriedenheit.
                        Mithilfe einer bewährten Anforderungsanalyse werden wir eine auf Ihre Wünsche
                        angepasste Lösung finden und Ihnen ein optimales Preis-Leistungs-Verhältnis
                        anbieten.

                    </p>
                </div>
            </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="row">
            <div class="container">
                <h1 class="text-center shake"><u>Dienstleistungen </u>&nbsp;<i style="font-size: 1.5rem;" class="fa-solid fa-briefcase"></i></h1>
                <div class="row justify-content-center">
                    <div class="col-lg-4 mt-4 ">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-solid fa-hand-sparkles"></i>
                                <h4 class="card-title mt-3">Gartenpflege</h4>
                                <h5 class="card-title mt-3"> <i>Wir wissen mit dem Grünen Daumen umzugehen</i></h5>
                                <p class="card-text">Gartenanlagen sind auf eine adäquate Pflege und Betreuung angewiesen. Auch
                                    diese Arbeiten beherrschen wir und übernehmen diese gerne für Sie. Ein gemähter
                                    Rasen, gestützte Büsche und Bäume runden die Optik und somit das Ambiente
                                    Ihrer Immobilie. Teilen Sie uns Ihre Wünsche mit und wir setzen diese um, sodass
                                    Sie jeden Blick auf Ihre Grünanlage genießen werden.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-solid fa-snowflake"></i>
                                <h4 class="card-title mt-3">Winterdienst</h4>
                                <h5 class="card-title mt-3"> <i>Ein sicherer Winter</i></h5>

                                <p class="card-text">Die Schaffung eines sicheren Gehwegs rund um Ihr Gebäude ist eine große
                                    Verantwortung. Durch die Übernahme dieser Verantwortung sorgen wir mit unserer
                                    Arbeit, dass Sie sicher durch den Winter kommen. Der zunehmende Klimawandel
                                    wirkt sich auch auf den Winter aus, sodass dieser immer unberechenbarer ist.
                                    Umso schöner ist es zu wissen, dass Sie einen zuverlässigen Partner an Ihrer Seite
                                    haben, ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-solid fa-user-shield"></i>
                                <h4 class="card-title mt-3">Objektbetreung</h4>
                                <p class="card-text">Ein gepflegter Zustand führt zu Zufriedenheit

                                    Dieser Leitsatz gilt sowohl am Arbeitsplatz als auch in Ihrem Eigenheim.
                                    Gepflegte Räumlichkeiten sorgen nicht nur für Ihr Wohlbefinden. Vielmehr
                                    trägt es zu einem positiven Eindruck Ihrer Immobilie bei. Durch die Reinigung von Treppenhäusern,
                                    Tiefgaragen, Kellern und weiteren Allgemeinflächen übernehmen wir die Verantwortung zur Sicherstellung einer wohlfühlenden und
                                    gemütlichen Immobilie. Unsere detailorientierte Arbeit richtet sich nicht nur auf die Bodenfläche. Hierin sind auch die Türen,
                                    Geländer, Fenster, Briefkästen und alles was zu einem Gebäude zählt enthalten. Für die Reinigung Ihrer Arbeitsräume werden wir im
                                    Rahmen der Anforderungsanalyse auf Ihre Bedürfnisse eingehen, sodass unsere Reinigungsarbeiten nicht zur Störung Ihrer Arbeit
                                    führen werden.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-solid fa-broom"></i>

                                <h4 class="card-title mt-3">Entrümpelung</h4>
                                <h5 class="card-title mt-3"> <i>Auch bei den unangenehmen Arbeiten können Sie auf uns zählen</i></h5>
                                <p class="card-text">Es tritt nicht allzu selten auf, dass in einem Haus oder einer Wohnung eine Vielzahl
                                    an Dingen über viele Jahre hinweg gesammelt werden. Hierbei übernehmen wir die
                                    häufig aufwendigen und mühsamen Entrümpelungsarbeiten.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">

                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class='fas servicesIcon fa-wrench'></i>
                                <h4 class="card-title mt-3">Kleine Reparaturen</h4>
                                <p class="card-text">Egal, ob kleinere Malerarbeiten (Ausbessern), die Montage einer Waschmaschine
                                    oder die Einstellung der Heizung. Kleine Reparaturarbeiten werden von uns im
                                    Handumdrehen schnell und kompetent durchgeführt.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="servicesIcon fa-solid fa-dumpster-fire"></i>
                                <h4 class="card-title mt-3">Kontrollaufgaben</h4>
                                <h5 class="card-title mt-3"><i>Ein Beispieltitel könnte hier stehen</i></h5>

                                <p class="card-text">Wir behalten den Überblick

                                    Im Rahmen der Kontrollaufgaben übernehmen wir die Kontrolle und Bedienung der Heizungsanlagen und der Warmwasserversorgung. Zudem übernehmen wir die Organisation
                                    der Müllentsorgung, indem wir diese so bereitstellen, dass die Müllcontainer von der Müllabfuhr geleert werden können und Ihre Mülltonnen anschließend gereinigt
                                    am richtigen Ort stehen </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class=" servicesIcon fa-solid fa-book-open-reader"></i>
                                <h4 class="card-title mt-3">Service 1</h4>
                                <h5 class="card-title mt-3"><i>Ein Beispieltitel könnte hier stehen</i></h5>

                                <p class="card-text">Hier könnte eine passende Beschreibung stehen.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="as servicesIcon fa-solid fa-circle-question"></i>
                                <h4 class="card-title mt-3">Dienstleistung jeglicher Art</h4>
                                <p class="card-text">Ist in unserem Dienstleistungsportfolio nicht das richtige dabei gewesen?
                                    Dann senden Sie uns eine Anfrage über unser Anfragenformular oder kontaktieren
                                    Sie uns einfach und lassen Sie sich ein unverbindliches Angebot zu der von Ihnen
                                    gewünschten Dienstleistung zukommen.</p>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        </div>

    </section>


    <!-- portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center shake" style="margin-top: -75px;"><u>Portfolio</u>&nbsp;<i style="font-size: 1.5rem;" id="hoverme" onclick="document.getElementById('myModal').style.display = 'block';" class="fa-solid fa-circle-info"></i></h1>
            <div class="row">
                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card">
                        <img class="card-img-top" src="storage/images/a.webp" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">CURATA
                            </h4>
                            <p class="card-text">
                                Wohnungsverwaltungsgesellschaft mbH
                            </p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="storage/images/b.webp" alt="Card image" style="width:100%;">
                        <div class="card-body">
                            <h4 class="card-title">HAUSGRUND</h4>
                            <p class="card-text"> GmbH Hausverwaltung in Köln</p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="storage/images/c.webp"" alt=" Card image">
                        <div class="card-body">
                            <h4 class="card-title">Münch </h4>
                            <p class="card-text">Wohnungsverwaltung GmbH</p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>

                            <svg style="display:none" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="storage/images/d.webp"" alt=" Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">
                                Schleumer
                            </h4>
                            <p class="card-text">Immobilien Treuhand Verwaltungs-OHG</p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="storage/images/e.webp"" alt=" Card image" style="width:100%;">
                        <div class="card-body">
                            <h4 class="card-title">ACTIVA</h4>
                            <p class="card-text">Hausverwaltungs-GmbH
                            </p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="storage/images/f.webp"" alt=" Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Greif & Contzen</h4>
                            <p class="card-text">Immobilien GmbH</p>
                            <div class="text-center">
                                <button class="blob-btn" onclick="openSubpage()">
                                    Info <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Das sind einige unser Kunden, mit denen wir bereits gearbeitet haben!</p>
                    </div>

                </div>
            </div>
    </section>

    <section id="gallery"">
        <section id=" slideshow">
        <h1 class="text-center shake" style="margin-top: 6rem;"><u>Galerie</u>&nbsp;<i style="font-size: 2rem;" class="fa-solid fa-images"></i></h1>

        <div class="entire-content">
            <div class="content-carrousel">
                <figure class="shadow"><img src="storage/images/1.webp" /></figure>
                <figure class="shadow"><img src="storage/images/2.webp" /></figure>
                <figure class="shadow"><img src="storage/images/3.webp" /></figure>
                <figure class="shadow"><img src="storage/images/4.webp" /></figure>
                <figure class="shadow"><img src="storage/images/5.webp" /></figure>
                <figure class="shadow"><img src="storage/images/6.webp" /></figure>
                <figure class="shadow"><img src="storage/images/7.webp" /></figure>
                <figure class="shadow"><img src="storage/images/8.webp" /></figure>
                <figure class="shadow"><img src="storage/images/9.webp" /></figure>
            </div>
        </div>
    </section>
    </section>


    <!-- contact section-->
    <section>
        <div class="container">
            <h1 class="text-center shake mt-11" style="margin-top: 16rem;"><u>Kontakt</u>&nbsp;<i style="font-size: 2rem;" class="fa-solid fa-address-card"></i></h1>

            <div class="row">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div id="increaseSize" style="border-radius: 20px; border: 3px solid orange; width:100%;list-style:none; transition: none;overflow:hidden;width:23rem;height:30rem;">
                        <div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Im+Spichelsfeld+173+53757+Sankt+Augustin&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                            </iframe>
                        </div><a class="googlehtml" rel="nofollow" href="https://www.embed-map.com" id="grab-mapdata">https://www.embed-map.com</a>
                        <style>
                            .map-generator {
                                max-width: 100%;
                                max-height: 100%;
                                background: none;
                            }
                        </style>
                    </div>

                    
                </div>



                <div class="col-lg-6 p9" id="contact">
                    <div class="d-flex justify-content-center">

                        <div id="regular" class="Message Message--orange">
                            <div class="Message-icon">
                                <i class="fa-solid fa-bell shake"></i>
                            </div>
                            <div class="Message-body">
                                <p>Beschreiben Sie ihr Anliegen!
                                </p>
                                <p class="u-italic">Brauchen Sie Hilfe?</p>
                                <div class="mx-auto" style="width: 200px;"><button class=" Message-button" id="js-authMe">Ja</button>
                                    <button class="Message-button js-messageClose" id="closeBtn">Schließen</button>
                                </div>
                            </div>
                            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    <!-- form fields -->


                    @if(Session::has('error'))
                    <div class="d-flex justify-content-center">

                        <div id="error" class="Message Message--red">
                            <div class="Message-icon shake">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="Message-body">
                                <p> {{ Session::get('error')}}
                                </p>

                                <div class="mx-auto" style="width: 200px;"> <button class="Message-button" id="js-helpMe">Fehler?!</button>
                                    <button id="closeBtnErr" class="Message-button js-messageClose">Okay</button>
                                </div>
                            </div>
                            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    @endif

                    @if(Session::has('success'))
                    <div class="d-flex justify-content-center">

                        <div id="success" class="Message Message--green">
                            <div class="Message-icon shake">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="Message-body">
                                <p> {{ Session::get('success')}}
                                </p>
                            </div>
                            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    @endif

                    <section class="contact-wrap"">
                        <form class=" material-form needs-validation" id="form" name="contact" action="{{url('sendFormular')}}" method="post">
                        @csrf
                        <div class="input-block floating-field">
                            <label>Name, Vorname</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="input-block floating-field">
                            <label>Email</label>
                            <input name="email" value="ihre@email.com" type="text" class="form-control">
                        </div>
                        <!-- <div class="error-label">Email ID already exists.</div> -->
                        <!-- <div class="input-block">
                                <input placeholder="Enter Something" value="Non-Floating Field" type="text" class="form-control">
                            </div> -->
                        <div class="select-block">
                            <label>Services</label>
                            <div class="custom-select">
                                <div class="active-list">Auswahl...</div>
                                <input type="text" class="list-field" name="service" />
                                <ul class="drop-down-list">
                                    <li value="Gartenpflege">Gartenpflege</li>
                                    <li value="Winterdienst">Winterdienst</li>
                                    <li value="Objektbetreung">Objektbetreung</li>
                                    <li value="Entrümpelung">Entrümpelung</li>
                                    <li value="Klein Reparaturen<">Klein Reparaturen</li>
                                    <li value="Objektreinigung">Objektreinigung</li>
                                    <li value="Sonstiges">Sonstiges</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-note">Suchen Sie ihren gewählten Service.</div>
                        <div class="input-block floating-field">
                            <label>Telefonummer</label>
                            <input name="phonenumber" type="phone" class="form-control">
                        </div>

                        <label class="pure-material-checkbox mb-3">
                            <input type="checkbox" onclick="document.getElementById('formButton').disabled = !this.checked;">
                            <span>Einverstanden mit unseren AGB</span>
                        </label>
                        <div class="input-block floating-field textarea">
                            <label>Hinterlassen Sie eine Nachricht...</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                        </div>
                        <button class="btn square-button material-btn" id="formButton" disabled>Senden</button>
                        </form>
                    </section>

                </div>

            </div>
        </div>
    </section>
    <div class="floating-chat">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <div class="chat">
            <div class="header">
                <span class="title">
                    Wie können wir helfen?
                </span>
                <button>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>

            </div>
            <ul class="messages">
                <li class="other" onclick="document.location='/#contact';return false;">Nutzen Sie unser Formular!</li>
                <li class="other">Unsere Adresse ist:</li>
                <li class="other">Hansaring 32, 50670 Köln</li>
                <li class="other"><a>+491254373345</a></li>
            </ul>
            <div class="footer">
                <div class="text-box" contenteditable="true" disabled="true"></div>
                <button id="sendMessage">send</button>
            </div>
        </div>
    </div>

    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    // var ratio = window.devicePixelRatio || 1;
    // var w = screen.width * ratio;
    // var h = screen.height * ratio;
    // console.log(ratio, w, h);
</script>