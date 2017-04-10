<?php
require 'config/configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title; ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery1.11.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <!--START NAVIGATION-->
   <div class="container-fluid header-fluid">
       <div class="header-bar">
           <div class="header-logo animated bounceInLeft"></div>
           <div class="info-box animated bounceInRight">
               <span class="header-info">PHP i mySQL<br>UČILIŠTE OSIJEK</span>
               <span class="header-info-number">ALGEBRA PHP 2017</span>
           </div>
       </div>
       </div>
   <header>
        <nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"><a class="logo-navbar">NAVIGATION <span class="logo-navbar-color"> MENU</span></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= $home; ?>">POČETNA</a></li>
                        <li><a href="<?= $github; ?>" target="_blank">GITHUB</a></li>
                        <li><a href="<?= $trello; ?>" target="_blank">TRELLO</a></li>
                        <li><a href="<?= $netbeans; ?>" target="_blank">NETBEANS</a></li>
                        <li><a href="<?= $xampp; ?>" target="_blank">XAMPP</a></li>
                        <li><a href="<?= $heidisql; ?>" target="_blank">HEIDISQL</a></li>
                         <li class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">LISTA KORISNIKA [GITHUB]
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="<?= $pmrvic; ?>" target="_blank">pmrvic</a></li>
                              <li><a href="<?= $bvidovic; ?>" target="_blank">bvidovic</a></li>
                              <li><a href="<?= $dcuric; ?>" target="_blank">dcuric</a></li>
                              <li><a href="<?= $dudovcic; ?>" target="_blank">dudovcic</a></li>
                              <li><a href="<?= $dvalencak; ?>" target="_blank">dvalencak</a></li>
                              <li><a href="<?= $gtolusic; ?>" target="_blank">gtolusic</a></li>
                              <li><a href="<?= $imazur; ?>" target="_blank">imazur</a></li>
                              <li><a href="<?= $ipaic; ?>" target="_blank">ipaic</a></li>
                              <li><a href="<?= $zilicic; ?>" target="_blank">zilicic</a></li>
                              <li><a href="<?= $ndragun; ?>" target="_blank">ndragun</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
	<!--END NAVIGATION-->
    <!--START MAIN BANNER-->
    <section id="main-banner">
        <div class="main-banner">
        <div class="main-banner-title animated bounceInDown">DOBRODOŠLI U PHP I MYSQL ALGEBRA TEAM 2017</div>
        </div>
    </section>
    <!--END MAIN BANNER-->
	<!--START PREDAVANJE TABELA-->
    <section id="table-lectures">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="table-lectures">
                          <table class="tabela-predavanja">
                            <tbody>
                               <tr>
                                    <td><strong>PREDAVANJE BROJ</strong></td>
                                    <td><strong>DATUM PREDAVANJA</strong></td>
                                    <td><strong>STATUS</strong></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-1.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 1</a></td>
                                    <td>13.03.2017.</td>
                                    <td><img src="<?= $completed; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-2.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 2</a></td>
                                    <td>15.03.2017.</td>
                                    <td><img src="<?= $completed; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-3.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 3</a></td>
                                    <td>17.03.2017.</td>
                                    <td><img src="<?= $completed; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-4.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 4</a></td>
                                    <td>21.03.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-5.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 5</a></td>
                                    <td>23.03.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-6.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 6</a></td>
                                    <td>XX.XX.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-7.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 7</a></td>
                                    <td>XX.XX.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-8.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 8</a></td>
                                    <td>XX.XX.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-9.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 9</a></td>
                                    <td>XX.XX.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                                <tr>
                                    <td><a onclick="new Ajax.Updater('table-lectures','predavanje-10.php',{method: 'get',asynchronous:true,evalScripts:true}); esperar('');" href="#table-lectures">Predavanje 10</a></td>
                                    <td>XX.XX.2017.</td>
                                    <td><img src="<?= $notcompleted; ?>" alt="task"></td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div> 
            </div>
        </div>
    </section>
    
    <section id="youtube-video">
      <div class="container">
       <iframe width="100%" height="685" src="https://www.youtube.com/embed/HmtzpXWYYSg?list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
    <!--END PREDAVANJE TABELA-->
	<!--START FOOTER-->
    <footer id="footer">
        <div class="footer">
           <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-navigation">
                    <span class="footer-title">KORISNI LINKOVI</span>
                    <span class="footer-description"><a href="<?= $github; ?>" target="_blank">- GITHUB</a></span>
                    <span class="footer-description"><a href="<?= $gitbash; ?>" target="_blank">- GITBASH</a></span>
                    <span class="footer-description"><a href="<?= $trello; ?>" target="_blank">- TRELLO</a></span>
                    <span class="footer-description"><a href="<?= $netbeans; ?>" target="_blank">- NETBEANS</a></span>
                    <span class="footer-description"><a href="<?= $xampp; ?>" target="_blank">- XAMPP</a></span>
                    <span class="footer-description"><a href="<?= $heidisql; ?>" target="_blank">- HEIDISQL</a></span>
                    <span class="footer-description"><a href="<?= $w3schools; ?>" target="_blank">- W3SCHOOLS</a></span>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-navigation">
                    <span class="footer-secondary-title">O STRANICI</span>
                    <span class="footer-secondary-text">Ova stranica je kreirana u svrhu lakšeg pronalaska materijala koje će nam biti potrebni tokom nastave. Također možete pogledati što smo radili na pojedinom predavanju.
                    <br><br>Ukoliko imate bilo kakvih sugestija u vezi stranice molio bih vas da me kontaktirate putem
                        <br><br>E-mail: <a href="mailto:nemanjadragun@gmail.com">nemanjadragun@gmail.com</a>
                    <br><br>
                    </span>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-navigation">
                    <span class="footer-secondary-title">KONTAKT PREDAVAČA</span>
                    <span class="footer-secondary-text">Ime i Prezime: Predrag Mrvić</span>
                    <span class="footer-secondary-text">E-mail: <a href="mailto:mrvic.predrag@gmail.com">mrvic.predrag@gmail.com</a></span>
                    <span class="footer-secondary-text">Mob: 099/483-62-93</span>
                    <span class="footer-secondary-text">Mjesto: Osijek</span>
                    <span class="googlemap"><iframe width="100%" max-height="360" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJU51XgannXEcRJvM5z_6bK8k&key=AIzaSyAs26sALxDKu_YhfGowDGTbg20-zeev7zw" allowfullscreen></iframe></span>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-navigation">
                    <span class="footer-secondary-title">POVRATAK NA VRH</span>
                    <a href="#main-banner"><div class="footer-scroll-to-top"></div></a><br>
                    <a href="http://info.flagcounter.com/phjx"><img src="http://s09.flagcounter.com/count/phjx/bg_333333/txt_EEEEEE/border_333333/columns_2/maxflags_8/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                </div>
             </div>
            </div>
            <div class="container-fluid">
             <div class="footer-copyright">Designed and coded by <a href="<?= $copyright; ?>" target="_blank">nemanjadragun.com</a> &copy; Algebra PHP Team 2017 All right reserved.</div>
             </div>
        </div>
    </footer>
	<!--END FOOTER-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fixed-navbar.js"></script>
    <script type="text/javascript" src="js/scriptaculous/lib/prototype.js"></script> <!--LIVE LOADING-->
</body>
</html>