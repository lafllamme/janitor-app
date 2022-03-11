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
    <!-- <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake-slow.min.css"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hausmeisterservice</title>


    <!-- Fonts -->
    <!-- Styles -->
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

        body {
            font-family: 'myWebFont';
            background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%) !important;
            width: 100%;
            overflow-x: hidden;
        }

        .navbar {
            font-family: 'Antipasto Pro', sans-serif !important;
        }


        a:active {
            background-color: #FBAB7E !important;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%) !important;
            border-radius: 1.2rem;
            color: black !important;
        }



        /* hero background image */
        .bgimage {
            height: 100vh;
            background: url('/storage/bg/b.gif');
            background-size: cover;
            position: relative;

        }


        /* hero pc background image */
        .bgimageDesktop {
            height: 100vh;
            background: url('/storage/bg/a.gif');
            background-size: cover;
            position: relative;

        }


        /* text css above hero image*/
        .hero_title {
            font-size: 3.5rem;


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
            opacity: 0.7;
            font-family: 'myWebFont';
            background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255, 255, 255, 0.50) 47%, rgba(0, 0, 0, 0.50) 100%);
            background-blend-mode: screen;
        }

        .hero-text:hover {
            text-align: center;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 2px 2px black;
            opacity: 0.6;
            font-family: 'myWebFont';
            background: black;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;

        }

        .nav-item>a {
            font-size: 1rem;
        }

        .dropdown-item {
            font-size: 1rem;


        }

        .nav-item>a:hover,
        .dropdown-item:hover {
            /* font-family: 'myWebFont'; */
            font-size: 1.5rem;
            font-weight: 600;
            color: #A53860 !important;
            -webkit-text-stroke: 0.5px black;
            transition: font 0.6s ease
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
            color: white
        }

        .card:hover {
            color: #a85032 !important;
            -webkit-text-stroke: 0.5px black !important;
            background: black !important;
            opacity: 0.9 !important;
            -webkit-transition: all 1s ease !important;
            -moz-transition: all 1s ease !important;
            -o-transition: all 1s ease !important;
            transition: all 1s ease !important;
            /* card */
        }

        .randomCard {

            /* color: linear-gradient(-60deg, #ff5858 0%, #f09819 100%) !important;
            -webkit-text-stroke: 0.5px black !important;
            opacity: 0.9 !important;

            background-image: linear-gradient(to top, #e6b980 0%, #eacda3 100%) !important; */

            color: #A53860 !important;
            -webkit-text-stroke: 0.5px black !important;
            background: #eab676 !important;
            opacity: 0.9 !important;
            -webkit-transition: all 2s ease !important;
            -moz-transition: all 2s ease !important;
            -o-transition: all 2s ease !important;
            transition: all 2s ease !important;

            /* card */

        }

        .servicesText:hover {
            background: black;
            opacity: 0.9;
        }

        /* display background color black on navbar scroll */
        .navbarScroll.navbarDark {
            background-image: linear-gradient(92.7deg, rgba(245, 212, 212, 1) 8.5%, rgba(252, 251, 224, 1) 90.2%) !important;
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
            background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }

        .fab {
            color: black;
        }

        .navbar-light {
            background: #C9CCD3;
            background-image: linear-gradient(-180deg, rgba(255, 255, 255, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%);
            background-blend-mode: lighten;
        }

        .far {
            color: black;
            margin-right: 1.2rem !important;
        }


        /* footer styling */
        #footer {
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            text-align: center;
        }

        /* spacing on all sections */

        #portfolio,
        #contact {
            margin-top: 4rem;
            padding-top: 4rem;
        }



        #services {
            padding-top: 2rem;
        }

        #contact {
            padding-bottom: 4rem;
        }

        #about,
        #gallery,
        #portfolio {
            font-family: 'secondFont', sans-serif;
            font-weight: 900;
            font-size: 1rem;
        }

        #services {
            font-family: 'secondFont', sans-serif;
            font-weight: 900;
            font-size: 0.95rem;
        }


        #contact {
            font-family: 'Roboto', sans-serif;

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
            line-height: 50px;
            height: 50px;
            text-align: center;
            cursor: pointer;
            background-color: #FBAB7E;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            color: black !important;
        }

        .btn:hover {
            color: black !important;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(253, 193, 104, 1) 0%, rgba(251, 128, 128, 1) 90%);
        }


        #card:hover {
            -ms-transform: scale(1.0);
            /* IE 9 */
            -webkit-transform: scale(1.0);
            /* Safari 3-8 */
            transform: scale(1.1);
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }

        #card {
            -ms-transform: scale(0.9);
            /* IE 9 */
            -webkit-transform: scale(0.9);
            /* Safari 3-8 */
            transform: scale(0.9);
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
            text-align: center;
            width: 80%;
            font-size: 1rem;

        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-align: end;

        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        h1 {
            font-size: 2.3rem !important;
            margin-bottom: 50px !important;
            position: flex !important;
            font-family: 'SaySomething', sans-serif;
            font-weight: 900;


        }

        .cardcontainer {
            max-width: 500px;
            margin: auto;
            display: flex;
            justify-content: center;
            margin-top: 2em;
            position: relative;
            margin-bottom: 125px;
            margin-top: 75px;

            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.5);
        }

        .cards {
            border-radius: 10px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
            position: absolute;
            width: 33.33%;
            transition: all 400ms ease;
            background-size: cover;
            background-position: center;
        }

        .cards:hover:not(.active).left {
            transform: translateX(-50%) rotate(-10deg) scale(0.9);
        }

        .cards:hover:not(.active).right {
            transform: translateX(50%) rotate(10deg) scale(0.9);
        }

        .cards.left {
            transform: translateX(-50%) scale(0.9);
        }

        .cards.right {
            transform: translateX(50%) scale(0.9);
        }

        .cards.active {
            z-index: 5;
            position: relative;
        }

        .cards__inner {
            position: relative;
            padding-bottom: 158.8235294118%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .gallery {
            width: 250px;
            height: 300px;
            line-height: 0;
            position: relative;
            transform-style: preserve-3d;
            transform: perspective(400px) rotateY(0deg);
            transition: 0.2s;
            margin: auto;
        }

        .gallery:hover {
            transform: perspective(450px) rotateY(25deg);
        }

        .gallery:hover div.box img {
            filter: blur(0px);
        }

        .box {
            position: absolute;
            top: 0;
            left: 0;
            transform-style: preserve-3d;
            transition: 0.2s;
            cursor: zoom-in;
        }

        .box:nth-of-type(1) {
            transform: translateZ(0px) translateX(0px);
        }

        .box:nth-of-type(2) {
            transform: translateZ(-40px) translateX(-40px);
        }

        .box:nth-of-type(2) img {
            filter: blur(1px);
        }

        .box:nth-of-type(3) {
            transform: translateZ(-80px) translateX(-80px);
        }

        .box:nth-of-type(3) img {
            filter: blur(2px);
        }

        .box:nth-of-type(4) {
            transform: translateZ(-120px) translateX(-120px);
        }

        .box:nth-of-type(4) img {
            filter: blur(3px);
        }

        .box:nth-of-type(5) {
            transform: translateZ(-160px) translateX(-160px);
        }

        .box:nth-of-type(5) img {
            filter: blur(4px);
        }

        .box:nth-of-type(6) {
            transform: translateZ(-200px) translateX(-200px);
        }

        .box:nth-of-type(6) img {
            filter: blur(5px);
        }

        .box:focus {
            transform: translateZ(120px) translateZ(0px);
            outline: none;
        }

        .box:focus img {
            filter: blur(0px);
        }

        #round {
            border-radius: 20px !important;

        }

        .dropdown-toggle::after {
            display: none !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        /* Font Awesome Icons have variable width. Added fixed width to fix that.*/
        .icon-width {
            width: 2rem !important;
        }

        .fa-brands,
        .fab {
            margin-right: 1.2rem !important;
        }




        .navbar-collapse {
            font-size: 1rem !important;
            margin-left: 0.5rem !important;
            margin-right: 0.5rem !important;


        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none;
        }

        #startButton:hover {
            background: rgba(253, 193, 104, 1) !important;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none !important;
        }

        @import url('https://fonts.googleapis.com/css?family=Roboto:300');


        #div {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }

        #div:first-of-type {
            /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
            animation: showup 7s infinite;
        }

        #div:last-of-type {
            width: 0px;
            animation: reveal 7s infinite;
        }

        #div:last-of-type span {
            margin-left: -355px;
            animation: slidein 7s infinite;
        }

        @keyframes showup {
            0% {
                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes slidein {
            0% {
                margin-left: -800px;
            }

            20% {
                margin-left: -800px;
            }

            35% {
                margin-left: 0px;
            }

            100% {
                margin-left: 0px;
            }
        }

        @keyframes reveal {
            0% {
                opacity: 0;
                width: 0px;
            }

            20% {
                opacity: 1;
                width: 0px;
            }

            30% {
                width: 355px;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                width: 355px;
            }
        }


        #p {
            font-size: 12px;
            color: #999;
            margin-top: 200px;
        }

        .shake {
            animation: shake-animation 4.72s ease infinite;
            transform-origin: 50% 50%;
        }

        .element {
            margin: 0 auto;
            width: 150px;
            height: 150px;
            background: red;
        }

        @keyframes shake-animation {
            0% {
                transform: translate(0, 0)
            }

            1.78571% {
                transform: translate(5px, 0)
            }

            3.57143% {
                transform: translate(0, 0)
            }

            5.35714% {
                transform: translate(5px, 0)
            }

            7.14286% {
                transform: translate(0, 0)
            }

            8.92857% {
                transform: translate(5px, 0)
            }

            10.71429% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(0, 0)
            }
        }

        .buttons {
            margin-top: 50px;
            text-align: center;
            border-radius: 30px;
            background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        }

        .blob-btn {
            z-index: 1;
            position: relative;
            padding: 20px 46px;
            text-align: center;
            text-transform: uppercase;
            color: black;
            font-size: 16px;
            font-weight: bold;
            background-color: transparent;
            outline: none;
            border: none;
            transition: color 0.5s;
            cursor: pointer;
            border-radius: 30px;
        }

        .blob-btn:before {
            content: "";
            z-index: 1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: 3px solid gray;
            border-radius: 30px;

        }

        .blob-btn:after {
            content: "";
            z-index: -2;
            position: absolute;
            left: 3px;
            top: 3px;
            width: 100%;
            height: 100%;
            transition: all 0.3s 0.2s;
            border-radius: 30px;
        }

        .blob-btn:hover {
            color: #ffffff;
            border-radius: 30px;


        }

        .blob-btn:hover:after {
            transition: all 0.3s;
            left: 0;
            top: 0;
            border-radius: 30px;
        }

        .blob-btn__inner {
            z-index: -1;
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border-radius: 30px;
            background: #ffffff;
        }

        .blob-btn__blobs {
            position: relative;
            display: block;
            height: 100%;
            filter: url("#goo");
        }

        .blob-btn__blob {
            position: absolute;
            top: 2px;
            width: 25%;
            height: 100%;
            background: orange;
            border-radius: 100%;
            transform: translate3d(0, 150%, 0) scale(1.7);
            transition: transform 0.45s;
        }

        @supports (filter: url("#goo")) {
            .blob-btn__blob {
                transform: translate3d(0, 150%, 0) scale(1.4);
            }
        }

        .blob-btn__blob:nth-child(1) {
            left: 0%;
            transition-delay: 0s;
        }

        .blob-btn__blob:nth-child(2) {
            left: 30%;
            transition-delay: 0.08s;
        }

        .blob-btn__blob:nth-child(3) {
            left: 60%;
            transition-delay: 0.16s;
        }

        .blob-btn__blob:nth-child(4) {
            left: 90%;
            transition-delay: 0.24s;
        }

        .blob-btn:hover .blob-btn__blob {
            transform: translateZ(0) scale(1.7);
        }

        @supports (filter: url("#goo")) {
            .blob-btn:hover .blob-btn__blob {
                transform: translateZ(0) scale(1.4);
            }
        }

        .Message {
            display: table;
            position: relative;
            width: 23rem;
            height: 1rem;
            background-color: #0074d9;
            color: #fff;
            transition: all 0.2s ease;
            top: -4rem;
            border-radius: 10px;
            font-size: 1rem !important;


        }

        .Message.is-hidden {
            opacity: 0;
            height: 0;
            font-size: 0;
            padding: 0;
            margin: 0 auto;
            display: block;
        }

        .Message--orange {
            background-color: #f39c12;

        }

        .Message--red {
            background-color: #ff4136;
        }

        .Message--green {
            background-color: #2ecc40;
        }

        .Message-icon {
            display: table-cell;
            vertical-align: middle;
            width: 60px;
            padding: 30px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.25);
            border-radius: 10px;

        }

        .Message-icon>i {
            width: 20px;
            font-size: 20px;
        }

        .Message-body {
            display: table-cell;
            vertical-align: middle;
            padding-bottom: 1rem;
            padding-top: 1rem;

        }

        .Message-body>p {
            line-height: 1.2;
            margin-top: 6px;
            text-align: center;
        }

        .Message-button {
            position: relative;
            margin: 15px 5px -10px;
            background-color: rgba(0, 0, 0, 0.25);
            box-shadow: 0 3px rgba(0, 0, 0, 0.4);
            border: none;
            border-radius: 20px;
            padding: 10px 15px;
            font-size: 16px;
            font-family: "Source Sans Pro";
            color: #fff;
            outline: none;
            cursor: pointer;

        }

        .Message-button:hover {
            background: rgba(0, 0, 0, 0.3);
        }

        .Message-button:active {
            background: rgba(0, 0, 0, 0.3);
            box-shadow: 0 0px rgba(0, 0, 0, 0.4);
            top: 3px;
        }

        .Message-close {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.3);
            color: #fff;
            border: none;
            outline: none;
            font-size: 20px;
            right: 5px;
            top: 5px;
            opacity: 0;
            cursor: pointer;
            border-radius: 30px;
        }

        .Message:hover .Message-close {
            opacity: 1;
        }

        .Message-close:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .u-italic {
            font-style: italic;
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);

        .material-form {
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;

        }

        .material-form .input-block {
            background-color: #fff;
            border-bottom: solid 1px #c8c8c8;
            width: 100%;
            height: 50px;
            padding: 0;
            position: relative;
            margin-bottom: 20px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .material-form .input-block::before {
            content: "";
            position: absolute;
            left: 50%;
            width: 0%;
            bottom: 0;
            height: 2px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            background-color: #E69138;
        }

        .material-form .input-block.focus {
            border-color: #fff;
        }

        .material-form .input-block.focus label {
            color: #E69138;
            top: 0;
            font-size: 13px;
        }

        .material-form .input-block.focus::before {
            left: 0%;
            width: 100%;
        }

        .material-form .input-block.has-value {
            background-color: #fff;
        }

        .material-form .input-block.has-value label {
            top: 0;
            font-size: 13px;
        }

        .material-form .input-block.error {
            border-color: #fff;
        }

        .material-form .input-block.error::before {
            left: 0%;
            width: 100%;
            background-color: #d50000;
        }

        .material-form .input-block.textarea {
            height: auto;
        }

        .material-form .input-block.textarea .form-control {
            height: auto;
            resize: none;
            padding-top: 20px;
            font-family: "Roboto", sans-serif;
        }

        .material-form .input-block.floating-field {
            padding: 2px 0 0;
            height: 62px;
        }

        .material-form .input-block.floating-field.textarea {
            height: auto;
        }

        .material-form .input-block label {
            position: absolute;
            left: 0;
            top: 29px;
            width: 100%;
            height: 20px;
            margin: 0;
            font-weight: 500;
            z-index: 1;
            color: #939393;
            font-size: 13px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            line-height: 16px;
            white-space: nowrap;
            overflow: hidden;
        }

        .material-form .input-block .form-control {
            background-color: transparent;
            padding: 4px 0 0;
            border: none;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            height: 100%;
            width: 100%;
            position: relative;
            z-index: 2;
            font-size: 14px;
            font-weight: 500;
            color: #3c3c3c;
        }

        .material-form .input-block .form-control:focus {
            outline: none;
        }

        .material-form .input-block .form-control:focus label {
            top: 0;
        }

        .material-form .error-label {
            color: #d50000;
            margin-top: -15px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .material-form .form-note {
            font-size: 13px;
            color: #939393;
            margin-top: -15px;
            margin-bottom: 15px;
        }

        .material-form .square-button {
            background-color: #39a1f4;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            padding: 0;
            height: 60px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .material-form .square-button:hover,
        .material-form .square-button:focus {
            background-color: #0d8aee;
        }

        /*dropdown list as ul li method*/
        .select-block {
            background-color: #fff;
            width: 100%;
            padding: 12px 0 0;
            position: relative;
            margin-bottom: 20px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .select-block label {
            position: absolute;
            left: 0;
            top: 32px;
            height: 20px;
            width: 100%;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            margin: 0;
            font-weight: 500;
            z-index: 1;
            color: #939393;
            font-size: 12px;
            line-height: 10px;
            white-space: nowrap;
            overflow: hidden;
        }

        .select-block .active-list {
            width: 100%;
            height: 52px;
            padding: 0;
            color: #c9c9c9;
            position: relative;
            z-index: 2;
            font-weight: 500;
            cursor: pointer;
            font-size: 0;
            white-space: nowrap;
            overflow: hidden;
            padding-right: 20px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .select-block .active-list:after {
            content: "▼";
            position: absolute;
            right: 0;
            background-color: #fff;
            top: 50%;
            width: 20px;
            padding-left: 5px;
            text-align: left;
            height: 52px;
            line-height: 52px;
            color: #939393;
            font-size: 14px;
            margin-top: -26px;
        }

        .select-block.added label {
            top: 0;
            font-size: 13px;
        }

        .select-block.added .active-list {
            color: #3c3c3c;
            font-size: 12px;
        }

        .select-block.added.focus label {
            top: 0;
        }

        .select-block.focus label {
            top: 0;
            font-size: 13px;
            color: #E69138;
        }

        .select-block.focus .active-list {
            font-size: 12px;
        }

        .select-block.focus .custom-select {
            border-color: #fff;
        }

        .select-block.focus .active-list:after {
            content: "▲";
            color: #3c3c3c;
        }

        .select-block.focus .custom-select::before {
            left: 0%;
            width: 100%;
        }

        .select-block .custom-select {
            border-bottom: solid 1px #c8c8c8;
            display: inline-block;
            height: 52px;
            position: relative;
            padding: 0;
            width: 100%;
            line-height: 52px;
        }

        .select-block .custom-select::before {
            content: "";
            position: absolute;
            left: 50%;
            width: 0%;
            bottom: 0;
            height: 2px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
            background-color: #E69138;
        }

        .select-block .custom-select .list-field {
            width: 100%;
            height: 52px;
            padding: 0 15px;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
        }

        .select-block .custom-select .drop-down-list {
            width: 100%;
            height: auto;
            max-height: 250px;
            overflow-x: auto;
            z-index: 99;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 100%;
            margin-top: 2px;
            left: 0;
            background-color: white;
            display: none;
            -moz-box-shadow: rgba(0, 0, 0, 0.11765) 0px 1px 6px, rgba(0, 0, 0, 0.11765) 0px 1px 4px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.11765) 0px 1px 6px, rgba(0, 0, 0, 0.11765) 0px 1px 4px;
            box-shadow: rgba(0, 0, 0, 0.11765) 0px 1px 6px, rgba(0, 0, 0, 0.11765) 0px 1px 4px;
        }

        .select-block .custom-select .drop-down-list li {
            padding: 10.5px 15px;
            cursor: pointer;
            font-size: 12px;
            line-height: normal;
            background-color: #fafafa;
            background-color: #fff;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .select-block .custom-select .drop-down-list li input[type="checkbox"] {
            margin: 0;
            margin-right: 8px;
            position: relative;
            top: 1px;
        }

        .select-block .custom-select .drop-down-list li label {
            font-weight: normal;
            cursor: pointer;
            display: block;
        }

        .select-block .custom-select .drop-down-list li:hover {
            color: #3c3c3c;
            background-color: rgba(0, 0, 0, 0.05);
        }

        .select-block .custom-select .drop-down-list .add-new {
            border-top: solid 1px #c8c8c8;
            padding: 15px;
            color: #3c3c3c;
        }

        .select-block .custom-select .drop-down-list .add-new i {
            font-size: 16px;
            margin-top: 3px;
            color: #939393;
        }

        @media (min-width: 768px) {
            .contact-wrap {
                width: 600px;
                margin: auto;
            }

            .material-form .input-block label {
                font-size: 18px;
                line-height: 14px;
            }

            .material-form .input-block .form-control {
                font-size: 18px;
            }

            .select-block label {
                font-size: 18px;
                line-height: 14px;
            }

            .select-block.added .active-list {
                font-size: 18px;
            }

            .select-block.focus .active-list {
                font-size: 18px;
            }

            .select-block .custom-select .drop-down-list li {
                font-size: 15px;
            }

            .material-form {
                padding: 30px;
            }
        }

        /*----page styles---*/

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);

        .contact-wrap {
            padding: 15px;
        }


        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }

        .made-with-love i {
            font-style: normal;
            color: #fff;
            font-size: 14px;
            position: relative;
            top: 2px;
        }

        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }

        .made-with-love a:hover {
            text-decoration: underline;
        }

        .pure-material-checkbox {
            z-index: 0;
            position: relative;
            display: inline-block;
            color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
            font-family: var(--pure-material-font, "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system);
            font-size: 16px;
            line-height: 1.5;
        }

        /* Input */
        .pure-material-checkbox>input {
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            z-index: -1;
            position: absolute;
            left: -10px;
            top: -8px;
            display: block;
            margin: 0;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
            box-shadow: none;
            outline: none;
            opacity: 0;
            transform: scale(1);
            pointer-events: none;
            transition: opacity 0.3s, transform 0.2s;
        }

        /* Span */
        .pure-material-checkbox>span {
            display: inline-block;
            width: 100%;
            cursor: pointer;
        }

        /* Box */
        .pure-material-checkbox>span::before {
            content: "";
            display: inline-block;
            box-sizing: border-box;
            margin: 3px 11px 3px 1px;
            border: solid 2px;
            /* Safari */
            border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
            border-radius: 2px;
            width: 18px;
            height: 18px;
            vertical-align: top;
            transition: border-color 0.2s, background-color 0.2s;
        }

        /* Checkmark */
        .pure-material-checkbox>span::after {
            content: "";
            display: block;
            position: absolute;
            top: 3px;
            left: 1px;
            width: 10px;
            height: 5px;
            border: solid 2px transparent;
            border-right: none;
            border-top: none;
            transform: translate(3px, 4px) rotate(-45deg);
        }

        /* Checked, Indeterminate */
        .pure-material-checkbox>input:checked,
        .pure-material-checkbox>input:indeterminate {
            background-color: #E69138;
        }

        .pure-material-checkbox>input:checked+span::before,
        .pure-material-checkbox>input:indeterminate+span::before {
            border-color: #E69138;
            background-color: #E69138;
        }

        .pure-material-checkbox>input:checked+span::after,
        .pure-material-checkbox>input:indeterminate+span::after {
            border-color: rgb(var(--pure-material-onprimary-rgb, 255, 255, 255));
        }

        .pure-material-checkbox>input:indeterminate+span::after {
            border-left: none;
            transform: translate(4px, 3px);
        }

        /* Hover, Focus */
        .pure-material-checkbox:hover>input {
            opacity: 0.04;
        }

        .pure-material-checkbox>input:focus {
            opacity: 0.12;
        }

        .pure-material-checkbox:hover>input:focus {
            opacity: 0.16;
        }

        /* Active */
        .pure-material-checkbox>input:active {
            opacity: 1;
            transform: scale(0);
            transition: transform 0s, opacity 0s;
        }

        .pure-material-checkbox>input:active+span::before {
            border-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
        }

        .pure-material-checkbox>input:checked:active+span::before {
            border-color: transparent;
            background-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
        }

        /* Disabled */
        .pure-material-checkbox>input:disabled {
            opacity: 0;
        }

        .pure-material-checkbox>input:disabled+span {
            color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38);
            cursor: initial;
        }

        .pure-material-checkbox>input:disabled+span::before {
            border-color: currentColor;
        }

        .pure-material-checkbox>input:checked:disabled+span::before,
        .pure-material-checkbox>input:indeterminate:disabled+span::before {
            border-color: transparent;
            background-color: currentColor;
        }

        .slideshow-title {
            font-family: 'Allerta Stencil';
            font-size: 62px;
            color: #fff;
            margin: 0 auto;
            text-align: center;
            margin-top: 25%;
            letter-spacing: 3px;
            font-weight: 300;
        }

        .sub-heading {
            padding-top: 50px;
            font-size: 18px;
        }

        .sub-heading-two {
            font-size: 15px;
        }

        .sub-heading-three {
            font-size: 13px;
        }

        .sub-heading-four {
            font-size: 11px;
        }

        .sub-heading-five {
            font-size: 9px;
        }

        .sub-heading-six {
            font-size: 7px;
        }

        .sub-heading-seven {
            font-size: 5px;
        }

        .sub-heading-eight {
            font-size: 3px;
        }

        .sub-heading-nine {
            font-size: 1px;
        }

        .entire-content {
            margin: auto;
            width: 190px;
            perspective: 1000px;
            position: relative;
            padding-top: 80px;
        }

        .content-carrousel {
            width: 100%;
            position: absolute;
            float: right;
            animation: rotar 15s infinite linear;
            transform-style: preserve-3d;
        }

        .content-carrousel:hover {
            animation-play-state: paused;
            cursor: pointer;
        }

        .content-carrousel figure {
            width: 100%;
            height: 120px;
            border: 1px solid #3b444b;
            overflow: hidden;
            position: absolute;
        }

        .content-carrousel figure:nth-child(1) {
            transform: rotateY(0deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(2) {
            transform: rotateY(40deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(3) {
            transform: rotateY(80deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(4) {
            transform: rotateY(120deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(5) {
            transform: rotateY(160deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(6) {
            transform: rotateY(200deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(7) {
            transform: rotateY(240deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(8) {
            transform: rotateY(280deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(9) {
            transform: rotateY(320deg) translateZ(300px);
        }

        .content-carrousel figure:nth-child(10) {
            transform: rotateY(360deg) translateZ(300px);
        }

        .shadow {
            position: absolute;
            box-shadow: 0px 0px 20px 0px #000;
            border-radius: 1px;
        }

        .content-carrousel img {
            image-rendering: auto;
            transition: all 300ms;
            width: 100%;
            height: 100%;
        }

        .content-carrousel img:hover {
            transform: scale(1.2);
            transition: all 300ms;
        }

        @keyframes rotar {
            from {
                transform: rotateY(0deg);
            }

            to {
                transform: rotateY(360deg);
            }
        }
    </style>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
    <div id="app"></div>

    <!-- NAVBAR -->
    <!-- <nav class="navbar navbar-xs navbar-expand-lg    fixed-top navbarScroll">
        <div class="container">
            <a id="icon" class="navbar-brand" href="#">
                <div id="opacityAnimation"><img src="imgs/icon.png" class="rounded mx-auto d-block" height="100px" width="100px"></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
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
                        <a class="nav-link" href="#gallery">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top" id="nav">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- <svg width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M511.981,118.509c-0.135-2.956-1.892-5.726-4.565-7.04l-159.24-79.62c-3.776-1.887-8.363-0.64-10.664,2.898 L229.916,200.282l-55.413-85.891c-0.796-1.235-1.945-2.264-3.259-2.922l-159.24-79.62C6.582,29.138,0,33.218,0,39.268v79.621 c0,4.581,3.712,8.294,8.294,8.294c4.581,0,8.294-3.712,8.294-.294V52.687l142.652,71.326v335.32L16.587,388.008V154.277	c0-4.581-3.712-8.294-8.294-8.294c-4.581,0-8.294,3.712-8.294,8.294v238.857c0,3.142,1.775,6.013,4.585,7.418l159.24,79.62	c5.427,2.714,12.003-1.375,12.003-7.418V318.087l324.17,162.085c5.427,2.714,12.003-1.375,12.003-7.418V118.888	C512,118.76,511.987,118.636,511.981,118.509z M175.827,299.541v-152.5l145.239,225.12L175.827,299.541z M495.413,459.335
l-139.34-69.671l108.576-186.993c2.299-3.961,0.952-9.037-3.009-11.337c-3.96-2.298-9.036-0.953-11.337,3.009L344.094,377.258
L239.77,215.555L347.383,49.998l144.717,72.359l-26.387,45.446c-2.299,3.961-0.952,9.037,3.009,11.337	c3.958,2.297,9.035,0.953,11.337-3.009l15.354-26.443V459.335z" fill="#000" />
                        </g>
                    </g>
                </svg>
                <span class="ml-3 font-weight-bold">Logo</span> -->
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


    <!--The html below this line is for display purpose only-->

    <!-- <div class="py-5 text-center text-white bg-dark">
        <div class="container py-5">
            <div class="row py-5">
                <div class="mx-auto col-lg-10">
                    <h1 class="display-4 mb-4 ">Das ist ein Titel als Info </h1>
                    <p class="lead mb-5">There is nothing more rare, nor more beautiful,
                        than a woman being unapologetically herself; comfortable in her perfect imperfection.
                        To me, that is the true essence of beauty. </p>
                    <a href="#home" id="startButton" class="btn btn-lg btn-outline-light mx-1" style="border-radius: 40px; background: white;">Mehr Erfahren</a>
                </div>
            </div>
        </div>
    </div> -->



    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text" onclick="scrollDown()">
                    <!-- <h2 class="hero_title">Herzlich Willkommen </h2>
                    <p class="hero_desc">bei Hausmeisterservice Augustin -->
                    <div id="div" class="hero_title" onclick="scrollDown()">Herzlich Willkommen</div>
                    <div id="div" class="hero_desc" onclick="scrollDown()">
                        <span>bei Hausmeisterservice Augustin</span>
                    </div>


                    <!-- <p id="p">a css3 animation demo</p> -->
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
                        <form class="material-form needs-validation" id="form" name="contact" action="{{url('sendFormular')}}" method="post">
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

    // if ((document.getElementById("success") || document.getElementById("error"))) {
    //     console.log('its there')
    //     var msg;
    //     document.getElementById("success") ? msg = document.getElementById("success") : ''
    //     document.getElementById("error") ? msg = document.getElementById("error") : ''

    //     const error = document.getElementById("error")
    //     setTimeout(() => {
    //         msg.style.display = 'none';
    //     }, 6000)
    // }

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
            scrollTop: $("#success").offset().top
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
</script>