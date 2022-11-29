window.addEventListener('load', ()=>{
    const username = document.querySelector('#username')
    const password = document.querySelector('#password')
    const username_msg = document.querySelector('.username-msg')
    const password_msg = document.querySelector('.password-msg')

  

    const loginBtn = document.querySelector('button')
    let spinner = '<div class="loader"></div>'
    

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
            let formData = new FormData()
            formData.append('username', uname)
            formData.append('password', pass)

            
            loginBtn.innerHTML = spinner

            fetch('../php/login.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if(response.ok){return response.text()}
                else{return Promise.reject('Something was wrong with fetch request!')}
            })
            .then(data => {
                console.log(data)

                if(data == '1'){
                    window.location.replace("../html/processApplication.html");
                }
                else if(data == '0'){
                    //Just adding the error message to the password error box since it's already at the bottom
                    password_msg.innerHTML = "<i class=\"material-icons\">&#xe000;</i>Couldn't find your account"
                    username.classList.add('error')
                    password.classList.add('error')
                    loginBtn.innerHTML = 'Log in'
                }
                else if(data == '-1'){
                    password_msg.innerHTML = "<i class=\"material-icons\">&#xe000;</i>Username or Password incorrect"
                    username.classList.add('error')
                    password.classList.add('error')
                    loginBtn.innerHTML = 'Log in'
                }
                else{
                    alert('Unable to Connect')
                    loginBtn.innerHTML = 'Log in'
                }

            })
            .catch(error => {
                console.log(`ERROR HAS OCCURRED WITH LOGIN`)
                loginBtn.innerHTML = 'Log in'
            })
            
        }
    })
})