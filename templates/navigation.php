<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/navigationCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:700');
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

        #xd {

            width: 100%;
            height: 120px;
            background-color: black;

        }

        .top-header {

            height: 50px;
            transition: height 2s ease;

        }

        .top-header-h3 {

            font-size: 5px;
            letter-spacing: 2px;

        }

        .bar1,
        .bar2,
        .bar3 {

            width: 35px;
            height: 5px;
            background-color: #000;
            margin: 6px 0;
            transition: 0.4s;

        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        * {

            margin: 0;
            padding: 0;

        }

        header {

            display: flex;
            justify-content: space-between;
            position: fixed;
            background-color: lightblue;
            width: 100%;
            z-index: 10;

        }

        header nav {

            top: 0;
            padding: 30px;

        }

        header h3 a {

            font-family: 'Dancing Script', cursive;
            font-size: 4em;
            margin-left: 25px;
            color: lightgreen;
            text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black;
            text-decoration: none;

        }

        header h3 a:hover {

            color: lightcoral;

        }

        header nav .nav-menu {

            width: 600px;
            align-items: center;

        }

        header nav .nav-menu li a,
        header nav #dropdown li a {

            font-size: 17px;
            color: #000;
            text-transform: uppercase;
            font-family: 'Karla', sans-serif;

        }

        header nav .nav-menu li a:hover,
        header nav #dropdown li a:hover {

            color: lightcoral;

        }


        /* Menu för mindre enheter */

        #respo-btn {

            display: none;
            cursor: pointer;
            padding: 15px;

        }

        #dropbtnrespo {

            cursor: pointer;

        }

        /* Dropdown menu */

        header nav #dropbtn {

            cursor: pointer;
            font-size: 24px;
            border: none;
            font-family: 'Karla', sans-serif;

        }


        #dropdown-content {

            position: absolute;
            min-width: 160px;
            background-color: lightblue;
            list-style: none;

            display: none;

        }


        #dropdown-content li a {

            display: block;
            text-decoration: none;
            font-size: 22px;
            padding: 15px;

        }

        header nav #dropdown:hover #dropdown-content {
            display: block;
        }

        .header-text {

            padding: 35px;
            font-size: 3em;
            text-align: center;
            background-color: lightgreen;
            font-family: 'Karla', sans-serif;
            color: white;
            text-decoration: none;

        }

        /* Responsive Design */

        @media only screen and (max-width: 1350px) {

            header h3 a {

                font-size: 2.5em;


            }

            header nav {}

        }

        @media only screen and (max-width: 900px) {

            #xd {

                height: 60px;

            }

            header nav {

                width: 100%;
                padding: 0;
                margin: 0;

            }


            header h3 a {

                position: absolute;
                z-index: 0;
                top: 0;
                left: 0;
                left: 55%;
                top: 7px;

            }

            #respo-btn {

                display: inline-block;
                margin-left: 5px;

            }

            header nav .nav-menu {

                display: none;
                height: auto;
                width: 100%;

            }

            header nav .nav-menu li {

                padding: 35px;
                border-bottom: 1px solid;

            }

            header nav .nav-menu li a,
            header nav #dropdown li a {
                font-size: 30px;
                padding: 15px;
            }

            .nav-menu li,
            #dropbtn {

                text-align: center;
                padding: 10px;

            }

            #dropdown-content {


                position: relative;

                margin: 0;
                padding: 0;

            }

            #dropdown-content li {

                padding: 0;

            }

            #dropdown-content li a {
                padding: 0;
                padding: 5px;
                font-size: 18px;
            }

            #dropdown:hover #dropdown-content {
                display: none;
            }

            .header-text {

                font-size: 2.8em;
                padding: 20px;

            }

        }

        @media only screen and (max-width: 500px) {

            header h3 a {

                left: 0;
                left: 35%;

            }

        }

        @media only screen and (max-width: 400px) {

            .header-text {

                font-size: 2em;
                padding: 10px;

            }

        }

    </style>

</head>

<body>

    <header>

        <h3><a href="hemIndex.php">Tips för spel</a></h3>

        <nav>

            <div id="respo-btn" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul class="nav-menu">

                <li><a href="hemIndex.php">hem</a></li>
                <div id="dropdown">
                    <li><a id="dropbtn" href="speltipsIndex.php">Speltips</a><span id="dropbtnrespo">&#8711;</span></li>
                    <ul id="dropdown-content">

                        <li><a href="csgoIndex.php">CS:GO Speltips</a></li>
                        <li><a href="wowIndex.php">WoW Speltips</a></li>
                        <li><a href="lolIndex.php">LoL Speltips</a></li>

                    </ul>
                </div>

                <li><a href="publiceraIndex.php">Publicera speltips</a></li>
                <li><a href="kontaktIndex.php" class="kontakt">Kontakt</a></li>

            </ul>



        </nav>

    </header>

    <div id="xd"></div>

    <script>
        function myFunction(x) {

            x.classList.toggle("change");

        }

        if ($(window).width() < 901) {
            $(document).ready(function() {

                $("#resp").click(function() {

                    $('.nav-menu').fadeToggle();

                });

                $('#dropbtnrespo').click(function() {

                    $('#dropdown-content').fadeToggle();

                });

            });

        }

        $("#respo-btn").click(function() {

            $(".nav-menu").fadeToggle();

        });

        if ($(window).width() > 899) {

            $(window).on("scroll", function() {

                if ($(window).scrollTop()) {

                    $("header").addClass("top-header");
                    $("header h3").addClass("top-header-h3");

                } else {

                    $("header").removeClass("top-header");
                    $("header h3").removeClass("top-header-h3");

                }

            });

        }

    </script>
