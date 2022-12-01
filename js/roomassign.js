window.onload = function(){
    const submitbutton = document.querySelector(".submit")
    const roomnumber = document.querySelector("#roomnum")
    const residentid1 = document.querySelector("#residentid1")
    const residentid2 = document.querySelector("#residentid2")
    const submitBtn = document.querySelector(".submit")
    const resultContainer = document.querySelector("#result")
    const roomStatus = document.querySelectorAll('.radio')


    const logoutBtn = document.querySelector("#logout")
    

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


    //CLICKING THE SUBMIT BUTTON
    submitBtn.addEventListener('click', (e) => {
        e.preventDefault()
        alert('Clicked Submit')

        let res1
        let res2
        let status = "-1"

        if(residentid1.value.trim() == ""){
            res1 = "-1"
        }
        else{
            res1 = residentid1.value.trim()
        }

        if(residentid2.value.trim() == ""){
            res2 = "-1"
        }
        else{
            res2 = residentid2.value.trim()
        }

        roomStatus.forEach(item => {
            if(item.checked){
                if(item.classList.contains("occupied")){
                    status = "Occupied"
                }
                
                if(item.classList.contains("available")){
                    status = "Available"
                }
            }
            
        });

        alert(`Assigning ${res1} and ${res2} and status of ${status} to Room: ${roomnumber.value.trim()}`)

        if(roomnumber.value.trim() != ""){
            fetch(`../php/roomAssignment.php?assignRoom=${roomnumber.value.trim()}&res1=${res1}&res2=${res2}&status=${status}`)
            .then(response => {
                if(response.ok){return response.text()}
                else{return Promise.reject('Something was wrong with fetch request!')}
            })
            .then(data => {
                alert(data)
            })
            .catch(error => {
                console.log(`ERROR HAS OCCURRED`)
                console.log(`ERROR: ${error}`)
                alert('Failed to update Room')
            })
        }

    })
}
    
