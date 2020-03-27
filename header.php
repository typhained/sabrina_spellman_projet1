<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="./src/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    <img id="kitty" src="./img/cat.png" alt="A Cat is watching you">
                    <p>Do you want to go to hell?</p>
                    <p>Hell is too much for you?</p>
                </div>
                <div class="menu">
                    <ul>
                        <li class="human"><a href="#">Home</a></li>
                        <li class="human"><a href="#school">School</a></li>
                        <li class="human"><a href="#me">Me</a></li>
                        <li class="human"><a href="#contact">Contact</a></li>
                        <li class="hidden"><a href="#">HomeWitch</a></li>
                        <li class="hidden"><a href="#witchSchool">SchoolWitch</a></li>
                        <li class="hidden"><a href="#witchMe">MeWitch</a></li>
                        <li class="hidden"><a href="#witchContact">ContactWitch</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</body>

<script>
    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });


    $(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }

        else {
            $('nav').removeClass('black');
        }
    });

    $( "#kitty" ).click(function() {
        $("body").toggleClass("witch");
        $("li").toggleClass("hidden");
    });
</script>

</html>