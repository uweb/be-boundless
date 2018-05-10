<?php
        $meta = '';
        $slug = 'puerto-rico';
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";
        $storyCodes = 'PRERFD,PHIGFD';
        $storyAppeal = 'Support Lilo Pozzo’s research team in their efforts to improve community health by contributing to the Puerto Rico Energy Recovery Fund.';
        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">

    <div class="version-switch">
        <a href="../puerto-rico-sp"><button id="spanish" href="../puerto-rico" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">Ver versión en ingles</button></a>
    </div>

    <section class="intro" id="intro-vid">
        <div id="vid-overlay"></div>
        <button id="pause">Pausa</button>
        <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/header.jpg' ?>" class="fullscreen-bg__video" id="full-bg-video">
            <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/puerto-rico/header.mp4' ?>" type="video/mp4">
            </video>
            <div class="intro-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-1 col-md-offset-1 col-lg-offset-2" id='intro-text'>
                        <h1>DE RED EN RED</h1>
                        <span class="udub-slant"><span></span></span>
                        <p>Meses después del huracán María, miles de personas en las zonas rurales de Puerto Rico todavía carecen de electricidad. En colaboración con las comunidades locales, los investigadores de UW están trabajando para restablecer su electricidad.</p>
                    </div>
                </div>
            </div><!-- .intro-body -->
            <section class="scrollit read-more">
                <p>Desplazar hacia abajo</p>
                <div class="mouse">
                    <div class="scroll"></div>
                </div><!-- .mouse -->
            </section><!-- .scrollit .read-more -->
    </section><!-- .intro #intro-vid -->


        <main id="main_content">

            <!-- INTRO PARAGRAPHS -->
            <section class="text-block start white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <p class="first">La sólida casa construida en una ladera de Jayuya, un municipio rural en las montañas de la zona central de Puerto Rico, no ha estado conectada a la red de electricidad por seis meses. Alguien en su interior padece de apnea del sueño, y su familia ha dependido de un generador ruidoso, y de la gasolina que consume, para proporcionar energía eléctrica a la máquina que él necesita cada noche.</p>

                            <p>Afuera, bajo la sonrisa delgada de una media luna, cuatro ingenieros de la Universidad de Washington finalizan su trabajo. Pronto, una nueva nanorred solar con batería proporcionará energía eléctrica a la máquina auxiliar para el sueño: sin gasolina, sin gases ni cacofonía. </p>

                            <p>Los estudiantes de doctorado, Mareldi Ahumada y Wesley Tatum, instalan cuatro paneles solares flexibles al techo con una soga amarilla. Anya Raj, universitaria graduada en 2017, mete cables de los paneles en el techo a través de un agujero, mientras que el estudiante universitario de segundo año, Hugo Pontes, alumbra a Raj con su teléfono inteligente para que pueda trabajar.</p>

                            <p>El equipo conecta los paneles a una batería en el interior de la casa que se cargará con el sol de mañana. Terminan justo cuando aparecen los mosquitos.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- MAP + STORM PATH ANIMATION -->
            <section id="section-map">
                <!-- <div class="item-1 item">
                </div>
                <div class="item-2 item">
                </div> -->
                <div class="background-3 background">
                    <iframe width="2560" height="1440" src="https://www.youtube.com/embed/ezQxonSFCaU?rel=0&amp;showinfo=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="background-1 background"></div>
                <div class="background-2 background"></div>
                <!-- <a data-lity="" href="https://www.youtube-nocookie.com/embed/ezQxonSFCaU?rel=0&amp;controls=0&amp;showinfo=0&rel=0&loop=1" class="center-block play">View storm path</a> -->

                <!-- <div class="boundless-video"></div> -->
            </section><!-- #section-map -->

            <!-- GETTING TO THE HEART OF THE DAMAGE -->
            <section class="text-block start white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Arribo al centro de los daños</h2>
                            <p>Ahumada, Tatum, Raj y Pontes son parte de un equipo de científicos de salud pública e ingenieros de UW que están evaluando el impacto a largo plazo de la pérdida de electricidad en los residentes de Puerto Rico.</p>

                            <p>Durante cuatro días a finales de marzo de 2018, los investigadores entrecruzaron esta región de 101 kilómetros cuadrados (39 millas cuadradas) en caminos de fuertes altibajos de un solo carril, algunos de los cuales se estrecharon mucho desde que el huracán María golpeó el territorio estadounidense el septiembre pasado. Jayuya es el hogar de 17,000 personas, y allí se encuentran los picos más altos de Puerto Rico. </p>
                            <div class="slideshow-container">
                                <div id="eng-slideshow" class="foster-slideshow">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_1.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_2.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_3.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_4.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                </div>
                            </div>

                            <p>El equipo visitó hogares y centros comunitarios, y entrevistó a docenas de cuidadores y residentes que usan dispositivos médicos electrónicos, como parte de un estudio de campo a largo plazo sobre el impacto de la pérdida de electricidad en la salud pública. También donaron e instalaron 17 sistemas de nanorred solar con baterías, prototipos de una infraestructura de energía limpia y sostenible, que pueden mantener a flote la salud pública en las zonas rurales cuando fallan las redes de suministro eléctrico.</p>

                            <p>Su trabajo es financiado por el <a href="https://www.cei.washington.edu/" target="blank">Clean Energy Institute</a> [Instituto de Energía Limpia] y el <a href="http://www.washington.edu/globalaffairs/gif/" target="_blank">Global Innovation Fund</a> [Fondo para la Innovación Mundial] de UW, y está alineado con la <a href="https://uw.edu/populationhealth/" target="_blank">Population Health Initiative</a> [Iniciativa de Salud Poblacional], una labor de toda la Universidad para eliminar las desigualdades en el campo de la salud por todo el mundo. Como es el caso en muchas catástrofes naturales, el huracán María tuvo un efecto desproporcionado en las personas de más bajos recursos: las familias tanto de ingresos bajos como de ingresos fijos, los ancianos, los enfermos y los residentes rurales de lugares como Jayuya.</p>

                            <p>Miles de personas han permanecido desconectadas de la red de suministro eléctrico desde que María azotó la zona. El equipo de UW espera que las lecciones aprendidas de la tormenta ayuden a los ingenieros a diseñar mejores microrredes, como los prototipos que han instalado, para una infraestructura que satisfaga las necesidades de las comunidades más vulnerables.</p>

                            <p>Una de las lecciones que el equipo ha aprendido en los dos viajes aquí, es que los defectos de la infraestructura actual han dejado cicatrices más profundas que los postes de luz tirados y las casas que están a oscuras.</p>

                            <p>“Es un sufrimiento invisible”, comenta Lilo Pozzo, profesora asociada de ingeniería química, que ha dirigido ambos viajes. “No sabe uno cómo está la situación sino hasta que entra en los hogares y ve exactamente cómo está sobreviviendo la gente”.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- COMMUNITY MEMEBER PHOTOS W/ SCROLL -->
            <section id="section-profiles">
                <div class="item-1 item">
                    <div class="img"></div>
                    <div class="caption">
                        <div class="group">
                            <h2>Juyuya Community /</h2>
                            <h3 class="headline">FIRSTNAME LASTNAME</h3>
                            <div class="inner">
                                <div class="more">
                                    <span class="text">Read more</span>
                                    <div class="parallelogram">
                                        <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                                            <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                                            <title>Vector Smart Object1</title>
                                            <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                                            <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et nunc sit amet quam tristique luctus. Nunc et felis erat. Cras luctus sem in enim varius tempus. Aliquam erat volutpat. Nullam in magna a mauris cursus sodales et faucibus odio. Maecenas non velit vitae neque luctus convallis. Suspendisse vel enim ut nisi egestas consequat. Phasellus a augue at turpis lacinia semper sed non quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-2 item">
                    <div class="img"></div>
                    <div class="caption">
                        <div class="group">
                            <h2>Juyuya Community /</h2>
                            <h3 class="headline">FIRSTNAME LASTNAME</h3>
                            <div class="inner">
                                <div class="more">
                                    <span class="text">Read more</span>
                                    <div class="parallelogram">
                                        <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                                            <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                                            <title>Vector Smart Object1</title>
                                            <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                                            <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et nunc sit amet quam tristique luctus. Nunc et felis erat. Cras luctus sem in enim varius tempus. Aliquam erat volutpat. Nullam in magna a mauris cursus sodales et faucibus odio. Maecenas non velit vitae neque luctus convallis. Suspendisse vel enim ut nisi egestas consequat. Phasellus a augue at turpis lacinia semper sed non quam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #section-profiles -->

            <!-- EXPOSING THE BLUE -->
            <section class="text-block white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Revelación del fondo azul</h2>
                            <p>Todavía es común ver las lonas azules de FEMA, pero muchos de los signos manifiestos del daño de la tormenta se han reparado: las personas han limpiado escombros, reemplazado ventanas y parchado techos. Pero los investigadores de UW han documentado un sinnúmero de ajustes “ocultos” que los residentes han hecho desde que perdieron la electricidad. Estos incluyen comer alimentos enlatados y en conserva, a pesar de su valor nutricional más bajo, o asistir diariamente al consultorio de un médico para obtener medicamentos refrigerados.</p>

                            <p>“Te adaptas porque no te queda otro remedio”, comenta Pozzo. “Pero nunca logras tener la vida normal que solías tener cuando tenías electricidad”.</p>

                            <div class="slideshow-container">
                                <div id="eng-slideshow" class="foster-slideshow2">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_1.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_2.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_3.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_4.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                </div>
                            </div>


                            <p>Pozzo eligió a Jayuya para este estudio porque su esposa, Marvi Matos, una ingeniera química, creció allí. Como muchas de las personas con lazos familiares en Puerto Rico, la pareja envió suministros a la isla después del huracán. Pero, un mes después de María, apenas se había restablecido un 20 por ciento de la red de electricidad.</p>

                            <p>Pozzo y Matos concibieron la idea de usar sus conocimientos expertos para descubrir el impacto de la tormenta en la salud y la infraestructura energética. Pozzo reclutó colaboradores de la Facultad de Salud Pública y la Facultad de Ingeniería. Recibieron financiamiento para el estudio del Clean Energy Institute y del Global Innovation Fund, mientras que donaciones privadas cubrieron el costo de las nanorredes. Unos contactos en Jayuya las pusieron en comunicación con organizadores comunitarios y familias necesitadas.</p>

                            <p>“El impacto duradero de esta tormenta es que ha revelado los lugares vulnerables de Jayuya”, comenta María Pérez, una organizadora comunitaria local. “Nos mostró a las personas entre nosotros que no tenían ayuda, que estaban viviendo en condiciones inhumanas”.</p>

                            <blockquote>
                                You adapt because you have to, but you never achieve the normal life you had back when you had power <span>— <span class="name">Lilo Pozzo</span></span>
                            </blockquote>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- NEW VIDEO SECTION BASED ON LIBRARIES -->
            <section id="video">
                    <a data-lity="" href="https://www.youtube.com/embed/-zYESWG9HxE?autoplay=1&amp;rel=0&amp;showinfo=0" class="center-block play">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" viewBox="0 0 150 150" class="opening-slash">
                                <circle id="play-cir" fill="none" stroke="#fff" stroke-width="7" stroke-miterlimit="10" cx="75" cy="75" r="55"></circle>
                                <path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"></path>
                            </svg>
                            <div>Watch Story</div>
                        </div>
                        <div class="video-caption">
                            <h3>FIRST NAME LAST NAME</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan nisi eget nulla pharetra suscipit. Curabitur id mi rhoncus, molestie orci sed, commodo eros. Maecenas vitae mollis est
                        </div>
                    </a>
                <img alt="Fabric" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/puerto-rico/video.jpg' ?>" />
            </section>

            <!-- DEDICATED TO A SUSTAINABLE FUTURE -->
            <section class="text-block start white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Dedicados a un futuro sostenible</h2>
                            <p>El equipo de UW realizó su primera visita en noviembre de 2017, para reunir datos y donar cuatro sistemas solares con baterías. Para el viaje en marzo, ampliaron sus objetivos al comprar y montar tres tipos de sistemas solares con baterías. El más pequeño de estos puede proporcionar energía eléctrica a un refrigerador miniatura para almacenar suministros médicos como insulina, mientras que el más grande puede alimentar dispositivos más complejos, como un concentrador de oxígeno o un refrigerador de tamaño normal.</p>

                            <p>“Queremos que estos sistemas sean sencillos para los pacientes y sus cuidadores”, indica Ahumada. “No tiene caso donar algo que no puedan usar fácilmente”.</p>

                            <p>Los investigadores también instalaron 11 registradores de datos en algunas de las nanorredes. Estos dispositivos registrarán información sobre el uso de la energía eléctrica, datos que se podrán descargar durante visitas futuras.</p>

                            <p>“Podemos agrupar la información de los registradores de datos con la que obtengamos de las entrevistas para diseñar microrredes todavía más eficaces”, comenta Chanaka Keerthisinghe, un investigador de posdoctorado en ingeniería eléctrica.</p>

                            <p>Los datos que los investigadores reunieron en marzo, los cuales deberían ofrecer pistas para que puedan ayudar a descubrir y abordar más necesidades, están en espera de análisis. El equipo está planificando otro viaje a Jayuya este verano. Los colaboradores en Jayuya esperan listos para ayudarlos en sus tareas.</p>

                            <p>Después de instalar la nanorred final, el equipo de UW pasó a un niño que jugaba frente a su casa, la cual carecía de electricidad. Llevaba puesto un disfraz de Capitán América y saludaba a los autos que pasaban. Una casa cercana tenía a la vista la bandera de la isla con un mensaje escrito a mano: Puerto Rico se levanta.</p>

                            <p><b>Puerto Rico se levanta.</b></p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- PROFILES OF RESEARCHERS -->
            <section id="profiles">
                <div class="who-section">
                    <ul id="people">
                        <li class="pax-1 navy" tabindex="0">
                            <div class="hider">
                                <h2>Anya Raj, ‘17</h2>
                                <p><span>Ciudad natal : </span>Manchester, United Kingdom</p>
                            </div>
                        </li>
                        <li class="pax-2 airforce" tabindex="0">
                            <div class="hider">
                                <h2>Chanaka Keerthisinghe</h2>
                                <p>Postdoctoral Researcher, Electrical Engineering</p>
                            </div>
                        </li>
                        <li class="pax-3" tabindex="0">
                            <div class="hider">
                                <h2>Mareldi Ahumada Parás, ‘22</h2>
                                <p><span>Ciudad natal : </span>Mexico City, Mexico</p>
                            </div>
                        </li>
                        <li class="pax-4 navy" tabindex="0">
                            <div class="hider">
                                <h2>Marvi Matos</h2>
                                <p>Engineer, Blue Origin</p>
                            </div>
                        </li>
                        <li class="pax-5 army" tabindex="0">
                            <div class="hider">
                                <h2>Hugo Pontes, ‘20</h2>
                                <p><span>Ciudad natal : </span>Rio de Janeiro, Brazil</p>
                            </div>
                        </li>
                        <li class="pax-6 army" tabindex="0">
                            <div class="hider">
                                <h2>Lilo Pozzo</h2>
                                <p>Associate Professor, Chemical Engineering and the Clean Energy Institute</p>
                            </div>
                        </li>

                        <li class="pax-7 navy" tabindex="0">
                            <div class="hider">
                                <h2>Yohan Min, ‘21</h2>
                                <p><span>Ciudad natal : </span>Seoul, South Korea</p>
                            </div>
                        </li>

                        <li class="pax-8 navy" tabindex="0">
                            <div class="hider">
                                <h2>Michael Chapko</h2>
                                <p>Professor Emeritus, Health Services</p>
                            </div>
                        </li>

                        <li class="pax-9 navy" tabindex="0">
                            <div class="hider">
                                <h2>Wesley K. Tatum, ‘20</h2>
                                <p><span>Ciudad natal : </span>Vancouver, Washington</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </section>

            <!-- UW COLLABORATORS -->
            <section class="text-block" id="expanding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy expandable-container">
                            <div class="visible-part">
                                <h2>UW collaborators</h2>
                                <div style="text-align: center"><a id="expander" class="expander" href="#" role="button">Mostrar más</a></div>
                            </div>
                            <div class="hidden-part">
                                <strong>Dan Schwartz</strong>, director del Clean Energy Institute y profesor de ingeniería química<br />
                                <strong>Charbel El Bcheraoui</strong>, profesor adjunto de salud mundial en el Institute for Health Metrics and Evaluation [Instituto de Evaluación y Métrica de la Salud]<br />
                                <strong>Yougjun Choe</strong>, profesor adjunto de ingeniería industrial y en sistemas<br />
                                <strong>Daniel Kirschen</strong>, profesor de ingeniería eléctrica<br />
                                <strong>Jessica Kaminsky</strong>, profesora adjunta de ingeniería civil y ambiental<br />
                                <div style="text-align: center"><a class="expander less" href="#" role="button">Mostrar menos</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- #main_content -->

        <div id="popup"></div>

    </div><!-- #immersive-body -->

    <?php
        include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
        get_template_part('footer', 'campaign-v2');
    ?>
