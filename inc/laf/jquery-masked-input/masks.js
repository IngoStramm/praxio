﻿jQuery(document).ready(function () {
    //Inicio Mascara Celular
    jQuery('.cel-input').mask("(99) 9999-9999?9").ready(function (event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = (typeof target === 'undefined') ? '' : target.value.replace(/\D/g, '');
        element = jQuery(target);
        element.unmask();
        if (phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });
    //Fim Mascara Celular
    //Início Máscara Telefone
    jQuery(".fone-input").mask("(99) 9999-9999");
    //Fim Máscara Telefone
    //Início Máscara Telefone Internacional
    jQuery(".world-fone-input").mask("+99 (99) 9999-9999?9");
    //Fim Máscara Telefone Internacional
    //Inicio Mascara RG
    jQuery(".rg-input").mask("99.999.999-*");
    //Fim Mascara CPF
    //Inicio Mascara CPF
    jQuery(".cpf-input").mask("999.999.999-99");
    //Fim Mascara CPF
    //Inicio Mascara CNPJ
    jQuery(".cnpj-input").mask("99.999.999/9999-99");
    //Fim Mascara CNPJ
    //Inicio Mascara CEP
    jQuery(".cep-input").mask("99999-999");
    //Fim Mascara CEP
    //Inicio Mascara Data
    jQuery(".date-input").mask("99/99/9999");
    //Fim Mascara Data
    //Inicio Mascara Ano
    jQuery(".year-input").mask("9999");
    //Fim Mascara Ano
});
(jQuery);