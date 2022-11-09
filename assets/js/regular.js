const formData = document.querySelector('#authorization');
let formEmail = formData.email;
let formPassword = formData.password;

const formSend = document.querySelector('#search');

formSend.onsubmit = function()
{
    if (!validateEmail())
    {
        alert('Почта не подходит!')
        formEmail.style.border= "1px solid red";
        return false
    }
    if (!validateLogin())
    {
        alert('Логин слишком короткий')
        return false
    }
}

function validateEmail() {
    const regEmail = /^([A-Za-z0-9\-\_])+@[a-z]+\.([a-z]{2,4})$/;

}


const regLogin = /[a-zA-z0-9]{6,12}/;