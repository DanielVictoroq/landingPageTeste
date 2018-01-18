
$(document).ready(()=>{
    document.querySelectorAll("input").forEach((target)=>{
        target.value="";
    });



    $('.date').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.phone_with_ddd').mask('(00) 00000-0000');

});

function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
//FIM DA FUNÇÃO MASCARA MAIUSCULA

function valida(campo){
    let regex;
    switch(campo.getAttribute("id")){
        case "nome":
            regex = /[^a-z\s]/gi;
            campo.value = campo.value.replace(regex, "");
            break;
        case "email":
        regex = /[\s]/;
        campo.value = campo.value.replace(regex, "");
        break;
        case "date":
            if(campo.value.substr(6,9) > "2009"){
                campo.value = campo.value.substr(0,6);
            }
            else if(campo.value.substr(3,4) > "13"){
                campo.value = campo.value.substr(0,3);
                console.log(campo.value);
            }
            else if(campo.value.substr(0,2) > "31"){
                campo.value = "";
            }
        break;
    }
    if(campo.getAttribute("id") == "nome"){
    }
    else if(campo.getAttribute("id") == "email"){
        let regex = /[\s]/gi;
        campo.value = campo.value.replace(regex, "");
    }
    else if(campo.getAttribute("id") == "email"){
        let regex = /[\s]/gi;
        campo.value = campo.value.replace(regex, "");
    }
}
jQuery(function($){
    correios.init( 'CY3chRdFLtglzCBQ1ukV6s3FVTy3Hxrk', '1oABJGRLtoDVOIATvKi4xnbAqdceqtfK5Bx4Z4X5CenKmviR' );
    $('#cep').correios( '#rua', '#bairro', '#cidade', '#estado', '' );
    setTimeout(() => {

    }, 2000);
});
