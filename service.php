<?php
include('home2.html');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Services-NUREU AUDITION</title> 
    <style>
        div.div77 { text-align: left;  position: absolute; top: 0; left: 10px; margin-top: 1cm;  }
        .signia_logo { width:200px; height: auto ; }
        h1 { text-align : center ; font-size: 80px; }
        video { width:100%;}
        img.imge { width:70%; }
        .cla1 { display: flex; justify-content: center;}
        .cla2 { text-align: center;   margin: 40px 30px;  }
        .biglist {  display: flex; justify-content: space-between; width:100%; }
        #listn1 {  margin-left: 8%;}
        .list { flex-grow: 1; text-align: left; padding: 20px; display: none ; background: linear-gradient(to bottom, #D0D3D4, #FBFCFC);   box-shadow: 3px 3px 5px #757575;}
        .listDiv { width: 30%; }
        .cla2:hover { cursor: pointer;}
        
        
        .test { width : 100%;  margin: 0; display: flex; justify-content: center;     height: auto; margin-top: 1cm; margin-bottom: 1cm;}
        .carousel {  width : 100%; display: flex; justify-content: space-between; align-items: center; position: relative;}
        .current-img {  display: flex; flex-direction: column;align-items: center; }
        .carousel-container { width : 100%; }
        .prev-btn, .next-btn { font-size: 24px; cursor: pointer; background: none; border: none; color: #333; /* Couleur des icônes */ }
        .indicators { display: flex; justify-content: center; margin-top: 10px; }
        .indicator { width: 12px; height: 12px; border-radius: 50%; background-color: #ccc; margin: 0 5px; cursor: pointer; }
        .indicator.active { background-color: #333; }
        .immg  { display: flex; width : 100%;  justify-content: center; }
        .immg div { width: 100%; display: flex; justify-content: space-between;  }
        .immg img { width:150px ; height: 150px; }
        p.titre {  font-size:30px; color:black; margin-top: 2cm;}
        .current-img a {  color: #ff7e00;   text-decoration: none ;  font-weight:bold; display: flex; align-items: center; height: 1cm; margin-left: 10px; }
        img[alt='icon-de-main'] { width:30px; height: auto; margin-top:0; }
        .voir { margin-top: 30px; }
        .current-img a:hover { background-color: #E5E7E9 ; }
        


        .fonctionnalite { width: 80%;   margin: 0 auto; /* Cette propriété centre horizontalement */ display: flex; justify-content: center; align-items: center; }
        .fonctionnalite span { margin-left: 0.5cm; font-size: 20px;}
        .fonctionnalite img { margin-top: 20px; }
        .pre_fonctionnalite { width: 100%; margin-bottom: 3cm;}
    </style>
</head>
<body>
   <!--<div class="video">
        <video src="videop3.mp4"  autoplay controls muted></video>
    </div>  -->
    <h1>Aides auditives </h1>
    <div class="test">
        <div class="carousel-container">
            <div class="carousel">
                <i class="fas fa-chevron-left prev-btn"></i>
                <div class="immg">
                    <div>
                        <div class="current-img">
                            <p class="titre">Insio Charge&Go AX</p> 
                            <img src="appareils/InsioCharge&GoAX.jpg" alt="Image 1">
                            <div> <a href="html_des _appareils/Insio Charge&Go AX.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://youtu.be/NlYzyRyipag?list=TLGGpvnI9WpDxJ0yNjEwMjAyMQ"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE L'INSIO C&G AX</p> </a></div>
                            <div> <a href="https://www.signia-pro.com/-/media/signia/fr/files/documentation/insio-ax/depliant_patient_insio_cng_ax_vdef.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT PATIENT DE L'INSIO C&G AX</p> </a></div>

                         </div>
                        <div class="current-img">
                            <p class="titre">Motion Charge&Go P X</p>
                            <img src="appareils/MotionCharge&GoPX.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Motion Charge&Go P X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?list=TLGGzz3kzwb7938yNDAyMjAyMQ&v=nvnEj8yzHR8&feature=emb_title&ab_channel=SigniaHearing"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE MOTION X</p> </a></div>
                            <div> <a href="https://www.signia-pro.com/-/media/signia/fr/files/documentation/lettre-orl/lettre-orl-motion-x_vdef.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT MOTION X</p> </a></div>
                        </div>
                        <div class="current-img">
                           <p class="titre">Motion Charge&Go X</p>
                           <img src="appareils/MotionCharge&GoX.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Motion Charge&Go X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?list=TLGGzz3kzwb7938yNDAyMjAyMQ&v=nvnEj8yzHR8&feature=emb_title&ab_channel=SigniaHearing"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE MOTION X</p> </a></div>
                            <div> <a href="https://www.signia-pro.com/-/media/signia/fr/files/documentation/lettre-orl/lettre-orl-motion-x_vdef.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT MOTION X</p> </a></div>
                        </div>
                    </div>
                    <div>
                        <div class="current-img">
                            <p class="titre">Pure 312 AX</p>
                            <img src="appareils/Pure312AX.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Pure 312 AX.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.signia-pro.com/-/media/signia/fr/files/pure-312-ax/pure-ax-312.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT PURE 312 AX</p></a></div>
                            <div></div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Pure 312 Nx</p>
                            <img src="appareils/Pure312Nx.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Pure 312 Nx.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> </div>
                            <div> </div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Pure 312 X</p>
                            <img src="appareils/Pure312X.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Pure 312 X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>
                <div class="immg">
                    <div>
                        <div class="current-img">
                            <p class="titre">Pure Charge&Go AX</p>
                            <img src="appareils/PureCharge&GoAX.jpeg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Pure Charge&Go AX.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div><a href="https://www.signia-pro.com/-/media/signia/fr/files/signia-ax/depliant-pure-cgo-ax.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT PURE C&G AX</p> </a></div>
                            <div></div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Pure Charge&Go X</p>
                            <img src="appareils/PureCharge&GoX.png" alt="Image 1" >
                            <div> <a href="html_des _appareils/Pure Charge&Go X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?list=TLGGQBsFeOmLadMyNDAyMjAyMQ&v=VhQ-AyDi318&feature=emb_title&ab_channel=SigniaHearing"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE PURE C&G X</p> </a></div>
                            <div></div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Signia Active Pro</p>
                            <img src="appareils/SigniaActivePro.png" alt="Image 1" >
                            <div> <a href="html_des _appareils/Signia Active Pro.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?v=wQDNzbRZoJU"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE SIGNIA AVTIVE PRO</p> </a></div>
                            <div></div>
                        </div>
                    </div>
                    <div>
                        <div class="current-img">
                            <p class="titre">Silk X</p>
                            <img src="appareils/SilkX.webp" alt="Image 1" >
                            <div> <a href="html_des _appareils/Silk X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?list=TLGGWxkSS-7vRnEyNDAyMjAyMQ&v=pI3FaziDCRA&feature=emb_title&ab_channel=SigniaHearing"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE SLIK X</p> </a></div>
                            <div></div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Styletto AX</p>
                            <img src="appareils/StylettoAX.jpg" alt="Image 1" >
                            <div> <a href="html_des _appareils/Styletto AX.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?v=902qnPGyyzE&list=PLIrqBzXZeEX1tnNqTz_Ow0hokA9oAcbPF&index=4"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE STYLETTO AX</p> </a></div>
                            <div> <a href="https://www.signia-pro.com/-/media/signia/fr/files/signia-ax/styletto_ax/depliant-styletto-ax-vdef.pdf"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">DEPLIANT STYLETTO AX</p> </a></div>
                        </div>
                        <div class="current-img">
                            <p class="titre">Styletto X</p>
                            <img src="appareils/StylettoX.png" alt="Image 1" >
                            <div> <a href="html_des _appareils/Styletto X.html"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VOIR PLUS</p> </a></div>
                            <div> <a href="https://www.youtube.com/watch?list=TLGGZguCBG_AaN8yNDAyMjAyMQ&v=2KxoLsxSueQ&feature=emb_title&ab_channel=SigniaHearing"><img src="main-icon2.png" alt="icon-de-main"> <p class="voir">VIDEO DE STYLETO X</p> </a></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                
                <i class="fas fa-chevron-right next-btn"></i>
            </div>
            <div class="indicators">
                <div class="indicator"></div>
                <div class="indicator"></div>
                <!-- Ajoutez autant d'indicateurs que nécessaire -->
            </div>
        </div>
        <script>
            const carousel = document.querySelector(".carousel");
            const prevBtn = document.querySelector(".prev-btn");
            const nextBtn = document.querySelector(".next-btn");
            const indicators = document.querySelectorAll(".indicator");
            const images = document.querySelectorAll(".immg");
    
            let currentIndex = 0;
    
            function updateCarousel() {
                images.forEach((img, index) => {
                    img.style.display = index === currentIndex ? "block" : "none";
                });
    
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle("active", index === currentIndex);
                });
            }
    
            prevBtn.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateCarousel();
            });
    
            nextBtn.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % images.length;
                updateCarousel();
            });
    
            indicators.forEach((indicator, index) => {
                indicator.addEventListener("click", () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });
    
            updateCarousel();
        </script>
    </div>

    
    
    <div class="pre_fonctionnalite">
        <h1>Un concentré de technologies dans des produits haut de gamme</h1>
        <div class="fonctionnalite">           
                <img src="rechar.png" alt="image audio">
                <span>Seuls nos appareils de Classe II qui disposent d’une batterie Li-ion pour une utilisation très simple et écologique sont rechargeables et avec fonction arrêt-marche automatique, permettant de s'affranchir des piles.</span>
        </div>
        <div class="fonctionnalite">           
                <img src="connec.png" alt="image audio">
                <span>Seuls nos appareils de Classe II bénéficient de la connectivité Bluetooth ® Low Energy permettant à vos patients de connecter leurs aides auditives en stéréo à leurs smartphones pour recevoir leurs appels téléphoniques, écouter la musique directement avec un appareil iOS ou Android ™ (exclusivité de la plateforme AX) et écouter la télévision via StreamLine TV.</span>
        </div>
        <div class="fonctionnalite">           
                <img src="traite.png" alt="image audio">
                <span>Sur notre dernière plateforme AX, 2 unités de traitement ont été intégrées. L’unité de traitement dédiée au signal utile a pour objectif de produire un son net, distinct, le plus dynamique possible. Pour l’utilisateur, la parole doit sembler proche et claire afin de réduire son effort d’écoute. L’unité de traitement pour le signal ambiant atténue l’environnement sonore, mais sans le déformer, pour que le patient ressente ce qu’il se passe autour sans jamais être submergé d’informations.</span>
        </div>
        <div class="fonctionnalite">           
                <img src="audio.png" alt="image audio">
                <span>Nos appareils de Classe II vous apportent davantage de possibilités avec plus de canaux de réages et plus de solutions pour les pertes spécifiques : CROS, BiCROS, TriCROS, pentes de ski, scotomes, acouphènes..</span>
        </div>
    </div>
    
    
    <?php include('pie_de_page.html') ?>
</body>
</html>
