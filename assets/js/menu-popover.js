jQuery( function( $ ) {
    $( document ).ready( function() {
        $('.box-vendas a').attr('href', 'javascript:;'); //Elimino o # no atributo href
        $('.box-vendas a').attr('data-trigger', 'focus'); //faço funcionar apenas em foco
        $('.box-clientes a').attr('href', 'javascript:;'); //Elimino o # no atributo href
        $('.box-clientes a').attr('data-trigger', 'focus'); //faço funcionar apenas em foco

        $('.box-vendas a').popover({content: '<div class="title">Ligue para</div><div class="fone">0800 00 00 100</div><div class="action">ou <a href="#">INICIE O CHAT</a></div>', html: true, placement: "bottom"});
        $('.box-clientes a').popover({content: '<div class="title">Suporte</div><div class="fone">5018-2525</div><div class="subtitle">ou acesse:</div><div class="popover-url"><a href="http://praxio.desenvolvefacil.com/portal-do-cliente/" target="_blank">Conexão Praxio</a></div>', html: true, placement: "bottom"});
    });
});