window.onload = function(){
const updateBtn = document.querySelector(".update-resident")
const deleteBtn = document.querySelector(".delete-resident")
const viewRABtn = document.querySelector(".view-residentadvisors")
const viewBRBtn = document.querySelector(".view-blockreps")
const viewSRBtn = document.querySelector(".view-standardresidents")
const viewallBtn = document.querySelector(".view-all")
const resultContainer = document.getElementById('result')

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
    
}





