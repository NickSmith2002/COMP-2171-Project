window.onload = function() {
    var nextButton = document.getElementById('review');
    var form = document.querySelector('form');
    var review = document.querySelector('.reviewForm')
    const Fname = document.getElementById('Fname');
    const Lname = document.getElementById('Lname');
    const midinitial = document.getElementById('midtial');
    const ID = document.getElementById('ID');
    const gender = document.getElementsByName("gender");
    const DOB = document.getElementById('Dateofbirth');
    const nationality = document.getElementById('nation');
    const marriage = document.getElementsByName('marStatus');
    const tele = document.getElementById('telnum');
    const homeaddress = document.getElementById('home');
    const mailaddress = document.getElementById('mail');
    const email = document.getElementById('email');
    const famType = document.getElementsByName('famtype');
    const contactname1 = document.getElementById('contname1');
    const contrelationship = document.getElementById('relationship');
    const contaddress = document.getElementById('contaddress');
    const contemail = document.getElementById('contemail');
    const contnumber = document.getElementById('contnumber');
    const contname2 = document.getElementById('contname2');
    const contrelationship2 = document.getElementById('relationship2');
    const contemail2 = document.getElementById('contemail2');
    const contaddress2 = document.getElementById('conthome2');
    const contnumber2 = document.getElementById('contnumber2');
    const levelstudy = document.getElementsByName('levelofstudy');
    const studyyear = document.getElementsByName('yearofstudy');
    const programme = document.getElementById('programme');
    const fac = document.getElementById('faculty');
    const firstgen = document.getElementsByName('firstgenstudent');
    const amenities = document.getElementsByName('accquest1');
    const room = document.getElementById('roomtype');
    const genderpref = document.getElementsByName('gendpref');
    const mate = document.getElementById('matename');
    const arrive = document.getElementById('DOA');
    const football = document.getElementById('football');
    const cricket = document.getElementById('cricket');
    const badminton = document.getElementById('badminton');
    const volley = document.getElementById('volley');
    const basketball = document.getElementById('basketball');
    const hockey = document.getElementById('hockey');
    const lawn = document.getElementById('lawn');
    const netball = document.getElementById('netball');
    const swimming = document.getElementById('swimming');
    const tabletennis = document.getElementById('tennis');
    const track = document.getElementById('track');
    const dance = document.getElementById('dance');
    const speech = document.getElementById('speech');
    const choir = document.getElementById('choir');
    const drama = document.getElementById('drama');
    const intruyes = document.getElementById('playyes');
    const instruno = document.getElementById('playno');




    nextButton.addEventListener("click", function(element){
        element.preventDefault();
        form.classList.add("hidden");
        review.classList.remove("hidden");
        review.innerHTML += `First Name: ${Fname.value}<br>
        Middle Initial(s): ${midinitial.value}<br>
        Last Name: ${Lname.value}<br>
        Identification Number: ${ID.value}<br>`
        gender.forEach(genderitem => {
            if(genderitem.checked){
                review.innerHTML += "Gender: "+genderitem.value + "<br>";
            }
            
        });
        
        review.innerHTML += `Date of Birth: ${DOB.value}<br>
        Nationality: ${nationality.value}<br>`
        marriage.forEach(maritem => {
            if(maritem.checked){
                review.innerHTML += "Marital Status: "+maritem.value + "<br>";
            }
            
        });

        review.innerHTML += `Telephone number: ${tele.value}<br>
        Home Address: ${homeaddress.value}<br>
        Mailing Address: ${mailaddress.value}<br>
        Email Address: ${email.value}<br>`
        famType.forEach(famitem => {
            if(famitem.checked){
                review.innerHTML += "Marital Status: "+famitem.value + "<br>";
            }
            
        });
        review.innerHTML += `Contact name: ${contactname1.value}<br>
        Relationship: ${contrelationship.value}<br>
        Conatct Address: ${contaddress.value}<br>
        Email Address: ${contemail.value}<br>
        Contact number: ${contnumber.value}<br>
        Contact name: ${contname2.value}<br>
        Relationship: ${contrelationship2.value}<br>
        Contact Address: ${contaddress2.value}<br>
        Email Address: ${contemail2.value}<br>
        Contact number: ${contnumber2.value}<br>`
        levelstudy.forEach(level => {
            if(level.checked){
                review.innerHTML += "Level of Study: "+level.value + "<br>";
            }
            
        });
        studyyear.forEach(year => {
            if(year.checked){
                review.innerHTML += "Year of Study: "+year.value + "<br>";
            }
            
        });
        review.innerHTML += `Programme name: ${programme.value}<br>`
        review.innerHTML +=  "Faculty: " +fac.options[fac.selectedIndex].text + "<br>"
        firstgen.forEach(item => {
            if(item.checked){
                review.innerHTML += "First Generation Student: "+item.value + "<br>";
            }
            
        });
        amenities.forEach(item => {
            if(item.checked){
                review.innerHTML += "Shared bathroom or amenities: "+item.value + "<br>";
            }
            
        });
        review.innerHTML +=  "Room Type: " +room.options[room.selectedIndex].text + "<br>"
        genderpref.forEach(item => {
            if(item.checked){
                review.innerHTML += "Roomate Preference "+item.value + "<br>";
            }  
        });
        review.innerHTML += `Roomate name: ${mate.value}<br>
        Date arrival: ${arrive.value}<br>`
        
    })


}


       