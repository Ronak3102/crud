const form = document.getElementById("form");
const firstName= document.getElementById("firstname");
const lastName= document.getElementById("lastname");
const email= document.getElementById("email");
const password= document.getElementById("password");
const address= document.getElementById("address");
const city= document.getElementById("city");
const state= document.getElementById("state");
const zip= document.getElementById("zip");


form.addEventListener('submit', (e)=>{
    e.preventDefault();
    checkInputs();

});
// let firstNameValue = 0;
function checkInputs(){
    const firstNameValue = firstName.value;
    const lastNameValue = lastName.value;
    const emailValue = email.value;
    const passwordValue = password.value;
    const addressValue = address.value;
    const cityValue = city.value;
    const stateValue = state.value;
    const zipValue = zip.value;
    if(firstNameValue === ''){
        setErrorForLeft(firstName,"can't be empty");
        
    }
    else{
        setSuccessForLeft(firstName);    
    }
    if(lastNameValue === ''){
        setErrorForRight(lastName,"can't be empty");
        
    }
    else{
        setSuccessForRight(lastName);    
    }
    if(emailValue === ''){
        setErrorForLeft(email,"can't be empty");
        
    }
    else{
        setSuccessForLeft(email);    
    }
    if(passwordValue === ''){
        setErrorForRight(password,"can't be empty");
        
    }
    else{
        setSuccessForRight(password);    
    }
    if(addressValue === ''){
        setErrorForAddress(address,"can't be empty");
        
    }
    else{
        setSuccessForAddress(address);    
    }
    if(cityValue === ''){
        setErrorForLeft(city,"can't be empty");
        
    }
    else{
        setSuccessForLeft(city);    
    }
    if(stateValue === ''){
        setErrorForState(state,"can't be empty");
        
    }
    else{
        setSuccessForState(state);    
    }
    if(zipValue === ''){
        setErrorForzip(zip,"can't be empty");
        
    }
    else{
        setSuccessForzip(zip);    
    }
    
   


    
}


function setErrorForLeft(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-md-6 left error";

}
function setSuccessForLeft(input){
    const parent = input.parentElement;
    parent.className ="col-md-6 left success";
}


function setErrorForRight(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-md-6 right error";

}
function setSuccessForRight(input){
    const parent = input.parentElement;
    parent.className ="col-md-6 right success";
}


function setErrorForAddress(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-12 address error";

}
function setSuccessForAddress(input){
    const parent = input.parentElement;
    parent.className ="col-12 address success";
}

function setErrorForState(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-md-4 state error";

}
function setSuccessForState(input){
    const parent = input.parentElement;
    parent.className ="col-md-4 state success";
}


function setErrorForzip(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-md-2 zip error";

}
function setSuccessForzip(input){
    const parent = input.parentElement;
    parent.className ="col-md-2 zip success";
}


