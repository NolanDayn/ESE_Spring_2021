elFName = document.getElementById('fname')
elLName = document.getElementById("lname")
elEmail = document.getElementById("email")
elWebsite = document.getElementById("website")
elBDate = document.getElementById("bdate")
elErrorLog = document.getElementsByName('errorLog')
//faculty = document.querySelector('input[name="fac_or_student"]:checked')
involvement = document.querySelector('input[name="involvement"]:checked')

elComments = document.getElementById("comments")

function checkLength(){
    if(elComments.value.length > 180){
        alert("Error: Max Comment Length is 180 Characters")
    }
}

function validateInput(){
    if(!elFName.value){
       alert("Must Enter A First Name")
    }
    else if(){

    }
    else if(){

    }
    else if(){
        
    }


}