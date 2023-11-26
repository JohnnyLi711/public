<?php

if (isset($_GET['search'])) {
    $s = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
    if ($s != '') {
        $x = 'Location: /info/en/?search=' . $s;
        header($x, true, 301);
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Directory</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="Directory">
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="design.css" type="text/css" rel="stylesheet">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
</head>

<body>
    <div id="page">
        <div id="wrap">
            <div class="top"></div>
            <h1>DIRECTORY</h1>
            <div id="column1">
                <div class="content">
                    <h2>Topics A-M</h2>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Portal:The_arts">Arts</a><br>
                    <jus>Visual arts (including architecture, ceramics, drawing, filmmaking, painting, photography, and sculpting), literary arts (including fiction, drama, poetry, and prose), performing arts (including dance, music, and theatre), culinary arts (including cooking, chocolate making and winemaking)</jus>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Category:Biographical_works">Biography</a><br>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/geography.php">Geography</a><br>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Category:History_by_location">History</a><br>
                    <jus>History by city, continent, country, mountain range, region, body of water, islands</jus>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Portal:Mathematics">Mathematics</a><br>
                    <jus>Algebra, Arithmetic, Analysis, Complex analysis, Applied mathematics, Calculus, Category theory, Chaos theory, Combinatorics, Dynamic systems, Fractals, Game theory, Geometry, Algebraic geometry, Graph theory, Group theory, Linear algebra, Mathematical logic, Model theory, Multi-dimensional geometry, Number theory, Numerical analysis, Optimization, Order theory, Probability and statistics, Set theory, Statistics, Topology, Algebraic topology, Trigonometry, Linear programming</jus>
                </div>
            </div>
            <div id="column2">
                <div class="content">
                    <h2>Topics S-T</h2>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Portal:Science">Science</a><br>
                    <jus>Archaeologist, Astronomer, Biologist, Chemist, Earth scientist, Informatician, Library scientist, Management scientist, Mathematician, Military scientist, Physicist, Psychologist, Social scientist, Technologist</jus>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Portal:Society">Society</a><br>
                    <jus> Economy, Education, Government, Identity, Infrastructure, Institutions, Land, Natural resources, People, Politics, Social control, Guilt society, Shame society, Social institution, Social structure, Social order, Social stratification, Technology and society, Wealth </jus>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> <a href="/info/en/?search=Outline_of_technology">Technology</a><br>
                    <jus>Aerospace, Applied physics, Agriculture, Communication, Computing, Construction, Electronics, Energy, Engineering, Firefighting, Forensic science, Health, Hydrology, Military science, Mining, Telecommunication, Transport</jus>
                    <i class="fa fa-info-circle" style="font-size:20px"></i> Languages<br>
                    <jus><a href="https://webot.org/info/de/">Deutsche</a></jus>
                </div>
            </div>
        </div>
    </div>
</body>

</html>