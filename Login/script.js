const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.[a-z]?$/i;

function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function erroRemove(index){
    campos[index].style.border = '';
    spans[index],style.display = 'none';
}

function nameValidate(){
    if(campos[0].value.length <4){
        console.log('NOME DEVE TER 4 CARACTERES');
    }

    else{
        console.log('NOME VALIDADO')
    }
}