<?php

include 'partphp/header.php';


?>
<div></div>
        <div id="titulo">
            <h1 class="hoculto">OHAR</h1>
            <img id="img-prin" src="img/logo/logo ohar COMPLETO.svgz" alt="">
            <h2>developer and desing web</h2>
            <a href="#conta" class="btn">contactanos</a>

        </div>
        <img src="img/header/ilustracion ohar.svgz" alt="" id="img-header">
    </header>
    <section id="sob">
        <h1>sobre nosotros</h1>
        <div id="cont-sob">
            <div class="people">
                <figure>
                    <img class="pic" src="img/nos/photo ro prueba.jpg" alt="">
                    <figcaption>
                        <p>Soy Rolando Escobar, Desarrollador web con experiencia en desarrollo desde 0 y Wordpress. Actualmente me encuentro trabajando como desarrollador web y estudiando la carrera de programacion.
                        </p>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/rolando-escobar/" target="_blank" class="btnico"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://github.com/rolandototo" class="btnico" target="_blank"><i class="fab fa-github"></a></i></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="people">
                <figure>
                    <img class="pic" src="img/nos/photo giss prueba.jpg" alt="">
                    <figcaption>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorum quia nemo voluptatem facere explicabo eaque eveniet esse at laudantium.</p>
                        <ul>
                            <li><a href="" class="btnico"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="" class="btnico"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
        </div>

    </section>
    <section id="serv" class="cont">
        <h1>servicios</h1>
        <ul id="serv-sec">
            <li class="serv-item get-hover" >
                <div class="innner-item scaled" >
                    <div class="img-cont"><img src="img/servicios/desarrollo web-02.svgz" alt=""></div>
                    <h2>desarrollo web</h2>
                </div>
                <p class="hover-show oculto">Desarrollamos Pagimas web desde 0 haciendo a la medida el codigo para un mejor rendimiento.</p>
            </li>
            <li class="serv-item get-hover">
                <div class="inner-item scaled">
                    <div class="img-cont"><img src="img/servicios/diseño-03.svgz" alt=""></div>
                    <h2>diseño web</h2>
                </div>
                <p class="hover-show oculto">Creamos diseños web a la medida del cliente como uno lo desee cumpliendo sus sueños y asesorandolo.</p>
            </li>
            <li class="serv-item get-hover">
                <div class="innner-item scaled">
                    <div class="img-cont"><img src="img/servicios/wordpres_Mesa de trabajo 1.svgz" alt=""></div>
                    <h2>wordpress</h2>
                </div>
                <p class="hover-show oculto">Nos especialisamos en Wordpress creando paginas asombrosas y de facil uso para el cliente.</p>
            </li>
            <li class="serv-item get-hover">
                <div class="inner-item scaled">
                    <div class="img-cont"><img src="img/servicios/logo-04.svgz" alt=""></div>
                    <h2>logo</h2>
                </div>
                <p class="hover-show oculto">Creamos Logos a la medida con la tecnica de reticula para hacer mas profecional tu empresa o marca.</p>
            </li>
            <li class="serv-item get-hover" >
                <div class="inner-item scaled">
                    <div class="img-cont"><img src="img/servicios/mantenimiento-05.svgz" alt=""></div>
                    <h2>mantenimineto</h2>
                </div>
                <p class="hover-show oculto">Te brindamos el mejor mantenimiento haciendo funcionar tu pagina web como se debe.</p>
            </li>
        </ul>
    </section>
    <section id="port">
        <h1>portafolio</h1>
        <ul class="owl-carousel owl-theme">
            <li class="port-item"><img src="img/portafolio/elites.png" alt=""></li>
            <li class="port-item"><img src="img/portafolio/imag2 prueba.jpg" alt=""></li>
            <li class="port-item"><img src="img/portafolio/imag1 prueba.jpg" alt=""></li>
            <li class="port-item"><img src="img/portafolio/imag1 prueba.jpg" alt=""></li>
        </ul>
    </section>
    <section id="conta" class="cont">
        <h1>contacto</h1>
        <div class="cont-con">
            <?php include "partphp/form.php" ?>
            <div class="cont-img-con">
                <img id="con-img" src="img/cont/CONTACTO ILUSTRACION ohar_Mesa de trabajo 1.svgz" alt="">
                <ul>
                    <li><a href="" class="btnico"><i class="fab fa-twitter"></i></a> </li>
                    <li><a href="" class="btnico"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="" class="btnico"><i class="fab fa-instagram"></i></a> </li>
                    <li><a href="" class="btnico"><i class="fab fa-linkedin-in"></i></a> </li>
                    <li><a href="" class="btnico"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
<?php

include 'partphp/footer.php';


?>