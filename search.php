<?php include('server.php') ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .infobox {
                border: 1px solid #a2a9b1;
                border-spacing: 3px;
                background-color: #f8f9fa;
                color: black;
                /* @noflip */
                margin: 0.5em 0 0.5em 1em;
                padding: 0.2em;
                /* @noflip */
                float: center;
                /* @noflip */
                clear: right;
                font-size: 88%;
                line-height: 1.5em;
            }
            .infobox caption {
                font-size: 125%;
                font-weight: bold;
                padding: 0.2em;
                text-align: center;
            }
            .infobox td,
            .infobox th {
                vertical-align: top;
                /* @noflip */
                text-align: left;
            }
            .infobox.bordered {
                border-collapse: collapse;
            }
            .infobox.bordered td,
            .infobox.bordered th {
                border: 1px solid #a2a9b1;
            }
            .infobox.bordered .borderless td,
            .infobox.bordered .borderless th {
                border: 0;
            }

            .infobox.sisterproject {
                width: 20em;
                font-size: 90%;
            }

            .infobox.standard-talk {
                border: 1px solid #c0c090;
                background-color: #f8eaba;
            }
            .infobox.standard-talk.bordered td,
            .infobox.standard-talk.bordered th {
                border: 1px solid #c0c090;
            }

            /* styles for bordered infobox with merged rows */
            .infobox.bordered .mergedtoprow td,
            .infobox.bordered .mergedtoprow th {
                border: 0;
                border-top: 1px solid #a2a9b1;
                /* @noflip */
                border-right: 1px solid #a2a9b1;
            }

            .infobox.bordered .mergedrow td,
            .infobox.bordered .mergedrow th {
                border: 0;
                /* @noflip */
                border-right: 1px solid #a2a9b1;
            }

            /* Styles for geography infoboxes, eg countries,
               country subdivisions, cities, etc.            */
            .infobox.geography {
                border-collapse: collapse;
                line-height: 1.2em;
                font-size: 90%;
            }

            .infobox.geography  td,
            .infobox.geography  th {
                border-top: 1px solid #a2a9b1;
                padding: 0.4em 0.6em 0.4em 0.6em;
            }
            .infobox.geography .mergedtoprow td,
            .infobox.geography .mergedtoprow th {
                border-top: 1px solid #a2a9b1;
                padding: 0.4em 0.6em 0.2em 0.6em;
            }

            .infobox.geography .mergedrow td,
            .infobox.geography .mergedrow th {
                border: 0;
                padding: 0 0.6em 0.2em 0.6em;
            }

            .infobox.geography .mergedbottomrow td,
            .infobox.geography .mergedbottomrow th {
                border-top: 0;
                border-bottom: 1px solid #a2a9b1;
                padding: 0 0.6em 0.4em 0.6em;
            }

            .infobox.geography .maptable td,
            .infobox.geography .maptable th {
                border: 0;
                padding: 0;
            }

            .Container {
                display: flex;
                overflow: scroll;
                height: calc(100vh - 100px);
                position: relative;
                width:100%;
            }

            .fa-2x {
                font-size: 2em;
            }
            .fa {
                position: relative;
                display: table-cell;
                width: 60px;
                height: 36px;
                text-align: center;
                vertical-align: middle;
                font-size:20px;
            }


            .main-menu:hover,nav.main-menu.expanded {
                width:250px;
                overflow:visible;
            }

            .main-menu {
                background:#212121;
                border-right:1px solid #e5e5e5;
                position:fixed;
                top:0;
                bottom:0;
                height:100%;
                left:0;
            }

            .main-menu>ul {
                margin:7px 0;
            }

            .main-menu li {
                position:relative;
                display:block;
                width:250px;
            }

            .main-menu li>a {
                position:relative;
                display:table;
                border-collapse:collapse;
                border-spacing:0;
                color:#999;
                font-family: arial;
                font-size: 14px;
                text-decoration:none;
                -webkit-transform:translateZ(0) scale(1,1);
                -webkit-transition:all .1s linear;
                transition:all .1s linear;

            }

            .main-menu .nav-icon {
                position:relative;
                display:table-cell;
                width:60px;
                height:36px;
                text-align:center;
                vertical-align:middle;
                font-size:18px;
            }

            .main-menu .nav-text {
                position:relative;
                display:table-cell;
                vertical-align:middle;
                width:190px;
                font-family: 'Titillium Web', sans-serif;
            }

            .main-menu>ul.logout {
                position:absolute;
                left:0;
                bottom:0;
            }

            .no-touch .scrollable.hover {
                overflow-y:hidden;
            }

            .no-touch .scrollable.hover:hover {
                overflow-y:auto;
                overflow:visible;
            }

            a:hover,a:focus {
                text-decoration:none;
            }

            nav {
                -webkit-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                -o-user-select:none;
                user-select:none;
            }

            nav ul,nav li {
                outline:0;
                margin:0;
                padding:0;
            }
            .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
                color:#fff;
                background-color:#5fa2db;
            }
            .area {
                float: left;
                background: #e2e2e2;
                width: 100%;
                height: 100%;
            }
            @font-face {
                font-family: 'Titillium Web';
                font-style: normal;
                font-weight: 300;
                src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
            }

            .table {
                border-spacing: 5px 12px;
                padding: 0 8px 8px 0;
                overflow-y:auto;
            }

            .error {
                width: 92%; 
                margin: 0px auto; 
                padding: 10px; 
                border: 1px solid #a94442; 
                color: #a94442; 
                background: #f2dede; 
                border-radius: 5px; 
                text-align: left;
            }

        </style>
    </head>


    <body>
        <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="search.php">
                        <i class="fa fa-search"></i>
                        <span class="nav-text">
                            Αναζήτηση Χώρας
                        </span>
                    </a>

                </li>
                
        </nav>


        <div style="margin-left:25%"> 

            <div class="w3-content w3-container" id="contact">
                <h3 class="w3-center">Αναζήτηση Χωρών</h3>
                <p class="w3-center"><em>Παρακάτω μπορείτε να βρείτε πληροφορίες για τις χώρες 
                        που θέλετε να αναζητήσεται να ελένξετε τα στοιχεία τους και να τις καταχωρήσετε στη βάση.
                        Για την καλύτερη λειτουργεία του προγράμματος βάλτε το όνομας της χώρας με λατινικούς
                        μικρούς χαρακτήκες π.χ : <b>Greece</b></em></p> 

                <center>
                    <form class="pure-form pure-form-aligned">
                        <div class="pure-control-group">
                            <input type="button" value="Αναζήτηση Χώρας" id="MyButton" class="pure-button pure-button-primary">
                            <input type="text" id="country" autocomplete="on">
                        </div>
                    </form>
                </center>
                <br>
            </div>

            <center>
                <div style="overflow-x:auto;">
                    <table border="5">
                        <td>
                            <div class="Container">
                                <div id="result" ></div>
                            </div>
                        </td>

                        <td style="padding-left: 10px; padding-right: 50px;">
                            <form class="pure-form pure-form-aligned" method="post" action="search.php">
                                <?php include('errors.php'); ?>
                                <fieldset>
                                    <div class="pure-control-group">
                                        <label>Όνομα Χώρας : </label>
                                        <input name="country_name" id="name" type="text" >
                                    </div>

                                    <div class="pure-control-group">
                                        <label>Θέση : </label>
                                        <input  name="potition" id="place" type="text">
                                    </div>

                                    <div class="pure-control-group">
                                        <label>Έκταση : </label>
                                        <input  name="area_inf" id="area" type="text" >
                                    </div>

                                    <div class="pure-control-group">
                                        <label>Πληθυσμός : </label>
                                        <input name="population" id="people" type="text" >
                                    </div>

                                    <div class="pure-control-group">
                                        <label>GDP  : </label>
                                        <input name="gdp_inf" id="gdp" type="text" >
                                    </div>

                                    <div class="pure-control-group">
                                        <label>HDI : </label>
                                        <input name="hdi_inf" id="hdi" type="text" >
                                    </div>

                                    <div class="pure-control-group">
                                        <label>Gini  : </label>
                                        <input name="gini_inf" id="gini" type="text" >
                                    </div>
                                </fieldset>
                            </form>
                        </td>
                    </table>
                </div>       
            </center> 
        </div>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTRo6smdmkyBR7dMYACY-ypq3OpsOdYUQ&callback=initMap">
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#MyButton').click(function () {
                    var searchTerm = document.getElementById("country").value;
                    $.ajax({
                        type: "GET",
                        url: "https://en.wikipedia.org/w/api.php?action=parse&format=json&page=" + searchTerm + "&redirects&prop=text&callback=?",
                        contentType: "application/json; charset=utf-8",
                        async: false,
                        dataType: "json",
                        success: function (data, textStatus, jqXHR) {


                            var markup = data.parse.text["*"];
                            var blurb = $('<div></div>').html(markup);

                            // remove links as they will not work
                            blurb.find('a').each(function () {
                                $(this).replaceWith($(this).html());
                            });

                            // remove any references
                            blurb.find('sup').remove();
                            blurb.find('audio').remove();

                            // remove cite error
                            blurb.find('.mw-ext-cite-error').remove();

                            //Βρίσκουμε το infobox μέσα απο το Json.
                            $('#result').html($(blurb).find('.infobox'));


                            //Aπο το Div που εχουμε δημιουργησει με το αποτελεσμα τον πίνακα
                            //ψαχνουεμ τα στοιχεια που μας ενδιαφερουν και τα καταχωρουμε
                            //στα αντιστοιχα πεδία για να περαστουν στην βαση.

                            //Name
                            document.getElementById("name").value = document.getElementById("country").value;

                            //Potition
//                            $("table tr").each(function (index) {
//                                if ($(this).text().includes(" largest city") && index > 1) {
//                                    var row = $(this).find('td').eq(0).text();
//                                    document.getElementById("place").value = row.substring(row.indexOf('\n'), row.indexOf('/'));//Κοβω οτι ειναι μετα το Km για να παρω μονο νουμερο.
//                                    return false;
//                                }
//                            });
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("Capital") && index > 1) {
                                    var row = $(this).find('td').eq(0).text();
                                    var nrow = row.match(/\d/)[0];//Βρίσκουμε τον πρώτο Αριθμό μετα το ονομα της πρωτεύουσας.
                                    var Capital = row.substring(0, row.indexOf(nrow));//περνουμε μονο την πρωτεουσα.
                                    var geocoder = new google.maps.Geocoder();
                                    geocoder.geocode({'address': Capital}, function (results, status) {

                                        if (status == google.maps.GeocoderStatus.OK) {
                                            var latitude = results[0].geometry.location.lat();
                                            var longitude = results[0].geometry.location.lng();
                                            console.log(latitude, longitude);
                                            document.getElementById("place").value = latitude+","+longitude;
                                        }
                                    });
                                    //alert(document.getElementById("place").value);//Κοβω οτι ειναι μετα το Km για να παρω μονο νουμερο.
                                    return false;
                                }
                            });

                            //Area
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("km") && index > 1) {
                                    var row = $(this).find('td').eq(0).text();
                                    var row = row.substring(0, row.indexOf('k'));
                                    var row = row.replace(/,/g, '');
                                    document.getElementById("area").value = row;//Κοβω οτι ειναι μετα το Km για να παρω μονο νουμερο.
                                    return false;
                                }
                            });


                            //Population
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("estimate") && index > 1) {
                                    var row = $(this).find('td').eq(0).text();
                                    var row = row.substring(0, 11);
                                    var row = row.replace(/,/g, '');
                                    document.getElementById("people").value = row;
                                    return false;
                                }
                            });

                            //GDP
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("Per capita") && index > 1) {
                                    var row = $(this).find('td').eq(0).text();
                                    var row = row.substring(1, 7);
                                    var row = row.replace(/,/g, '');
                                    document.getElementById("gdp").value = row;
                                    return false;
                                }
                            });

                            //HDI
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("HDI")) {
                                    var row = $(this).find('td').eq(0).text();
                                    var row = row.substring(0, 6);
                                    var row = row.replace(/\s+/g, '');
                                    document.getElementById("hdi").value = row;
                                }
                            });

                            //Gini
                            $("table tr").each(function (index) {
                                if ($(this).text().includes("Gini")) {
                                    var row = $(this).find('td').eq(0).text();
                                    var row = row.substring(0, 6);
                                    var row = row.replace(/\s+/g, '');
                                    document.getElementById("gini").value = row;
                                }
                            });
                        },
                        error: function (errorMessage) {
                        }

                    });
                });

//                function ConvertDMSToDD(degrees, minutes, seconds, direction) {
//                    var dd = degrees + minutes / 60 + seconds / (60 * 60);
//                    if (direction === "S" || direction === "W") {
//                        dd = dd * -1;
//                    } // Don't do anything for N or E
//                    return dd;
//                }
            });
        </script>
    </body>
</html>