<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="storage/js/jquery.min.js"></script>
    <script src="storage/js/boostrap.min.js"></script>
    <script src="storage/js/popper.min.js"></script>
    <link rel="shortcut icon" href="/storage/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/storage/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="storage/css/app.css">
    <script src="/js/app.js"></script>


    <link href="/css/app.css" type="text/css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hausmeisterservice</title>

    <style>
        @import url('https://fonts.cdnfonts.com/css/saysomething');
        @import url('http://fonts.cdnfonts.com/css/antipasto-pro');

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

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top" id="nav">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

                <img src="storage/icons/icon.png" width="75" height="75" id="opacityAnimation" alt>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
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
        <div class="container">
            <h1 class="text-center shake"><u>Dienstleistungen </u>&nbsp;<i style="font-size: 1.5rem;" class="fa-solid fa-briefcase"></i></h1>
            <div class="row align-items-end">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 470px;">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-solid fa-hand-sparkles"></i>
                            <h4 class="card-title mt-3">Gartenpflege</h4>
                            <h5 class="card-title mt-3"> <i>Wir wissen mit dem Grünen Daumen umzugehen</i></h5>
                            <p class="card-text mt-3">Gartenanlagen sind auf eine adäquate Pflege und Betreuung angewiesen. Auch
                                diese Arbeiten beherrschen wir und übernehmen diese gerne für Sie. Ein gemähter
                                Rasen, gestützte Büsche und Bäume runden die Optik und somit das Ambiente
                                Ihrer Immobilie. Teilen Sie uns Ihre Wünsche mit und wir setzen diese um, sodass
                                Sie jeden Blick auf Ihre Grünanlage genießen werden.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 690px;">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-solid fa-snowflake"></i>
                            <h4 class="card-title mt-3">Winterdienst</h4>
                            <h5 class="card-title mt-3"> <i>Ein sicherer Winter</i></h5>

                            <p class="card-text mt-3">Die Schaffung eines sicheren Gehwegs rund um Ihr Gebäude ist eine große
                                Verantwortung. Durch die Übernahme dieser Verantwortung sorgen wir mit unserer
                                Arbeit, dass Sie sicher durch den Winter kommen. Der zunehmende Klimawandel
                                wirkt sich auch auf den Winter aus, sodass dieser immer unberechenbarer ist.
                                Umso schöner ist es zu wissen, dass Sie einen zuverlässigen Partner an Ihrer Seite
                                haben, der in den Startlöchern steht, um in der Winterzeit die Enteisung und die
                                Räumung von Schnee übernimmt. Die Räumung wird nach den aktuellen
                                Bestimmungen in Ihrer Gemeinde durchgeführt. Hierbei werden ebenfalls die
                                Verkehrsflächen und Gehwege gestreut, sodass die Bildung von Schnee- und
                                Eisglätte vermieden wird.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 870px;">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-solid fa-user-shield"></i>
                            <h4 class="card-title mt-3">Objektbetreung</h4>
                            <p class="card-text mt-3">Im Rahmen der Betreuung Ihres Objektes machen wir uns zu Beginn mit der
                                Technik Ihrer gesamten Immobilie vertraut, sodass wir diese bedienen und adäquat
                                betreuen können. Im Regelmäßen Intervallen führen wir Wartungsarbeiten an den
                                technischen Geräten Ihrer Immobilie durch. Hierdurch wird die Vermeidung von
                                Ausfällen sowie die langfristige Reduktion von Reparatur- und
                                Instandhaltungskosten sichergestellt.
                                Sollten Sie Projekte an bzw. in Ihrer Immobilie durchführen, steht Ihnen unsere
                                Dienstleistung als Projektmanagement ebenfalls zur Verfügung. Im Rahmen von
                                der Modernisierung Ihrer Anlagen, Renovierungs- und Umbauarbeiten unterstützen
                                wir Sie bei der Einholung von Angeboten sowie der Kalkulation von Fachfirmen.
                                Hierbei arbeiten wir sowohl mit den von Ihnen beauftragten Firmen als auch mit
                                unseren Partnern. Unter der Kategorie Objektbetreuung stellen wir ebenfalls die
                                Überwachung und die Sicherheit Ihrer Immobilie sicher und begutachten
                                unterschiedliche Anlagen, wie beispielsweise Aufzüge, Heizungen und viele weitere
                                Anlagen.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 370px;">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-solid fa-broom"></i>

                            <h4 class="card-title mt-3">Entrümpelung</h4>
                            <h5 class="card-title mt-3"> <i>Auch bei den unangenehmen Arbeiten können Sie auf uns zählen</i></h5>
                            <p class="card-text mt-3">Es tritt nicht allzu selten auf, dass in einem Haus oder einer Wohnung eine Vielzahl
                                an Dingen über viele Jahre hinweg gesammelt werden. Hierbei übernehmen wir die
                                häufig aufwendigen und mühsamen Entrümpelungsarbeiten.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 370px;">
                        <div class="card-body">
                            <i class="as servicesIcon fa-solid fa-circle-question"></i>
                            <h4 class="card-title mt-3">Dienstleistung jeglicher Art</h4>
                            <p class="card-text mt-3">Ist in unserem Dienstleistungsportfolio nicht das richtige dabei gewesen?
                                Dann senden Sie uns eine Anfrage über unser Anfragenformular oder kontaktieren
                                Sie uns einfach und lassen Sie sich ein unverbindliches Angebot zu der von Ihnen
                                gewünschten Dienstleistung zukommen.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText" style="height: 370px;">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-wrench'></i>
                            <h4 class="card-title mt-3">Kleine Reparaturen</h4>
                            <p class="card-text mt-3">Egal, ob kleinere Malerarbeiten (Ausbessern), die Montage einer Waschmaschine
                                oder die Einstellung der Heizung. Kleine Reparaturarbeiten werden von uns im
                                Handumdrehen schnell und kompetent durchgeführt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 offset-md-4 ">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-solid fa-spray-can-sparkles"></i>
                            <h4 class="card-title mt-3">Objektreinigung</h4>
                            <h5 class="card-title mt-3"><i>Ein gepflegter Zustand führt zu Zufriedenheit</i></h5>

                            <p class="card-text mt-3">Dieser Leitsatz gilt sowohl am Arbeitsplatz als auch in Ihrem Eigenheim. Gepflegte
                                Räumlichkeiten sorgen nicht nur für Ihr Wohlbefinden. Vielmehr trägt es zu einem
                                positiven Eindruck Ihrer Immobilie bei. Durch die Reinigung von Treppenhäusern,

                                Tiefgaragen, Kellern und weiteren Allgemeinflächen übernehmen wir die
                                Verantwortung zur Sicherstellung einer wohlfühlenden und gemütlichen Immobilie.
                                Unsere detailorientierte Arbeit richtet sich nicht nur auf die Bodenfläche. Hierin sind
                                auch die Türen, Geländer, Fenster, Briefkästen und alles was zu einem Gebäude
                                zählt enthalten. Für die Reinigung Ihrer Arbeitsräume werden wir im Rahmen der
                                Anforderungsanalyse auf Ihre Bedürfnisse eingehen, sodass unsere
                                Reinigungsarbeiten nicht zur Störung Ihrer Arbeit führen werden.</p>
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
                        <img class="card-img-top" src="storage/images/a.jpeg" alt="Card image" style="width:100%">
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
                        <img class="card-img-top" src="storage/images/b.jpeg" alt="Card image" style="width:100%;">
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
                        <img class="card-img-top" src="storage/images/c.jpeg"" alt=" Card image">
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
                        <img class="card-img-top" src="storage/images/d.jpeg"" alt=" Card image" style="width:100%">
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
                        <img class="card-img-top" src="storage/images/e.jpeg"" alt=" Card image" style="width:100%;">
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
                        <img class="card-img-top" src="storage/images/f.jpeg"" alt=" Card image" style="width:100%">
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
                <figure class="shadow"><img src="storage/images/1.jpg" /></figure>
                <figure class="shadow"><img src="storage/images/2.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/3.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/4.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/5.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/6.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/7.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/8.jpeg" /></figure>
                <figure class="shadow"><img src="storage/images/9.jpeg" /></figure>
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
                    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:500px;height:500px;">
                        <div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Hansaring+32,+Köln&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
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
                                    <button id="closeBtn" class="Message-button js-messageClose">Okay</button>
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
                        <!-- <div class="select-block">
                                <label>Dropdown 1</label>
                                <div class="custom-select">
                                    <div class="active-list">0</div>
                                    <input type="text" class="list-field" value="0" />
                                    <ul class="drop-down-list">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                    </ul>
                                </div>
                            </div> -->
                        <!-- <div class="select-block">
                                <label>Dropdown 2</label>
                                <div class="custom-select">
                                    <div class="active-list">0</div>
                                    <input type="text" class="list-field" value="0" />
                                    <ul class="drop-down-list">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                    </ul>
                                </div>
                            </div> -->
                        <div class="input-block floating-field textarea">
                            <label>Hinterlassen sie eine Nachricht...</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                        </div>
                        <button class="btn square-button material-btn" id="formButton" disabled>Senden</button>
                        </form>
                    </section>

                    <!-- follow me template -->
                    <!-- <div class="made-with-love">
                        <a target="_blank" href="#">Dogan Teke</a> | copyright &copy; 2022 | All rights reserved.
                    </div> -->

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
    //sends formular if clicked

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    validate = () => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    }

    $(document).ready(function() {
        $("#hoverme").hover(function() {
            console.log('Amk')
            $('#modal').modal();
        });
    });
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the el that opens the modal
    var trigger = document.getElementById("hoverme");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    trigger.onmouseover = function() {
        modal.style.display = "block";
    }



    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    var element = $('.floating-chat');
    var myStorage = localStorage;

    if (!myStorage.getItem('chatID')) {
        myStorage.setItem('chatID', createUUID());
    }

    setTimeout(function() {
        element.addClass('enter');
    }, 1000);

    element.click(openElement);

    function openElement() {
        var messages = element.find('.messages');
        var textInput = element.find('.text-box');
        element.find('>i').hide();
        element.addClass('expand');
        element.find('.chat').addClass('enter');
        var strLength = textInput.val().length * 2;
        textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
        element.off('click', openElement);
        element.find('.header button').click(closeElement);
        element.find('#sendMessage').click(sendNewMessage);
        messages.scrollTop(messages.prop("scrollHeight"));
    }

    function closeElement() {
        element.find('.chat').removeClass('enter').hide();
        element.find('>i').show();
        element.removeClass('expand');
        element.find('.header button').off('click', closeElement);
        element.find('#sendMessage').off('click', sendNewMessage);
        element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
        setTimeout(function() {
            element.find('.chat').removeClass('enter').show()
            element.click(openElement);
        }, 500);
    }

    function createUUID() {
        // http://www.ietf.org/rfc/rfc4122.txt
        var s = [];
        var hexDigits = "0123456789abcdef";
        for (var i = 0; i < 36; i++) {
            s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
        }
        s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
        s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
        s[8] = s[13] = s[18] = s[23] = "-";

        var uuid = s.join("");
        return uuid;
    }

    function sendNewMessage() {
        var userInput = $('.text-box');
        var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

        if (!newMessage) return;

        var messagesContainer = $('.messages');

        messagesContainer.append([
            '<li class="self">',
            newMessage,
            '</li>'
        ].join(''));

        // clean out old message
        userInput.html('');
        // focus on input
        userInput.focus();

        messagesContainer.finish().animate({
            scrollTop: messagesContainer.prop("scrollHeight")
        }, 250);
    }

    function onMetaAndEnter(event) {
        if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
            sendNewMessage();
        }
    }
    const cards = document.querySelectorAll('.cards');

    const setClasses = () => {
        const classes = ['left', 'active', 'right'];
        cards.forEach((card, index) => card.classList.add(classes[index]))
    }


    const changePositions = (e) => {
        const clickedCard = e.currentTarget
        const activeCard = document.querySelector('.cards.active')
        if (clickedCard.classList.contains('active')) return;
        const classesFrom = e.currentTarget.className
        const classesTo = activeCard.className
        clickedCard.className = classesTo
        activeCard.className = classesFrom
    }

    cards.forEach((card) => {
        card
            .addEventListener('click', changePositions)
    })

    setClasses();

    if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
        // if pc user

        var bgImage = document.getElementById('home');
        bgImage.className = 'bgimageDesktop'
        document.getElementById("ficons1").style.display = 'none';

    } else {
        document.getElementById("ficons").style.display = 'none';

    }
    $(document).ready(function() {
        if ($(window).width() > 991) {
            $('.navbar-light .d-menu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
            });
        }
    });

    const scrollDown = () => {
        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#about').offset().top
        }, 200, 'swing');
    }

    $(function() {
        $('a[href*=\\#]:not([href=\\#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });
    });

    document.querySelectorAll("#nav-link")
        .forEach(function(el) {
            el.onclick = function() {
                console.log(this.id)
                $('.navbar-collapse').collapse('hide');
            }
        })


    const messageClose = document.querySelectorAll('.Message-close');
    const messages = document.querySelectorAll('.Message')

    messageClose.forEach(message => {
        message.addEventListener('click', function handleClick(event) {
            console.log('message clicked', event);
            $(messages).remove();


            message.setAttribute('style', 'background-color: yellow;');
        });
    });


    function closeMessage(el) {
        el.addClass('is-hidden');
    }

    function openSubpage() {
        setTimeout(function() {
            window.open('https://www.koeln.de/branchen/eintrag/3144/hausverwaltungen/curata-wohnungsverwaltungsgesellschaft-mbh', '_blank')
        }, 1100)
    }



    $('#js-helpMe').on('click', function(e) {
        alert('Versuch es bitte nochmal auszufüllen!');
        closeMessage($(this).closest('.Message'));
    });

    $('#js-authMe').on('click', function(e) {
        alert('Kontaktieren Sie uns über unser Formular!');
        $("#regular").remove();

        closeMessage($(this).closest('.Message'));
    });

    $('#closeBtn').on('click', function(e) {
        $("#regular").remove();

        closeMessage($(this).closest('.Message'));
    });


    $(document).ready(function() {
        setTimeout(function() {
            closeMessage($('#js-timer'));
        }, 5000);
    });

    if ($('#success').length > 0) {
        $("#regular").remove();
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#success").offset().top - 50
        }, 2000);
    }

    if ($('#error').length > 0) {
        $("#regular").remove();
        $("#regular").remove();
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#error").offset().top
        }, 2000);
    }


    var ranCards = document.getElementsByClassName("card servicesText");
    var previousRandomCard = null

    function repeatOften() {
        if (previousRandomCard) previousRandomCard.classList.toggle('randomCard')
        var random = Math.floor(Math.random() * (ranCards.length - 1)) + 0;
        var randomCard = ranCards[random];
        randomCard.classList.toggle('randomCard');
        previousRandomCard = randomCard;
        setTimeout(repeatOften, 5000);
    }
    repeatOften();

    var floatingField = $(".material-form .floating-field").find(".form-control");
    var formItem = $(".material-form .input-block").find(".form-control");

    //##case 1 for default style
    //on focus
    formItem.focus(function() {
        $(this).parent(".input-block").addClass("focus");
    });
    //removing focusing
    formItem.blur(function() {
        $(this).parent(".input-block").removeClass("focus");
    });

    //##case 2 for floating style
    //initiating field
    floatingField.each(function() {
        var targetItem = $(this).parent();
        if ($(this).val()) {
            $(targetItem).addClass("has-value");
        }
    });

    //on typing
    floatingField.blur(function() {
        $(this).parent(".input-block").removeClass("focus");
        //if value is not exists
        if ($(this).val().length == 0) {
            $(this).parent(".input-block").removeClass("has-value");
        } else {
            $(this).parent(".input-block").addClass("has-value");
        }
    });

    //dropdown list
    $("body").click(function() {
        if ($(".custom-select .drop-down-list").is(":visible")) {
            $(".custom-select").parent().removeClass("focus");
        }
        $(".custom-select .drop-down-list:visible").slideUp();
    });
    $(".custom-select .active-list").click(function() {
        $(this).parent().parent().addClass("focus");
        $(this)
            .parent()
            .find(".drop-down-list")
            .stop(true, true)
            .delay(10)
            .slideToggle(300);
    });
    $(".custom-select .drop-down-list li").click(function() {
        var listParent = $(this).parent().parent();
        //listParent.find('.active-list').trigger("click");
        listParent.parent(".select-block").removeClass("focus").addClass("added");
        listParent.find(".active-list").text($(this).text());
        listParent.find("input.list-field").attr("value", $(this).text());
    });

    // var ratio = window.devicePixelRatio || 1;
    // var w = screen.width * ratio;
    // var h = screen.height * ratio;
    // console.log(ratio, w, h);
</script>