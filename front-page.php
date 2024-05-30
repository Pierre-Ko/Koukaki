<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <div class="video-container">  
            <img id="fallbackImage" src="wp-content/themes/foce-child/assets/images_koukaki/banner.png" alt="Fallback Image">   
            <video id="delayedVideo" class="video-background" loop muted src="wp-content/themes/foce-child/assets/video/video.mp4" type="video/mp4"></video>  
            </div>
            <img id="logobanner" src="<?php echo get_template_directory_uri() . '../assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        
       
        <div>
        <section id="#story" class="story article">
            <h2 class="animer-2-chargement anim3"><Span class="word1">L'histoire</span></h2>
            <article id="" class="story__article animer-2-chargement">
                
                <p><?php echo get_theme_mod('story'); ?></p>
                
            </article>
            <article id="characters">
                <div class="main-character">
                    <h3><span class="word1">Les&nbsp;</span><span class="word2">personnages</span></h3>
                    </div>
                    </article>
                    <?php get_template_part( './templates/template-carrousel' ); ?>
            <article id="place">
                <div class="nuages">
                    <span>
                    <h3 class="anim3"><span class="word1">Le&nbsp;</span><span class="word2">Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    </span>
                    <div id="cloudplace" class="mouvcloud">
                        <img class="lnuage image-scroll" src='wp-content/themes/foce-child/assets/images_koukaki/little_cloud.png'>
                        <img class="bnuage image-scroll" src='wp-content/themes/foce-child/assets/images_koukaki/big_cloud.png'>
                    </div>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="anim3"><span class="word1">Studio&nbsp;</span><span class="word2">Koukaki</span></h2>
            <div class="animer-2-chargement">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
         </section>
                </div>  
        
    </main><!-- #main -->
        
         
        <section id="Oscars" class="anim3"> 
                <p class="titloscars">Fleurs d'oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
                <img class="imgoscar" src='wp-content/themes/foce-child/assets/images_koukaki/logo_oscars2.png'>
            </section>
            


<?php
get_footer();



