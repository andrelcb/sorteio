$.ajaxSetup({
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });
 
function getDomain()
{
    var http = location.protocol;
    var host = window.location.host;
    var hostname = window.location.hostname;

    if (hostname == 'localhost' || host.substr(0, 8) == '192.168.')
    {
        var urlCompleta = window.location.href;
        var pastas = urlCompleta.split('/');
        host += '/'+pastas[3]+'/'+pastas[4]+'/public';
    }

    return http+'//'+host;
}

/* ============ LOAD  ============ */
function openLoad() {
    $('.load-pagina').show();
}

function closeLoad() {
    $('.load-pagina').hide();
}