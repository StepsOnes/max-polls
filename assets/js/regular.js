const formData = document.querySelector('#authorization');
let formEmail = formData.email;
let formPassword = formData.password;


formData.onsubmit = function()
{
    if (!validateEmail())
    {
        alert('Почта не подходит!')
        formEmail.style.border= "1px solid red";
        return false
    }
    if (!validatePassword())
    {
        alert('Минимум 8 символов')
        return false
    }
}


function validateEmail() {
    const regEmail = /^([A-Za-z0-9\-\_])+@[a-z]+\.([a-z]{2,4})$/;
    return regEmail.test(formEmail.value);
}

function validatePassword() {
    const regPassword = /[A-Za-z0-9]{4, 8}]/;
    return regPassword.test(formPassword.value)
}
