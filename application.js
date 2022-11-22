window.onload = function() {
    var nextButton = document.getElementById('review');
    var form = document.querySelector('form');
    var review = document.querySelector('.reviewForm')
    const Fname = document.getElementById('Fname');
    const Lname = document.getElementById('Lname');
    const midinitial = document.getElementById('midtial');
    const ID = document.getElementById('ID');
    const gender = document.querySelector('input[name="Gender"]:checked');
    const DOB = document.getElementById('Dateofbirth');
    const nationality = document.getElementById('nation');
    const single = document.getElementById('single');
    const married = document.getElementById('married');
    const divorced = document.getElementById('divorced');
    const widow = document.getElementById('widow');
    const commonlaw = document.getElementById('common');
    const tele = document.getElementById('telnum');
    const homeaddress = document.getElementById('home');
    const mailaddress = document.getElementById('mail');
    const email = document.getElementById('email');
    const singlepar = document.getElementById('singleparent');
    const nuclear = document.getElementById('nuclear');
    const extended = document.getElementById('extended');
    const sibling = document.getElementById('sibling');
    const childyes = document.getElementById('childrenyes');
    const childrenno = document.getElementById('childrenno');
    const contactname1 = document.getElementById('contname1');
    const contrelationship = document.getElementById('relationship');
    const contaddress = document.getElementById('contaddress');
    const contemail = document.getElementById('contemail');
    const contnumber = document.getElementById('contnumber');
    const contname2 = document.getElementById('contname2');
    const contrelationship2 = document.getElementById('relationship2');
    const contaddress2 = document.getElementById('conthome2');
    const contnumber2 = document.getElementById('contnumber2');
    const undergrad = document.getElementById('undergrad');
    const grad = document.getElementById('grad');
    const lawschool = document.getElementById('lawchool');
    const firstyear = document.getElementById('first');
    const secondyear = document.getElementById('second');
    const thirdyear = document.getElementById('third');
    const fourthyear = document.getElementById('fourth');
    const finalyear = document.getElementById('final');
    const programme = document.getElementById('programme');
    const faculty = document.getElementById('fac');
    const firstyes = document.getElementById('firstgenyes');
    const firstno = document.getElementById('firstgenno');
    const amenities = document.getElementById('yesshare');
    const amenities2 = document.getElementById('noshare');
    const room = document.getElementById('roomtype');
    const malepref = document.getElementById('malepref');
    const femalepref = document.getElementById('femalepref');
    const anypref = document.getElementById('anypref');
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
        review.innerHTML += "Gender: "+gender.value
       
        


    })
}

       