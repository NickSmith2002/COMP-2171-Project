window.onload = function(){
const updateBtn = document.querySelector(".update-resident")
const deleteBtn = document.querySelector(".delete-resident")
const viewRABtn = document.querySelector(".view-residentadvisors")
const viewBRBtn = document.querySelector(".view-blockreps")
const viewSRBtn = document.querySelector(".view-standardresidents")
const viewallBtn = document.querySelector(".view-all")
const resultContainer = document.getElementById('result')
const updateModal = document.querySelector(".modal.update")
const deleteModal = document.querySelector(".modal.delete")
const closeBtnupdate = document.querySelector(".close1")
const confirmBtnupdate = document.querySelector(".confirm1")
const closeBtndelete = document.querySelector(".close2")
const confirmBtndelete = document.querySelector(".confirm2")
const idUpdate = document.querySelector("#IDnumupdate")
const fUpdate = document.querySelector("#Fnameupdate")
const lUpdate = document.querySelector("#Lnameupdate")
const initialUpdate = document.querySelector("#Midinitialupdate")
const posUpdate = document.querySelector("#positionupdate")
const phoneUpdate = document.querySelector("#Phoneupdate")
const emailUpdate = document.querySelector("#Emailupdate")
const idDelete = document.querySelector("#IDnumdelete")



//view all button
viewallBtn.addEventListener("click", function(element){
    element.preventDefault();

    fetch('../php/residentUpdate.php?view=all')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       resultContainer.innerHTML = data
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})

 //view Standard Residents
viewSRBtn.addEventListener("click", function(element){
    element.preventDefault();

    fetch('../php/residentUpdate.php?view=standardResidents')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       resultContainer.innerHTML = data
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})
//view Block Representatives
viewBRBtn.addEventListener("click", function(element){
    element.preventDefault();

    fetch('../php/residentUpdate.php?view=blockRepresentatives')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       resultContainer.innerHTML = data
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})

//View Resident Advisors
viewRABtn.addEventListener("click", function(element){
    element.preventDefault();

    fetch('../php/residentUpdate.php?view=residentAdvisors')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       resultContainer.innerHTML = data
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})
//update modal
updateBtn.addEventListener("click", function(element){
    element.preventDefault();
    updateModal.showModal();
})

deleteBtn.addEventListener("click", function(element){
    element.preventDefault();
    deleteModal.showModal();
})

confirmBtnupdate.addEventListener("click", function(element){
    element.preventDefault();
    fetch(`../php/residentUpdate.php?update=true&id=${idUpdate.value}&firstname=${fUpdate.value}&lastname=${lUpdate.value}&midinitial=${initialUpdate.value}&position=${posUpdate.value}&phonenumber=${phoneUpdate.value}&email=${emailUpdate.value}`)
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       alert(data) 
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})

confirmBtndelete.addEventListener("click", function(element){
    element.preventDefault();

    fetch(`../php/residentUpdate.php?delete=true&id=${idDelete.value}`)
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
       alert(data) 
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})

closeBtnupdate.addEventListener("click",function(element){
    updateModal.close()
})

closeBtndelete.addEventListener("click",function(element){
    deleteModal.close()
})

confirmBtndelete.addEventListener("click",function(element){
    updateModal.close()
})
confirmBtnupdate.addEventListener("click",function(element){
    updateModal.close()
})


//CHECK IF LOGGED IN
fetch(`../php/checkLogin.php`)
.then(response => {
    if(response.ok){return response.text()}
    else{return Promise.reject('Something was wrong with fetch request!')}
})
.then(data => {
    //IF session isn't set, redirect to other page
    if(data == "KILL"){

        window.location.replace("../html/homepage.html");
    }
    //If session is set then Add user data to page
    else{
        user.innerHTML = data
    }
})
.catch(error => {
    window.location.replace("../html/ConnectionError.html");
    alert('LOAD FAILED')
})

//Verifying Authentification
fetch(`../php/residentUpdate.php?position=check`)
.then(response => {
    if(response.ok){return response.text()}
    else{return Promise.reject('Something was wrong with fetch request!')}
})
.then(data => {
    //IF Not authorized user
    console.log(data)
    if(data == "Resident Advisor"){
        console.log(`User Type is: ${data}. Access Authorized`)
    }
    else{
        window.location.replace("../html/notAuthorized.html");
    }

})
.catch(error => {
    window.location.replace("../html/ConnectionError.html");
    alert('LOAD FAILED')
})


//Log out button
logout.addEventListener('click', ()=>{
    fetch('../php/logout.php')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
        window.location.replace("../html/homepage.html")
    })
    .catch(error => {
        console.log(`ERROR: ${error}`)
        alert('FETCH FAILED')
        
    })
})
    
}





