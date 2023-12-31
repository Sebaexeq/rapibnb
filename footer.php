<footer class="mt-4" style="background-color: #102C57; padding: 20px 0;">
<a href="#" id="irArribaBtn" style="position: fixed; bottom: 20px; right: 20px; display: none;">
    <img src="flecha.png" title="Ir arriba" width="50" height="50" alt="Ir arriba" />
</a>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p style="color: #F8F0E5;">&copy; <?php echo date("Y"); ?> RapiBnB</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <a href="#" style="color: #EADBC8; margin-right: 10px;"><i class="bi bi-facebook" style="font-size: 24px;"></i></a> <!-- Segundo color de la paleta -->
                <a href="#" style="color: #EADBC8; margin-right: 10px;"><i class="bi bi-instagram" style="font-size: 24px;"></i></a> <!-- Segundo color de la paleta -->
                <a href="#" style="color: #EADBC8;"><i class="bi bi-twitter" style="font-size: 24px;"></i></a> <!-- Segundo color de la paleta -->
            </div>
        </div>
    </div>
</footer>
<body>
<script>
    // Obtener el botón
    var botonIrArriba = document.getElementById("irArribaBtn");

    // Agregar un evento para mostrar el botón cuando el usuario hace scroll hacia abajo
    window.onscroll = function() {
        mostrarBotonIrArriba();
    };

    // Función para mostrar u ocultar el botón basado en la posición del scroll
    function mostrarBotonIrArriba() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            botonIrArriba.style.display = "block";
        } else {
            botonIrArriba.style.display = "none";
        }
    }

    // Agregar un evento para llevar al usuario arriba cuando hace clic en el botón
    botonIrArriba.addEventListener("click", function() {
        document.body.scrollTop = 0; // Para navegadores Safari
        document.documentElement.scrollTop = 0; // Para otros navegadores
    });
	
	document.addEventListener("DOMContentLoaded", function() {
    const etiquetas = document.querySelectorAll(".etiqueta");
    etiquetas.forEach(function(etiqueta) {
        etiqueta.addEventListener("click", function(event) {
            event.preventDefault();
            const valorEtiqueta = this.textContent.replace("#", "");
            window.location.href = "buscador.php?etiqueta=" + encodeURIComponent(valorEtiqueta);
        });
    });
});
</script>
</body>
