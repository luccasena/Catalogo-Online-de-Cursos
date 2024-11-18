const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = "^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$";

function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function erroRemove(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nameValidate(){
    if(campos[0].value.length < 4)
    {
        setError(0);
    }

    else
    {
        erroRemove(0);
    }

}

function emailValidate(){
    if (emailRegex.test(campos[1].value)) 
    {
        setError(1);
    }

    else
    {
        erroRemove(1);
    }
}

function passwordValidate(){
    if(campos[2].value.length < 8)
    {
        setError(2);
    }

    else{
        erroRemove(2);
        confirmPassword();
    }
}

function confirmPassword(){
    if(campos[2].value == campos[3].value )
    {
        erroRemove(3);
    }

    else
    {
        setError(3);
    }
}