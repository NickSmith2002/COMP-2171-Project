window.addEventListener('load', ()=>{
    const inputField = document.querySelector('input')
    const btn = document.querySelector('button')
    const resultContainer = document.querySelector('#results')

    btn.addEventListener('click', ()=>{

        fetch('../php/viewApplicationStatus.php')
        .then(response => {
            if(response.ok){return response.text()}
            else{return Promise.reject('Something was wrong with fetch request!')}
        })
        .then(data => {
            alert(data)
        })
        .catch(error => {
            console.log(`ERROR HAS OCCURRED WITH LOADING APPLICATIONS`)
            console.log(`ERROR: ${error}`)
            alert('Failed to load Applications')
        })
    })
})