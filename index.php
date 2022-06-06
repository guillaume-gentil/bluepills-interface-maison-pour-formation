<?php 
require (__DIR__ . '/php/data/dataHeaderNav.php');
require (__DIR__ . '/php/data/dataCategoriesNav.php');
include_once(__DIR__ . '/php/templates/header.tpl.php');
?>
        


    <section class="language"><!-- Section dédiée à HTML -->
        <h2 id="HTML" class="language__title">HTML</h2>

        <article class="language__notion">

        </article>

        <article class="language__notion">

        </article>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à HTML -->
    
    <section class="language"><!-- Section dédiée à CSS -->
        <h2 id="CSS" class="language__title">CSS</h2>

        <article class="language__notion">

        </article>

        <article class="language__notion">

        </article>

        <article class="language__notion">

        </article>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à CSS -->

    <section class="language"><!-- Section dédiée à PHP -->
        <h2 id="PHP" class="language__title">PHP</h2>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à PHP -->

    <section class="language"><!-- Section dédiée à Symphony -->
        <h2 id="SYMPHONY" class="language__title">Symphony</h2>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à Symphony -->

    <section class="language"><!-- Section dédiée à JavaScript -->
        <h2 id="JS" class="language__title">JS</h2>

        <article class="language__notion width920">
            <p>Javascript est un langage interprété par le navigateur. Il n'interagit jamais avec le serveur, il se contente de dynamiser le HTML (modification du DOM) et le CSS (via l'ajout de classes, id, dataset,... sur le DOM ou bien l'ajout de propriétés CSS inline dans le HTML, JS possède également des fonctionnalités permettant d'animer du contenu dynamique).</p>
            <p>JS est avant tout un langage informatique de programmation. Il est donc adapté à la programmation algorythmique. Cependant, on l'utilise souvent pour ces possibilités de contrôle (voir "event") et de modification du DOM ou la logique est assez peu présente au profit de l'éxécution de tâches simple et répétitives (ciblage d'un élément, écoute des actions de l'utilisateur sur celui-ci, déclenchement d'une action (voir fonction "handle").</p>
            <p>L'organisation du code doit suivre un schéma précis afin de le rendre efficace mais surtout lisible pour un humain et facilement maintenable dans le temps (voir "utilisation de modules").</p>
            <p>JS ne dialogue pas avec le serveur. Ceci implique que les modifications qu'il apporte au DOM ne persistent pas après une requète serveur. Prémièrement les requêtes serveur peuvent être interrompues par JS. Par ailleurs, JS peut se servir du localStorage (et sessionStorage) pour stocker, par exemple les préférecnes d'affichage d'un utilisateur. Ces données sont stockées sur la machine client et ne sont pas accessibles par des sites tiers (contrairement aux cookies). C'es fichiers localStorage doivent contenir du texte uniquement (voir JSON, parse et stringify). JS peut également écrire des informations dans des cookies mais ceux-ci ont pour nature de dialoguer avec le serveur, on évitera donc de s'en servir avec JS.</p>
            <p>Avec JS on peut, par exemple, faire : </p>
            <ul>
                <li>1</li>
                <li>2</li>
            </ul>
        </article>
    </section><!-- Fin de section dédiée à Javascript -->

    <section class="language"><!-- Section dédiée à React -->
        <h2 id="REACT" class="language__title">React</h2>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à React -->
    
    <section class="language"><!-- Section dédiée à SQL -->
        <h2 id="SQL" class="language__title">SQL</h2>

        <article class="language__notion">

        </article>
    </section><!-- Fin de section dédiée à SQL -->



<?php 
include_once (__DIR__ . '/php/templates/footer.tpl.php');
?>