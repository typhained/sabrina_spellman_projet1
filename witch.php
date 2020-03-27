<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/style.css">
    <link rel="stylesheet" href="/src/animate.css">
    <link rel="stylesheet" href="/src/timeline.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/src/animate.js"></script>
</head>

<body>

<div id="witchMe">
    <h2>Qui Suis-je?</h2>

    <p>BLABLABLA</p>
</div>

<div id="witchSchool">
    <h2>Sur mes traces</h2>


    <div class="container-fluid">
        <div class="row">
            <div id="timeline">


                <?php

                $array = array(
                    "foo" => "bar",
                    42    => 24,
                    "multi" => array(
                        "dimensional" => array(
                            "array" => "foo"
                        )
                    )
                );


                $story = array(
                    2020 => array(
                        "xp1" => array (
                            "witch_xp1.jpg","blabla"
                            ),
                        "xp2" => array (
                            "witch_xp2.gif","blabla"
                        ),
                        "xp3" => array (
                            "text","blabla"
                        ),
                        "xp4" => array (
                            "text","blabla"
                        )
                    ),
                    2019 => array(
                        "xp1" => array (
                            "text","blabla"
                        ),
                        "xp2" => array (
                            "text","blabla"
                        ),
                        "xp3" => array (
                            "text","blabla"
                        ),
                        "xp4" => array (
                            "text","blabla"
                        )
                    ),
                );




                foreach ($story as $year => $xp) {
                    echo "<div class=\"row timeline-movement timeline-movement-top\">
                               <div class=\"timeline-badge timeline-future-movement\">
                                    <p>".$year."</p>
                               </div>                    
                           </div>";


                    foreach($xp as $key => $value) {
                        $i++;
                        if ($i%2){

                        echo "<div class=\"row timeline-movement\">
                                    <div class=\"timeline-badge center-left\">
                
                                    </div>
                                    <div class=\"col-sm-6  timeline-item\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-11\">
                                                <div class=\"timeline-panel credits  anim animate fadeInLeft\">
                                                    <ul class=\"timeline-panel-ul\">
                                                        <div class=\"lefting-wrap\">
                                                            <li class=\"img-wraping\"><a href=\"#\"><img src=\"/img/".$value[0]."\" class=\"img-responsive\" alt=\"user-image\" /></a></li>
                                                        </div>
                                                        <div class=\"righting-wrap\">
                                                            <li><a href=\"#\" class=\"importo\">Mussum ipsum cacilds</a></li>
                                                            <li><span class=\"causale\" style=\"color:#000; font-weight: 600;\">Developer </span> </li>
                                                            <li><span class=\"causale\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i> 13/01/2018, 13:05\"</small></p> </li>
                                                        </div>
                                                        <div class=\"clear\"></div>
                                                    </ul>
                                                 </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                    }
                        else {
                        echo "<div class=\"row timeline-movement\">
                                    <div class=\"timeline-badge center-right\">
                
                                    </div>
                                    <div class=\"offset-sm-6 col-sm-6  timeline-item\">
                                        <div class=\"row\">
                                            <div class=\"offset-sm-1 col-sm-11\">
                                                <div class=\"timeline-panel debits  anim animate  fadeInRight\">
                                                    <ul class=\"timeline-panel-ul\">
                                                        <div class=\"lefting-wrap\">
                                                            <li class=\"img-wraping\"><a href=\"#\"><img src=\"/img/".$value[0]."\" class=\"img-responsive\" alt=\"user-image\" /></a></li>
                                                        </div>
                                                        <div class=\"righting-wrap\">
                                                            <li><a href=\"#\" class=\"importo\">Mussum ipsum cacilds</a></li>
                                                            <li><span class=\"causale\" style=\"color:#000; font-weight: 600;\">Web Designer </span> </li>
                                                            <li><span class=\"causale\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i> 12/01/2018, 13:05\"</small></p> </li>
                                                        </div>
                                                        <div class=\"clear\"></div>
                                                    </ul>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>




<div id="forest"></div>

<div id="witchContact">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card contactform">
                    <div class="card-horizontal">
                        <div class="img">
                            <img class="" src="./img/witch_devil.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h3>Besoin d'un petit Sortilège?</h3>
                            <form class="form" role="form" action="form.php" autocomplete="off" method="post">
                                <fieldset>
                                    <label for="name" class="mb-0">Nom</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="name" id="name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <label for="email" class="mb-0">Email</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <input type="text" name="email" id="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <label for="subject" class="mb-0">Sujet</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <select name="subject" id="subject" class="form-control paddingRequired" required="">
                                                <option value="" selected disabled hidden>Faites votre choix</option>
                                                <option value="Les Enfers">Questions sur les Enfers</option>
                                                <option value="Lilith">A propos de Lilith</option>
                                                <option value="l'Académie">En ce qui concerne L'Académie</option>
                                                <option value="les potions ou sortilèges">Potions/Sortilèges</option>
                                                <option value="un Autre sujet">Autre</option>
                                        </div>
                                    </div>
                                    <label for="message" class="mb-0">Message</label>
                                    <div class="row mb-1">
                                        <div class="col-lg-12">
                                            <textarea rows="6" name="message" id="message" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <p>Qui êtes vous?<p>
                                    </div>
                                    <div class="form-check-inline mb-1">
                                        <input type="radio" name="race" id="demon" class="form-control" value="demon">
                                        <label for="demon" class="mb-0 p-1">Démon</label>
                                        <input type="radio" name="race" id="sorcier" class="form-control" value="sorcier">
                                        <label for="race" class="mb-0 p-1">Sorcière/Sorcier</label>
                                        <input type="radio" name="race" id="humain" class="form-control" value="humaine" >
                                        <label for="race" class="mb-0 p-1">Humain</label>
                                        <input type="radio" name="race" id="paien" class="form-control" value="paien" >
                                        <label for="paien" class="mb-0 p-1">Païen</label>

                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg float-right">Pray Lilith</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">I'm the Queen of Hell~</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>