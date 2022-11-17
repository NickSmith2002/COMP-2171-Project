window.addEventListener('load', ()=>{
    const username = document.querySelector('#username')
    const password = document.querySelector('#password')
    const username_msg = document.querySelector('.username-msg')
    const password_msg = document.querySelector('.password-msg')

    const loginBtn = document.querySelector('button')


    loginBtn.addEventListener('click', (event)=>{
        event.preventDefault()

        uname = username.value.trim()
        pass = password.value.trim()

        unameOK = false
        passOK = false

        if(uname == ""){
            username_msg.innerHTML = "<i class=\"material-icons\">&#xe000;</i>Enter a username"
            unameOK = false
            username.classList.add('error')
        }
        else{
            username_msg.textContent = ""
            unameOK = true
            username.classList.remove('error')
        }

        if(pass == ""){
            password_msg.innerHTML = "<i class=\"material-icons\">&#xe000;</i>Enter a password"
            passOK = false
            password.classList.add('error')
        }
        else{
            password_msg.textContent = ""
            passOK = true
            password.classList.remove('error')
        }

        if(unameOK & passOK){
            fetch(url)
            .then(response => {
                if(response.ok){return response.text()}
                else{return Promise.reject('Something was wrong with fetch request!')}
            })
            .then(data => {

            })
            .catch(error => console.log(`ERROR HAS OCCURRED WITH LOGIN`))
        }
    })
})