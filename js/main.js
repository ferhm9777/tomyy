(function() {
    "use strict";
    $(document).ready(function(){
        $(document).ajaxStart(function(){
            $('.cargando').show();
            $('.resultado').hide();
        }).ajaxStop(function(){
            $('.cargando').hide();
            $('.resultado').fadeIn('slow');
        });

        $('.form-contacto').submit(function(){
            $.ajax({
                type: 'POST', url: $(this).attr('action'), data: $(this).serialize(),

                success: function(data){
                   $('.resultado') .html(data);
                }
            })
            return false;
        });
    })
})();