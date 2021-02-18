<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <?php wp_head() ?>
    </head>
    <body <?php body_class("is-preload") ?>>
        <!-- Header -->
        <section id="header">
            <header>
                <span class="image avatar"><img src="<?= get_theme_mod("cm-avatar"); ?>" alt="" /></span>
                <h1 id="logo"><a href="/">Celia Marín</a></h1>
                <p>Locución y Comunicación Creativa</p>



            </header>
            <nav id="nav">
                <ul>
                    <li><a href="#sobre-mi">Sobre mí</a></li>
                    <li><a href="/works">Mis trabajos</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <footer>
                <ul class="icons">
                    <li><a href="https://www.linkedin.com/in/celia-mar%C3%ADn-benito/" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
                    <li><a href="https://www.facebook.com/celia.marin.benito" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/celiamarin/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://twitter.com/celiamarin" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="mailto:celiamarben@gmail.com" class="icon solid fa-envelope" target="_blank"><span class="label">Email</span></a></li>
                </ul>
            </footer>
        </section>
