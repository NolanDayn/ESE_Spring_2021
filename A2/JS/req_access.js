elFName = document.getElementById('fname')
elLName = document.getElementById("lname")
elEmail = document.getElementById("email")
elWebsite = document.getElementById("website")
elBDate = document.getElementById("bdate")
elFaculty = document.getElementsByName('fac_or_student');
elInvolvement = document.getElementsByName('involvement');
elDriveCar = document.getElementById("drives_car")

elComments = document.getElementById("comments")
elFeedback = document.getElementById("feedback")

function checkLength(){
    if(elComments.value.length > 180){
        alert("Error: Max Comment Length is 180 Characters")
    }
}

function validateInput(){

    let faculty = null
    for(i = 0; i < elFaculty.length; i++) {
        if(elFaculty[i].checked){
           faculty = elFaculty[i].value;
        }
    }

    let involvement = null
    for(i = 0; i < elInvolvement.length; i++){
        if(elInvolvement[i].checked){
            involvement = elInvolvement[i].value
        }
    }

    if(!elFName.value){
        alert("Must Enter A First Name")
        return false
    }
    else if(!elLName.value){
        alert("Must Enter A Last Name")
        return false
    }
    else if(!elEmail.value){
        alert("Must Enter an Email")
        return false
    }
    //Skip website as a user doesnt need a website to sign up
    else if(!elBDate.value){
        alert("Must Enter A Birth Date")
        return false
    }
    else if(elDriveCar.value == 'no_answer'){
        alert("Must Enter If You Drive a Car or Not")
        return false
    }
    else if(!involvement){
        alert("Must Enter Project Involvement")
        return false
    }
    else if(!faculty){
        alert("Must Enter if Faculty or Student")
        return false
    }


}