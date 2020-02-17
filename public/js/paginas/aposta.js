var aposta = (function () {
    "use strict";


    function cadastro() {
        $('#form-cadastro').submit(function (e) {
            e.preventDefault();

            $('.salvar').prop('disabled', true);

            $(this).ajaxSubmit({
                url: getDomain()+'/cadastra-aposta',
                type: 'POST',
                dataType: 'json',
                beforeSubmit: function () {
                    openLoad();
                },
                success: function (response) {
                    $('.salvar').prop('disabled', false);
                    closeLoad();
                    $('.salvar').prop('disabled', false);
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    } else {
                        $('.salvar').prop('disabled', false);
                    }
                }, erro: function(){
                    $('.salvar').prop('disabled', false);
                }
            });
        });
    }

    function mask ()
    {
        var aposta = $("#aposta");
        aposta.mask('0,0,0,0,0,0');
    }

    function page() {
        cadastro();
        mask();
    }

    function __init() {
        page();
    }

    return {
        init: __init()
    };

})();
