$(document).ready(function(){
    // Correo recargar datos
    $("#forContacto").submit(function(event) {
        event.preventDefault();
      $.ajax({
            type: 'POST',
            url: 'send.php',
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta').slideDown();
                $('#respuesta').html(data);
                $('form')[0].reset();
            }
        });
        return false;
    }); 
});