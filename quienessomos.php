<?php include("templates/cabecera.php");
  

?>


	
<section class="quienessomos">
        <div class="container">
            
            <h1 class="head">Quiénes somos</h1>
            
        </div>
    </section>
<div>
    <img src="img/playapersona.jpg" id="playapersona">
    <img src="img/comprometido.jpg" id="comprometido">
    <img src="img/pueblo.jpg" id="pueblo">

<div>
	<h1 id="etica">Ética</h1>
</div>

<div>
	<h1 id="confiable">Confiable</h1>
</div>
<div>
	<h1 id="comprometida">Comprometida</h1>
</div>
    </div>
<div id="sivartrips2">
<h1 id="sivartrips">SivarTrips</h1>
</div>

<div id="quienessomos2">
	<p id="pquienesomos">Somos una empresa creada el 26 de enero de 2023 con el objetivo de mostrar una nueva y divertida manera de explorar nuevos destinos de nuestro querido país El Salvador, nos interesa quese divierta mientras aprende algo nuevo del mundo. Ofrecemos vsiajes verdaderamente excepcionales llenos de experiencias inspiradoras y enriquecedoras. Creemos en mirar el mundo de una manera especial y queremos compartir nuestro conocimiento y pasión por la naturaleza y la cultura con todas aquellas personas como nosotros.
</div>

<br>
<br>
<br>
<footer>
        <div class="container">
            <div class="footer-content">

            
                <div class="footer-div">
                    <div class="social-media">
                        <h4>Siguenos</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="Escribe tu email"
                            >
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <script>

        const selectElement = function(element) {
            return document.querySelector(element);
        }


        let menuToggle = selectElement('.menu-toggle');
        let body = selectElement('body');

        menuToggle.addEventListener('click', function(){
            body.classList.toggle('open');
        })

    </script>

</body>
</html>