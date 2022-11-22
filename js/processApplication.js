window.addEventListener('load', ()=> {

    const resultContainer = document.querySelector('#result')
    const viewAcceptedBtn = document.querySelector('.view-accept')
    const viewRejectedBtn = document.querySelector('.view-reject')
    const viewPendingBtn = document.querySelector('.view-pending')
    const viewAllBtn = document.querySelector('.view-all')

    let dropDowns

    console.log(`DROPDOWNS: ${dropDowns}`)
    
    //SORT FUNCTIONS
    sortShow = (text) => {
        document.querySelector(".sort .dropdown .textBox").value = text
    }

    statusShow = (text) => {
        document.querySelector("#result .dropdown .textBox").value = text
        console.log(text)
    }

    //INITIAL DATABASE TABLE FETCH
    fetch('../php/applicationProcess.php', {
        method: 'POST',
    })
    .then(response => {
        if(response.ok){return response.text()}
        else{return Promise.reject('Something was wrong with fetch request!')}
    })
    .then(data => {
        resultContainer.innerHTML = data
        dropDowns = document.querySelectorAll('.dropdown')

        dropDowns.forEach(dropDown => {
            dropDown.addEventListener('click', ()=>{
                dropDown.classList.toggle('active');
            })
        });
    })
    .catch(error => {
        console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
        console.log(`ERROR: ${error}`)
        alert('Failed to load Applications')
    })
    
    //Fetching the Name of the user
    fetch('../php/applicationProcess.php', {

    })
    .then(response => {

    })
    .then(data => {
        
    })

    //DISPLAYING DIFFERENT TABLE TYPES
    //DISPLAY THE TABLE OF ACCEPTED APPLICATIONS
    viewAcceptedBtn.addEventListener('click', ()=>{
        alert('Clicked View Accepted')
        fetch('../php/applicationProcess.php?view=accepted')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = data
            dropDowns = document.querySelectorAll('.dropdown')

            dropDowns.forEach(dropDown => {
                dropDown.addEventListener('click', ()=>{
                    dropDown.classList.toggle('active');
                })
            });
        })
        .catch(error => {
            console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
            console.log(`ERROR: ${error}`)
            alert('Failed to load Applications')
        })
    })

    //DISPLAY THE TABLE OF REJECTED APPLICATIONS
    viewRejectedBtn.addEventListener('click', ()=>{
        alert('Clicked View REJECTED')
        fetch('../php/applicationProcess.php?view=rejected')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = data
            dropDowns = document.querySelectorAll('.dropdown')

            dropDowns.forEach(dropDown => {
                dropDown.addEventListener('click', ()=>{
                    dropDown.classList.toggle('active');
                })
            });
        })
        .catch(error => {
            console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
            console.log(`ERROR: ${error}`)
            alert('Failed to load Applications')
        })
    })

    //DISPLAY THE TABLE OF PENDING APPLICATIONS
    viewPendingBtn.addEventListener('click', ()=>{
        alert('Clicked View PENDING')
        fetch('../php/applicationProcess.php?view=pending')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            console.log(data)
            resultContainer.innerHTML = data
            dropDowns = document.querySelectorAll('.dropdown')

            dropDowns.forEach(dropDown => {
                dropDown.addEventListener('click', ()=>{
                    dropDown.classList.toggle('active');
                })
            });
        })
        .catch(error => {
            console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
            console.log(`ERROR: ${error}`)
            alert('Failed to load Applications')
        })
    })

    //DISPLAY THE TABLE OF ALL APPLICATIONS
    viewAllBtn.addEventListener('click', ()=>{
        alert('Clicked View ALL')
        fetch('../php/applicationProcess.php?view=all')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            resultContainer.innerHTML = data
            dropDowns = document.querySelectorAll('.dropdown')

            dropDowns.forEach(dropDown => {
                dropDown.addEventListener('click', ()=>{
                    dropDown.classList.toggle('active');
                })
            });
        })
        .catch(error => {
            console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
            console.log(`ERROR: ${error}`)
            alert('Failed to load Applications')
        })
    })

})