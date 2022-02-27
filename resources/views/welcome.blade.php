<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake-slow.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hausmeisterservice</title>

    <!-- Fonts -->
    <!-- Styles -->
    <style>
        /* Main Font */
        @font-face {
            font-family: 'myWebFont';
            src: url("fonts/mainFont.otf") format("opentype");
        }

        @font-face {
            font-family: 'secondFont';
            src: url("fonts/secondFont.otf") format("opentype");
        }

        body {
            font-family: 'myWebFont';
            background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%) !important;
        }



        /* hero background image */
        .bgimage {
            height: 100vh;
            background: url('https://cdn.dribbble.com/users/1129235/screenshots/10725431/media/df2f0777d2a22828ca67f19f1f2cec47.gif');
            background-size: cover;
            position: relative;

        }

        /* text css above hero image*/
        .hero_title {
            font-size: 4.5rem;
        }

        .hero_desc {
            font-size: 2rem;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            text-shadow: 2px 2px white;
            opacity: 0.8;
            font-family: 'myWebFont';
            background-image: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
        }

        .nav-item>a {
            font-family: 'myWebFont';
            font-size: 2.5rem;
            background-image: linear-gradient(110.3deg, rgba(238, 179, 123, 1) 8.7%, rgba(216, 103, 77, 1) 47.5%, rgba(114, 43, 54, 1) 89.1%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .nav-item>a:hover {
            font-family: 'myWebFont';
            font-size: 2.5rem;
            background-image: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;


        }

        .navbar-brand {
            font-family: 'myWebFont';
            font-size: 2.5rem !important;
            background: -webkit-linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        /* about section image css */
        .imageAboutPage {
            width: 100%;
            border-radius: 120px 20px 120px 20px;
            margin-bottom: 20px;
        }

        .navbar-toggler {
            background-image: linear-gradient(110.3deg, rgba(238, 179, 123, 1) 8.7%, rgba(216, 103, 77, 1) 47.5%, rgba(114, 43, 54, 1) 89.1%) !important;
            border: 2px solid black !important;

            opacity: 0.7;
            display: none;

        }
        .navbar-toggler {
            background-image: linear-gradient(110.3deg, rgba(238, 179, 123, 1) 8.7%, rgba(216, 103, 77, 1) 47.5%, rgba(114, 43, 54, 1) 89.1%) !important;
            border: 2px solid black !important;

            opacity: 0.7;
            display: none;

        }
        .navbar-toggler-icon>p {
            font-size: 1.5em;
            background-color: white;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .navbar-toggler-icon {
            width: 4em !important;
        }

        /* services section css */
        .servicesText.card {
            height: 740px;
            cursor: pointer;
        }

        .servicesIcon {
            font-size: 36px;
            text-align: center;
            width: 100%;
        }

        .card-title {
            text-align: center;
        }

        .card:hover .servicesIcon {
            background-color: #FF9A8B;
            background-image: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%);


            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card:hover {
            color: #a85032;
            -webkit-text-stroke: 0.5px black;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(255, 229, 168, 1) 0%, rgba(251, 174, 222, 1) 100.7%);


        }

        .servicesText:hover {
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(255, 229, 168, 1) 0%, rgba(251, 174, 222, 1) 100.7%);

        }

        /* display background color black on navbar scroll */
        .navbarScroll.navbarDark {
            background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        }

        .navbarScroll.navbarLight {
            background-image: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
            opacity: 0.6;
        }


        /* social media icons styling */
        .social-icons {
            font-size: 36px;
            cursor: pointer;
        }

        .fa-facebook:hover,
        .fa-instagram:hover,
        .fa-twitter:hover,
        .fa-linkedin:hover,
        .fa-twitch:hover {
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .fab {
            color: white;
        }

        /* footer styling */
        #footer {
            background-color: orange;
            text-align: center;
        }

        /* spacing on all sections */
        #about,
        #services,
        #portfolio,
        #contact {
            margin-top: 4rem;
            padding-top: 4rem;
        }

        #contact {
            padding-bottom: 4rem;
        }

        #services,
        #about,
        #contact,
        #portfolio {
            font-family: 'secondFont';
            font-size: 1rem;

        }

        .card-text {
            text-align: center;
        }

        @keyframes visible {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        #opacityAnimation {
            animation: visible 4s infinite;
        }

        .input-group-text,
        .btn {
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            color: black !important;
        }

        .btn:hover {
            color: black !important;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(253, 193, 104, 1) 0%, rgba(251, 128, 128, 1) 90%);
        }


        #card:hover {
            -ms-transform: scale(1.1);
            /* IE 9 */
            -webkit-transform: scale(1.1);
            /* Safari 3-8 */
            transform: scale(1.1);
        }

        #card {
            -ms-transform: scale(0.9);
            /* IE 9 */
            -webkit-transform: scale(0.9);
            /* Safari 3-8 */
            transform: scale(0.9);
        }

        #spacedown {
            margin-bottom: 3rem;
        }

        #highlight {
            position: fixed;
            top: 50%;
            width: 100%;
            background-color: #ccff00;
            height: 30px;
            z-index: -1;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        h1 {
            font-size: 3rem !important;
            bottom: 50px !important;
            position: relative  !important;

        }
    </style>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
    <div id="app"></div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-xs navbar-expand-lg    fixed-top navbarScroll">
        <div class="container">
            <a id="icon" class="navbar-brand" href="#">
                <div id="opacityAnimation"><img src="imgs/icon.png" class="rounded mx-auto d-block" height="100px" width="100px"></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                    <h2 class="hero_title">Herzlich Willkommen </h2>
                    <p class="hero_desc">bei Hausmeisterservice Augustin
                </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div id="aboutText" class="container mt-4 pt-4">
            <h1 class="text-center">Über Uns&nbsp;<i class="fa-solid fa-people-carry-box"></i></h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="https://img.freepik.com/free-photo/team-janitors-cleaning-office_392895-8040.jpg?size=626&ext=jpg" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p>Als Hausmeisterservice bieten wir für Gewerbekunden als auch privaten
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
                    {{-- <div id="endAbout" class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: David Parker</li>
                                <li>Age: 28</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Name: David Parker</li>
                                <li>Age: 28</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div> --}}
                </div>
            </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="container">
            <h1 class="text-center">Unsere Dienstleistungen &nbsp;<i class="fa-solid fa-briefcase"></i></h1>
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
            <h1 class="text-center">Portfolio&nbsp;<i id="hoverme" onclick="document.getElementById('myModal').style.display = 'block';" class="fa-solid fa-circle-info"></i></h1>
            <div class="row">
                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card">
                        <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/static.koeln.de/000/000/003/049/versions/curata-logo_5be44378872ba_556x110_5be4437a872f3.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">CURATA
                            </h4>
                            <p class="card-text">
                                Wohnungsverwaltungsgesellschaft mbH
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/3144/hausverwaltungen/curata-wohnungsverwaltungsgesellschaft-mbh', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/static.koeln.de/000/000/002/748/versions/903eff25eeb42661be88bbd8eb4414ad_150x67_59cef6af20d03.png" alt="Card image" style="width:100%; height: 74px;">
                        <div class="card-body">
                            <h4 class="card-title">HAUSGRUND</h4>
                            <p class="card-text"> GmbH Hausverwaltung in Köln</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/2830/hausverwaltungen/hausgrund-gmbh', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/static.koeln.de/000/000/001/659/versions/logo-muench-solo_207x207_5a99494920ab1.png" alt="Card image" style="width:100%; height: 74px;">
                        <div class="card-body">
                            <h4 class="card-title">Münch </h4>
                            <p class="card-text">Wohnungsverwaltung GmbH</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/1661/hausverwaltungen/muench-wohnungsverwaltung-gmbh', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/static.koeln.de/000/000/038/586/versions/logo556_527x110_5be1680f7362f.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">
                                Schleumer
                            </h4>
                            <p class="card-text">Immobilien Treuhand Verwaltungs-OHG</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/45057/hausverwaltungen/schleumer-immobilien-treuhand-verwaltungs-ohg', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Activa_logo.jpg" alt="Card image" style="width:100%; height: 74px;">
                        <div class="card-body">
                            <h4 class="card-title">ACTIVA</h4>
                            <p class="card-text">Hausverwaltungs-GmbH
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/29160/hausverwaltungen/activa-hausverwaltungs-gmbh', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="smaller" class="col-sm-4 mt-4">
                    <div id="card" class="card portfolioContent">
                        <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/static.koeln.de/000/000/037/161/versions/logo-mit-hintergrund_556x110_5a955199019e5.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Greif & Contzen</h4>
                            <p class="card-text">Immobilien GmbH</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-dark" onclick="window.open('https://www.koeln.de/branchen/eintrag/43434/immobilienmakler/greif-contzen-immobilien-gmbh', '_blank')">Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button trigger modal
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button> -->

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

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Kontakt&nbsp;<i class="fa-solid fa-address-card"></i></h1>

            <div class="row mt-4">
                <div class="col-lg-6" id="spacedown">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:500px;height:500px;">
                        <div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Hansaring+32,+Köln&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlehtml" rel="nofollow" href="https://www.embed-map.com" id="grab-mapdata">https://www.embed-map.com</a>
                        <style>
                            .map-generator {
                                max-width: 100%;
                                max-height: 100%;
                                background: none;
                            }
                        </style>
                    </div>
                </div>


                <div class="col-lg-6">
                    <!-- form fields -->

                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error')}}
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                    @endif


                    <form id="form" name="contact" action="{{url('sendFormular')}}" class="needs-validation" method="post">
                        @csrf

                        <input type="text" class="form-control mb-3 form-control-lg" name="name" placeholder="Name, Vorname" required>

                        <div class="input-group  mb-3 input-group-lg">
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                            <span class="input-group-text" id="basic-addon1">@</span>

                        </div>

                        <div class="input-group  mb-3 input-group-lg">
                            <select name="service" class="form-select" id="inputGroupSelect02" required>
                                <option selected value="">Auswählen...</option>
                                <option value="Gartenpflege">Gartenpflege</option>
                                <option value="Winterdienst">Winterdienst</option>
                                <option value="Objektbetreung">Objektbetreung</option>
                                <option value="Entrümpelung">Entrümpelung</option>
                                <option value="Klein Reparaturen">Klein Reparaturen</option>
                                <option value="Objektreinigung">Objektreinigung</option>
                                <option value="Sonstiges">Sonstiges</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Service</label>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                            <input type="number" name="phonenumber" class="form-control" placeholder="+49....">
                        </div>
                        <div class=" input-group-lg mt-3">
                            <textarea name="description" class="form-control" rows="5" id="comment" name="text" placeholder="Weitere Infos" required></textarea>
                        </div>
                        <button class="btn btn-dark mt-3" type="submit">Senden</button>

                    </form>

                </div>

            </div>
        </div>
    </section>


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
    // Adds Title for Mobile Navbar
    var el = document.getElementsByClassName('navbar-toggler-icon')[0]

    if (el) {
        const para = document.createElement("p");
        const node = document.createTextNode("Menu");
        para.appendChild(node);
        el.appendChild(para);

    }


    // Adds class navbarDark on navbar scroll
    const header = document.querySelector('.navbar');

    const navButton = document.querySelector('.navbar-toggler')

    window.onscroll = function() {
        var top = window.scrollY
        navButton.style.display = "none"


        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && top > 99) {
            navButton.style.display = "flex"
        }
        if (top >= 100) {
            header.classList.add('navbarDark');
        } else {
            header.classList.remove('navbarDark');
        }
    }


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

    // When the user clicks anywhere outside of the modal, close it
    /*   window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
 */
    // var highlight = document.querySelector("#highlight");

    // window.addEventListener('scroll', function(e) {
    //     var y = window.scrollY;
    //     var offset = y % 30;
    //     highlight.style.marginTop = -y % 30 + "px";

    // });
</script>