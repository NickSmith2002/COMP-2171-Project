window.addEventListener('load', () => {

    const logout = document.querySelector("#logout")
    const user = document.querySelector("#user")

    const viewResidentsBtn = document.querySelector(".view-residents")
    const viewBlockLynxBtn = document.querySelector(".view-blockL")
    const viewBlockGenusBtn = document.querySelector(".view-blockG")
    const viewBlockPardusBtn = document.querySelector(".view-blockP")
    
    const filterFName = document.querySelector(".filter-fName")
    const filterMName = document.querySelector(".filter-mName")
    const filterlName = document.querySelector(".filter-lName")
    const filterPosition = document.querySelector(".filter-position")
    const filterNationality = document.querySelector(".filter-nationality")
    const filterRoom = document.querySelector(".filter-room")

    const downloadBtn = document.querySelector("#download button")

    const results = document.querySelector('#results')
    const resultContainer = document.querySelector("#results .container")


    //CHECK IF LOGGED IN
    /*
    fetch(`../php/checkLogin.php`)
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
        //IF session isn't set, redirect to other page
        if(data == "KILL"){

            window.location.replace("../html/loggedOut.html");
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
    */

    //Log out button
    logout.addEventListener('click', ()=>{
        fetch('../php/logout.php')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            window.location.replace("../html/loggedOut.html")
        })
        .catch(error => {
            console.log(`ERROR: ${error}`)
            alert('FETCH FAILED')
            
        })
    })

    //Change filter Button Colors when clicked
    let allFilterButtons = document.querySelectorAll(".filters button")
    allFilterButtons.forEach(btn => {
        btn.addEventListener('click', ()=>{
            btn.classList.toggle("on")
            btn.classList.toggle("off")
        })
    });

    //Download PDF FILE
    downloadBtn.addEventListener('click', () => {
        html2pdf()
        .from(results)
        .save()
    })

    //Generate Fetch Url Filter Parameters
    function getFilterParamters(){
        //The paramaters will be sent to php to query the Database with
        let fNameS
        let mNameS
        let lNameS
        let positionS
        let nationalityS
        let roomS

        if(filterFName.classList.contains("on")){fNameS = 'First Name'}
        else{fNameS=''}

        if(filterMName.classList.contains("on")){mNameS = 'Middle Initial'}
        else{mNameS=''}

        if(filterlName.classList.contains("on")){lNameS = 'Last Name'}
        else{lNameS=''}

        if(filterPosition.classList.contains("on")){positionS = 'Position'}
        else{positionS=''}

        if(filterNationality.classList.contains("on")){nationalityS = 'Nationality'}
        else{nationalityS=''}

        if(filterRoom.classList.contains("on")){roomS = 'Room Number'}
        else{roomS=''}

        let parameters = `fname=${fNameS}&mname=${mNameS}&lname=${lNameS}&position=${positionS}&nationality=${nationalityS}&room=${roomS}`
        
        return parameters
    }

    //VIEW RESIDENTS REPORT
    viewResidentsBtn.addEventListener('click', ()=>{
        fetch(`../php/reportGeneration.php?view=Resident&${getFilterParamters()}`)
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = "<h1>Report of all Residents</h1>"
            resultContainer.innerHTML += data
            console.log(data)
        })
        .catch(error => {
            console.log(`ERROR: ${error}`)
        })
    })

    //VIEW BLOCK G REPORTW
    viewBlockGenusBtn.addEventListener('click', ()=>{
        fetch(`../php/reportGeneration.php?view=Genus&${getFilterParamters()}`)
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = "<h1>Report of Genus Block</h1>"
            resultContainer.innerHTML += data
        })
        .catch(error => {
            console.log(`ERROR: ${error}`)
        })
    })

    //VIEW BLOCK L REPORT
    viewBlockLynxBtn.addEventListener('click', ()=>{
        fetch(`../php/reportGeneration.php?view=Lynx&${getFilterParamters()}`)
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = "<h1>Report of Lynx Block</h1>"
            resultContainer.innerHTML += data
        })
        .catch(error => {
            console.log(`ERROR: ${error}`)
        })
    })

    //VIEW BLOCK P REPORT
    viewBlockPardusBtn.addEventListener('click', ()=>{
        fetch(`../php/reportGeneration.php?view=Pardus&${getFilterParamters()}`)
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = "<h1>Report of Pardus Block</h1>"
            resultContainer.innerHTML += data
        })
        .catch(error => {
            console.log(`ERROR: ${error}`)
        })
    })
})