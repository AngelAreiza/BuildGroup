<?php
include "header.php";
include "navbar.php";
?>

<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-primary">Nuestros Servicios</h2>
        <p>Ser Ingenieros Consultores y Contratistas significa para nosotros facilitar conocimientos, experiencia y rendimiento intelectual. La base de nuestra labor es la Independencia y el saber técnico aplicado Integralmente, así como también capacidad de adaptación y evitar toda manera de pensar rutinariamente.</p>
        <p>Para cada trabajo es asignado un equipo profesional altamente calificado para diseñar las metodologías, planes y programas adecuados y posteriormente ejecutar las tareas de supervisión y realizar las inspecciones físicas y técnicas en una programación adecuada.</p>
            <div class="accordion shadow-sm" id="servicesAccordion">

            <!-- Servicio 1 -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-light text-dark shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>Construcción</strong>
                    </button>
                </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Supervisión y mantenimiento de obras civiles.
                        </div>
                    </div>
            </div>

            <!-- Servicio 2 -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-light text-dark shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Saneamiento básico</strong>
                    </button>
                </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Redes de agua potable y alcantarillado.
                        </div>
                    </div>
                </div>
        
            <!-- Servicio 3 -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-light text-dark shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Vías</strong>
                    </button>
                </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Urbanas y rurales.
                        </div>
                    </div>
                </div>
        
            <!-- Servicio 4 -->
            <div class="accordion-item border-0">
                <h3 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-light text-dark shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong>Consultoría</strong>
                    </button>
                </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Intervención en obras y topografía.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="swiper mySwiper container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll1.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll2.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll3.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll4.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll5.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll6.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Lorem ipsum.</h3>
                    <p>
                        descripcion
                    </p>
                    <img src="img/scroll7.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
