<body>
    <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hide on Map</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
        <link rel="stylesheet" href="view/css/style.css"/>
    </head>
    <body>


        <h1 align=center>Hide on Map</h1>
        <div id="progressbar">
            <div class="progress-label"></div>
            <div class="bar"></div>
        </div>
        <div id="jeu">



            <div id="global" class="container-fluid">
                <div id="map"> </div>
                <div class="row">
                    <div id="boxgauche" class="col-sm-5">
                        <div id="res">Nombre de question répondu : 0/10</div>
                        <div id="score">XP : 0</div>

                        <div class="progress">
                            <div id="progressGauge" class="progress-bar progress-bar-striped active"
                                 role="progressbar" aria-valuenow="45" aria-valuemin="0" 
                                 aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div id="question" class="col-sm-3">

                    </div>
                    <aside id="characterInfo" class="col-sm-3">
                        <?php 
                        ?>
                        PERSONNAGE
                        <hr>

                        <input id="characterButton" type="submit" value="Submit">
                        <div id="charaInfo">
                            <div>Nom </div>
                            <div>Niveau</div>
                            <div>xp</div>
                        </div>
                    </aside> 
                </div>
                <div id="champList" class="row">
                    <div  class="col-sm-2 draggable2">
                        <img src="view/images/Talon.jpg" class="circular" title="Talon, The Blade Shadow"/>
                    </div>

                    <div  class="col-sm-2 draggable2">
                        <img src="view/images/Gnar.jpg" class="circular" title="Gnar, The Missing Link"/>
                    </div>
                    <div  class="col-sm-2 draggable2">
                        <img src="view/images/Soraka.jpg" class="circular" title="Soraka, The Starchild"/>
                    </div>
                </div>
            </div>	 
        </div>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
        <script type='text/javascript' src='view/js/script.js'></script>
        <script type='text/javascript' src='view/js/L.Control.MousePosition.js'></script>
        <script type='text/javascript' src='view/js/question.js'></script>
    </body>
</html>