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

function sendData(sRate, count){
    
    if(sRate === count){
        document.getElementById("form").submit();
    }
}

function success(){
    
    let formCon = document.getElementsByClassName("col-md-6");
    var count = formCon.length - 1;
    for(var i=0;i<formCon.length;i++){
        if(formCon[i].className === "col-md-6 success"){
            
            var sRate = 0+i;
            sendData(sRate, count);
        } else{
            
            return false;
            
        }
    }

    
}

function checkInputs(){
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const addressValue = address.value.trim();
    const cityValue = city.value.trim();
    const stateValue = state.value.trim();
    const zipValue = zip.value.trim();

    // validate firstname
    if(firstNameValue === ''){
        setErrorFor(firstName,"can't be empty");
       
    }
    else if(firstNameValue.length < 2){
        
        setErrorFor(firstName,"minimum 2 characters");
    }
       else {
        setSuccessFor(firstName);    
    }

    // validate lastname
    if(lastNameValue === ''){
        setErrorFor(lastName,"can't be empty");
        
    } else if(lastNameValue.length < 2){

        setErrorFor(lastName,"minimum 2 characters");
    }
    else{
        setSuccessFor(lastName);    
    }

    // validate email
    if(emailValue === ''){
        setErrorFor(email,"can't be empty");
        
    }
    else{
        setSuccessFor(email);    
    }

    // validate password
    if(passwordValue === ''){
        setErrorFor(password,"can't be empty");
        
    } else if(passwordValue.length < 6){
        setErrorFor(password,"minimum 6 characters");
    }
    else{
        setSuccessFor(password);    
    }


    // validate address
    if(addressValue === ''){
        setErrorFor(address,"can't be empty");
        
    }
    else{
        setSuccessFor(address);    
    }

    // validate city
    if(cityValue === ''){
        setErrorFor(city,"can't be empty");
        
    }
    else{
        setSuccessFor(city);    
    }

    // validate state
    if(stateValue === ''){
        setErrorFor(state,"can't be empty");
        
    }
    else{
        setSuccessFor(state);    
    }

    // validate ZIP
    if(zipValue === ''){
        setErrorFor(zip,"can't be empty");
        
    } else if(zipValue.length !== 6){
        setErrorFor(zip,"should be 6 digit long");
    }
    else{
        setSuccessFor(zip);    
    }

    success();
    
}


function setErrorFor(input,message){
    const parent = input.parentElement;
    const small = parent.querySelector('small');
    small.innerHTML = message;
    parent.className ="col-md-6 error";
    

}
function setSuccessFor(input){
    const parent = input.parentElement;
    parent.className ="col-md-6 success";
}







