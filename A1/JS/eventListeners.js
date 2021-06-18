var elUsername = document.getElementById('username')
var elPassword = document.getElementById
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

}

elUsername.addEventListener('blur',checkUsername,false)