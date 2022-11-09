const formData = document.querySelector('#authorization');
let formEmail = formData.email;
let formPassword = formData.password;


formData.onsubmit = function()
{
    if (!validateEmail())
    {
        document.querySelector('.email__label').classList.add('error-email');
        return false
    }
    if (!validatePassword())
    {
        alert(false)
        document.querySelector('.password__label').classList.add('error-password')
        return false
    }
}


function validateEmail() {
    const regEmail = /^([A-Za-z0-9\-\_])+@[a-z]+\.([a-z]{2,4})$/;
    return regEmail.test(formEmail.value);
}

function validatePassword() {
    const regPassword = /.{4, 8}/;
    return regPassword.test(formPassword.value);
}
