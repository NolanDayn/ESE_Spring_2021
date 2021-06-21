var elUsername = document.getElementById('username')
var elPassword = document.getElementById('pass')
var elMsg = document.getElementById('feedback')

function checkUsername(){
    if(elUsername.value.length < 7){
        console.log('here')
        elMsg.innerHTML = 'Username to short, enter username with 7 or more characters'
    }else{
        elMsg.innerHTML = '';//Clear any error messages
    }
}

function checkPassword(){
    if(elPassword.value.length < 7){
        console.log('here')
        elMsg.innerHTML = 'Password to short, enter password with 7 or more characters'
    }else{
        elMsg.innerHTML = '';//Clear any error messages
    }
}

elUsername.addEventListener('blur',checkUsername,false)
elPassword.addEventListener('blur',checkPassword,false)

window.addEventListener('load', (event) => {
    elUsername.focus()
});