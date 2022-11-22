window.onload = function() {
    var nextButton = document.getElementById('review');
    var form = document.querySelector('form');
    var review = document.querySelector('.reviewForm')
    const Fname = document.getElementById('Fname');
    const Lname = document.getElementById('Lname');
    const midinitial = document.getElementById('midtial');
    const ID = document.getElementById('ID');
    const male1 = document.getElementById('gen');
    const female1 = document.getElementById('gen2');
    const DOB = document.getElementById('Dateofbirth');


    nextButton.addEventListener("click", function(element){
        element.preventDefault();
        form.classList.add("hidden");
        review.classList.remove("hidden");
        review.innerHTML += Fname.value + Lname.value + midinitial.value + ID.value + male1.value + female1.value
        + DOB.value;

    });
}