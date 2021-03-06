<!DOCTYPE html>
<html lang="fr">
    <?php
    require_once 'includes/menu.php';
    ?>
    <body>
        <!-- 1ere partie du code fournit par facebook permettant l'intégration de FB dans la page -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>


        <!-- Grid System begin -->
        <div class="container">
            <!-- Header  -->
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <a class="navbar-brand" href="#">Donjon</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <!--
                           <li class="navbar-brand">
                               <a class="" href="http://donjon.lepetitfablabdeparis.fr">Le Donjon</a>
                           </li>
                          <li class="navbar-brand">
                               <a id="logo" href="http://lepetitfablabdeparis.fr">
                                   <img src="bootstrap/assets/logo-LPFP.png" alt="logo LPFP" width="100">
                               </a>
                           </li>
                            -->

                            <!-- ID for li not used yet -->
                            <li id="welcomeButton" class="active" role="presentation">
                                <a href="#" data-target="#welcome" role="tab" 
                                   data-toggle="tab">Accueil</a>
                            </li>

                            <li id="keysButton" role="presentation">
                                <a href="#" data-target="#keys" role="tab" 
                                   data-toggle="tab">Clefs</a>
                            </li>

                            <li id="fabmanagersButton" role="presentation">
                                <a href="#" data-target="#fabManagers" role="tab" 
                                   data-toggle="tab">FabManagers</a>
                            </li>

                            <li id="shiftsButton" role="presentation">
                                <a href="#" data-target="#shifts" role="tab" 
                                   data-toggle="tab">Permanences</a>
                            </li>

                            <li id="membersButton" role="presentation">
                                <a href="#" data-target="#members" role="tab" 
                                   data-toggle="tab">Membres</a>
                            </li>

                            <li id="wikiButton">
                                <a href="http://kiwimanager.lepetitfablabdeparis.fr/" 
                                   target="_blank">
                                    WIKI
                                </a>
                            </li>
                            <!-- Forms -->
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Formulaires<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li id="signinButton">
                                        <a href="https://docs.google.com/forms/d/1wC_Cygd2IjJCNRiZl4tEw3wuw1q4iGpOCkt5L_otFJo/viewform?gid=0" 
                                           target="_blank">
                                            Nouvelle Adhésion
                                        </a>
                                    </li>

                                    <li id="openingsButton">
                                        <a href="https://docs.google.com/forms/d/1cbevl9E5Jm2_a7Iqk4Fcu6aij8C6zHPYdhFRNGnrmnQ/viewform" 
                                           target="_blank">
                                            Portes Ouvertes
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- CONTENT : TABS -->
            <div id="body">
                <div class="container-fluid">

                    <div class="tab-content">

                        <!-- TAB WELCOME -->
                        <section id="welcome" class=" active" role="tabpanel">
                            <!-- This could be replaced by header tag --> 
                            <div class=" row">
                                <div class="col-lg-12">
                                    <h1>Les flux d'infos</h1>
                                    <hr/>
                                </div>
                            </div>
                            <div class=" row">
                                <!-- Real content begins here -->
                                <div class="col-md-4 col-lg-4">
                                    <h2>Facebook</h2>
                                    <!-- 2e partie du code fournit par facebook, en meme temps que le bout de code juste apres <body> -->
                                    <div class="fb-page" data-href="https://www.facebook.com/LePetitFablabDeParis" data-width="400" data-height="400" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/LePetitFablabDeParis">
                                                <a href="https://www.facebook.com/LePetitFablabDeParis">
                                                    Le Petit Fablab de Paris
                                                </a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <div id="gcalendar" class="col-lg-4">
                                    <h2>Calendriers</h2>
                                    <!-- code fournit par google, a générer depuis ls preferences de votre googleAgenda -->
                                    <iframe src="https://calendar.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=9t255k2cfmqlsq6tflq8n0dijg%40group.calendar.google.com&amp;color=%23875509&amp;src=e2cq1amiho8n1rrb2b6akbvi9k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=dk065gt1qtr9maf1p16o1kib5o%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border-width:0" height="400" frameborder="0" scrolling="no">
                                    Loading...						
                                    </iframe>
                                </div>

                                <div id="twitter" class="col-lg-4">
                                    <h2>Twitter</h2>
                                    <a class="twitter-timeline" href="https://twitter.com/lpfablabparis" data-widget-id="665963031944409088">Tweets by @lpfablabparis
                                    </a>
                                    <!-- code fournit par twitter, a générer depuis les preferences de votre compte twitter -->
                                    <script>!function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = p + "://platform.twitter.com/widgets.js";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, "script", "twitter-wjs");
                                    </script>
                                </div>
                            </div>
                        </section>



                        <!-- TAB KEYS -->
                        <section id="keys" class=" center" role="tabpanel">
                            <h2>Qui a les clefs ?</h2>
                            <a href="https://docs.google.com/spreadsheets/d/1ahKXqBw5CIEFOe6QnuwEqHRp5r3sg5iSZ3MSGej7X8o/edit#gid=888024120" target="_blank">
                                Historique
                            </a>
                            <br>
                            <!-- code fournit par google, a générer depuis ls preferences de votre googleAgenda -->
                            <iframe src="https://calendar.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=9t255k2cfmqlsq6tflq8n0dijg%40group.calendar.google.com&amp;color=%23875509&amp;src=e2cq1amiho8n1rrb2b6akbvi9k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=dk065gt1qtr9maf1p16o1kib5o%40group.calendar.google.com&amp;color=%232952A3&amp;src=fboi65ocn6hvsfdicm6v6v35jllg3o2k%40import.calendar.google.com&amp;color=%23125A12&amp;ctz=Europe%2FParis" style="border-width:0" height="400" frameborder="0" scrolling="no">

                            Loading...						
                            </iframe>

                            <br>
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="false" aria-controls="keysFormDiv">
                                Formulaire de prise des clefs
                            </button>
                            <div class="collapse" id="keysFormDiv">
                                <div class="well">
                                    <section>						  

                                        <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	
                                        <iframe id="keysForm" src="https://docs.google.com/forms/d/10lx-V5nh5Wb7n-Kg7e0jmEsaMxWbTGgz-0dmjeOwzzU/viewform?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
                                        Loading...
                                        </iframe>
                                    </section>
                                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="true">
                                        Fermer le Formulaire
                                    </button>
                                </div>
                            </div>
                        </section> 



                        <!-- TAB FABMANAGERS -->
                        <div id="fabManagers" class=" center" role="tabpanel">
                            <h2>Calendrier des Permanences</h2>

                            <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->
                            <iframe id="fabmanagersIframe" src="https://docs.google.com/spreadsheets/d/1j35WKcaX07aLgdpL5c1FNfGsKHAQNS-RxVo3-PHzfTg/edit#gid=899986583&amp;single=true&amp;widget=true&amp;headers=false">
                            Loading...	
                            </iframe>
                            <br>
                            <a href="https://docs.google.com/spreadsheets/d/1j35WKcaX07aLgdpL5c1FNfGsKHAQNS-RxVo3-PHzfTg/edit#gid=899986583" target="_blank">
                                Editer le gDoc via google
                            </a>

                            <br>
                            <br>
                            <br>

                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newFabmanagers" aria-expanded="false" aria-controls="newFabmanagers">
                                Suivi des nouveaux FabManagers
                            </button>

                            <div class="collapse" id="newFabmanagers">
                                <div class="well">
                                    <section>

                                        <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	  	
                                        <iframe id="newFabmanagersIframe" src="https://docs.google.com/spreadsheets/d/18UqOSVSHL_eCNt3CL9Dg1-i11mNGM_dFPRnq4H_dcwk/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
                                        Loading...	
                                        </iframe>
                                    </section>
                                    <a href="https://docs.google.com/spreadsheets/d/18UqOSVSHL_eCNt3CL9Dg1-i11mNGM_dFPRnq4H_dcwk/edit#gid=0" target="_blank">
                                        Editer le gDoc
                                    </a>

                                    <br>
                                    <br>

                                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#newFabmanagers" aria-expanded="true">
                                        Fermer le Document
                                    </button>
                                </div>
                            </div><!-- newFabmanagers -->
                        </div> <!-- fabManagers -->


                        <div id="shifts" class=" center" role="tabpanel">
                            <a href="https://docs.google.com/spreadsheets/d/1eXdFVutyxASkwqwiBINr_LBaBOtxQ4Wl3scYCV4i8b8/view#gid=1661249124" target="_blank">
                                Historique
                            </a>
                            <a href="https://docs.google.com/forms/d/17oAtVvIoA1buxek9FnAIkvJYfBNnvJ-fLF4UOd9X5ww/viewanalytics" target="_blank">
                                Analyse des Comptes Rendus
                            </a>
                            <section>						  
                                <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	
                                <iframe src="https://docs.google.com/forms/d/17oAtVvIoA1buxek9FnAIkvJYfBNnvJ-fLF4UOd9X5ww/viewform?entry.168458796&entry.308726202=Pas+de+Portes+Ouvertes+Aujourd'hui&entry.1507126601&entry.202581502&entry.3505587&entry.1608688282" width="600" height="1500" frameborder="0" marginheight="0" marginwidth="0">
                                Loading...
                                </iframe>
                            </section>
                        </div> 



                        <div id="members" class=" center" role="tabpanel">
                            <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->
                            <iframe id="membersIframe" src="https://docs.google.com/spreadsheets/d/1kFnn_0aTNAWlGuEw6T98adrcjdIS4W-YopM8an3_5yc/pubhtml?gid=1680566637&amp;single=true&amp;widget=true&amp;headers=false">
                            Loading...
                            </iframe>
                            <br>
                            <a href="https://docs.google.com/spreadsheets/d/1kFnn_0aTNAWlGuEw6T98adrcjdIS4W-YopM8an3_5yc/edit#gid=1680566637"
                               target="_blank">
                                Editer le gDoc
                            </a>

                            <br>
                            <br>

                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newMembers" aria-expanded="false" aria-controls="newMembers">
                                Suivi des nouvelles adhésions
                            </button>

                            <div class="collapse" id="newMembers">
                                <div class="well">
                                    <section>
                                        <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->
                                        <h2>ICI IL Y AURA UN IFRAME POUR VOIR LES NOUVELLES ADHESIONS DIRECTEMENT DEPUIS LES RESULTATS DU FORMULAIRE D'ADHESION</h2>
                                    </section>
                                    <a href=""
                                       target="_blank">
                                        Editer le gDoc
                                    </a>

                                    <br>
                                    <br>

                                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#newMembers" aria-expanded="true">
                                        Fermer le Document
                                    </button>
                                </div>
                            </div> <!-- /#newMembers -->
                        </div> <!-- /#members -->
                    </div> <!-- /.tab-content -->
                </div>

            </div> <!-- /#body -->
        </div><!-- /.container -->


        <!--  JavaScript here -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

        <!-- Pas utiliser ici mais bout de code à garder -->
        <!-- Permet de fermer un menu deroulant de la navbar apres un click -->
        <!--		<script> // Closes the collapsed navbar on click
                    $(document).on('click','.navbar-collapse.in',function(e) 
                    {
                        if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) 
                        {
                            $(this).collapse('hide');
                        }
                    });
                </script>
        -->

        <!-- We can add footer here -->
        <footer>
        </footer>

        <?php
        require_once 'includes/js.php';
        require_once 'includes/footer.php';
        ?>
    </body>
</html>
