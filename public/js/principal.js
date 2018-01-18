
$(document).ready(()=>{
    document.querySelectorAll("input").forEach((target)=>{
        target.value="";
    });

    $('.date').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.phone_with_ddd').mask('(00) 00000-0000');

});


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

            else if(campo.value.substr(0,1) > "31"){
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

var card = document.querySelector(".card");
var cardBtn = document.querySelector(".card-btn");
var formulario = document.querySelector(".formulario");
var atendente = document.querySelector(".atendente");
var btn = document.querySelector(".btn");
var mensagem = document.querySelector(".mensagem");


function esconde(){
    atendente.classList.add("display-none");
    card.classList.add("card-animation");
    formulario.classList.add("form-animation");
    btn.classList.add("btn-animation");
    cardBtn.classList.add("out");
    cardBtn.textContent="Preencha seus dados!";
}

cardBtn.addEventListener("click", (target) =>{
    atendente.classList.add("display");
    setTimeout(() => {
        atendente.classList.add("display-none");
        card.classList.add("card-animation");
        formulario.classList.add("form-animation");
        btn.classList.add("btn-animation");

    }, 200);

    console.log (formulario);
    cardBtn.classList.add("out");
    setTimeout(() => {
        cardBtn.textContent="Preencha seus dados!";
    }, 2000);

});

function refazLayout(){
    card.classList.add("card-fade");
    setTimeout(() => {
        card.classList.add("esconde-card");
        mensagem.classList.add("posiciona-texto");
        atendente.classList.add("posiciona-atendente");
    }, 500);


}


console.log(cardBtn);
