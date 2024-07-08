// Obtén todos los botones que abren el modal
var modalBtns = document.querySelectorAll('.social-media a');

// Agrega un controlador de eventos para cada botón
modalBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
        var modalId = this.getAttribute('data-modal');
        var modal = document.getElementById(modalId);

        // Abre el modal
        modal.style.display = 'block';

        // Obtiene el botón de cierre del modal
        var closeBtn = modal.querySelector('.close');

        // Agrega un controlador de eventos para cerrar el modal al hacer clic en el botón de cierre
        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // Cierra el modal al hacer clic fuera del contenido del modal
        window.addEventListener('click', function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
});

