window.onload = function(){
    const submitbutton = document.querySelector(".submit")
    const roomnumber = document.getElementById("#roomnum")
    const residentid = document.getElementById("#residentid1")
    const residentid2 = document.getElementById("#residentid2")
    

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

    //Verifying Authentification
    fetch(`../php/roomAssignment.php?position=check`)
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



    //INITIAL DATABASE TABLE FETCH
    fetch('../php/roomAssignment.php?view=true')
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
        resultContainer.innerHTML = data
    })
    .catch(error => {
        console.log(`ERROR HAS OCCURRED WITH LOADING ROOM TABLE`)
        console.log(`ERROR: ${error}`)
        alert('Failed to load Room Table')
    })


    
}
    
