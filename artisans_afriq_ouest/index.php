<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'accueil - Artisans d'Afrique</title>

        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fichiers_css/accueil.css" />
        
    </head>
<body>
    <header>
        <aside class="boxlogobanniere">
            <!--<img class="imagelogobanniere" src ="image_accuel/baniere_header.jpg" alt ="Photo d'entête de page" />-->
            <div class = "overlay">
                <h1 class="texte_accroche" style="color :#ff9900;">BIENVENUE DANS LA MAISON DES ARTISANS</h1>
                <p class="boxbandeinfo">
                    <marquee behavior="scroll" scrollamount="5">
                        Votre satisfaction est <span class="spanAvantTextebandeinfo">notre priorité</span>
                    </marquee>
                </p>

                <div class="menuPrincipal">
                    <div class="logo">Logo</div>
                    <nav>
                        <a href="#">Accueil</a>
                        <a href="inscription_artisans.php">Inscription Artisan</a>
                        <a href="recherche_artisan.php">Rechercher un Artisan</a>
                        <a href="#">À propos</a>
                        <a href="#">Contact</a>
                    </nav>
                    <div>
                        <a class = "connexion" href="#">Connexion</a>
                    </div>
                </div>
            </div>
            
        </aside>

    </header>
    <section class = "sectionPrincipal">
        <div class="banner">
            <!--<div class = "slider">
                <img class = "imageBanniere" src ="image_accuel/collier_bijoux4.png" alt ="Photo banniere" />
            </div>-->

            <div class="slideshow-container" >

                <div class="myslides fade">
                    <!--<div class="numbers">1 / 5</div>-->
                    <img class="imageBanniere" src="image_accuel/sliderphotos/slider_1_collier_bijoux4.png" alt ="Photo banniere"/>
                </div>

                <div class="myslides fade">
                    <!--<div class="numbers">2 / 5</div>-->
                    <img class="imageBanniere" src="image_accuel/sliderphotos/slider_2_poterie.jpg" alt ="Photo banniere"/>
                </div>

                <div class="myslides fade">
                    <!--<div class="numbers">3 / 5</div>-->
                    <img class="imageBanniere" src="image_accuel/sliderphotos/slider_3_peinture.jpg" alt ="Photo banniere"/>
                </div>

                <div class="myslides fade">
                    <!--<div class="numbers">4 / 5</div>-->
                    <img class="imageBanniere" src="image_accuel/sliderphotos/slider_4_tissage.png" alt ="Photo banniere"/>
                </div>

                <div class="myslides fade">
                    <!--<div class="numbers">5 / 5</div>-->
                    <img class="imageBanniere" src="image_accuel/sliderphotos/slider_5_coiffure.jpg" alt ="Photo banniere"/>
                </div>

            </div>
                
            <h1>Des artisans compétents pour la réalisation de vos projets</h1>

        </div>
        <!--------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------------->
        <script type="text/javascript">
            var slideIndex = 1;

            showSlide(slideIndex);

            function plusSlides(n){
            showSlide(slideIndex += n);
            }

            function plusSlidesPrev(m){
            /*var monPrevIndex = 0;
            slideIndex = slideIndex += m;

            if (slideIndex += m > slides.length) { slideIndex = 1};

            if (slideIndex += m < 1) { slideIndex = slides.length};*/

            showSlide(slideIndex += m);
            }


            function currentSlide(n) {
            showSlide(slideIndex = n);
            }


            function showSlide(n){

            var i;

            var slides = document.getElementsByClassName("myslides");

            /*var dots = document.getElementsByClassName("dots");*/

            if (n > slides.length) { slideIndex = 1};

            if (n < 1) { slideIndex = slides.length};

            for (i=0;i<slides.length;i++) {

            slides[i].style.display = "none";

            };

            /*for (i=0;i<dots.length;i++) {

            dots[i].className = dots[i].className.replace(" active","");

            };*/

            slides[slideIndex-1].style.display = "block";

            /*dots[slideIndex-1].className += " active";*/
            /*slideIndex++;*/

            }
            /*----------------- DECLENCHEMENT AUTO SLIDER ----------------------------------------*/
            var intervalId;
            			
            var slideIndexAuto = 1;
            autoSlide(slideIndexAuto);
            function autoSlide(n) {
                var i;

            var slides = document.getElementsByClassName("myslides");

            /*var dots = document.getElementsByClassName("dots");*/

            if (n > slides.length) { slideIndexAuto = 1};

            if (n < 1) { slideIndexAuto = slides.length};

            for (i=0;i<slides.length;i++) {

            slides[i].style.display = "none";

            };

            /*for (i=0;i<dots.length;i++) {

            dots[i].className = dots[i].className.replace(" active","");

            };*/

            slides[slideIndexAuto-1].style.display = "block";

            /*dots[slideIndexAuto-1].className += " active";*/
            slideIndexAuto++;

            if (slideIndexAuto>5) {slideIndexAuto=1}

                slideIndex = slideIndexAuto-1;/*Récupération de l'index slider auto pour slider avec boutons de navigation;*/
            }

            intervalId = setInterval(autoSlide, 3000);
            /*setInterval(function () { showSlide(1);}, 2000);*/



        </script>

        <!--------------------------------------------------------------------------------------------------->
        
        <div class = "sous-section1">
            <div class="aProposDuSite">
                <h2>À propos de nous</h2>
                <p>Brève description de l'application et de ses objectifs.<br/>Lorem ipsum dolor, 
                sit amet consectetur adipisicing elit. Quaerat nesciunt quae quia accusantium nulla 
                odio aperiam tenetur temporibus cumque excepturi, reprehenderit aliquid sunt molestias 
                necessitatibus iure quas nisi repellendus corporis!</p>
            </div>
            <div class="boxConnexion">
                <h2>Se connecter</h2>
                <p>Connexion avec un compte utilisateur / Inscription (Artisan).</p>
            </div>
        </div>
        
        <div class = "sous-section2">
            <div class="rubrique">
                <h2>Comment ça marche ?</h2>
                <p>Explication du fonctionnement de l'application.</p>
            </div>
        </div>
        
        <div class = "sous-section3">
            <div class="rubrique">
                <h2>Témoignages</h2>
                <p>Avis et retours des utilisateurs.</p>
            </div>
        </div>

        
        <footer>
            <div class = "footer">
                <a class = "footerItem" href="#">Réseaux sociaux</a>
                <a class = "footerItem" href="#">Contact</a>
                <a class = "footerItem" href="#">Mentions légales</a>
            </div>
        </footer>

    </section>
    
    
</body>
</html>
