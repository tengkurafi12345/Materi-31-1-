const form = document.getElementById('form');
const modal = document.getElementById('modalKu');
const span = document.getElementsByClassName('close')[0];
// const hasil = document.getElementById('hasil');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    const inputValue = parseInt(document.getElementById('inputAngka').value, 10);
        
    if (inputValue > 10) {
        modal.style.display = 'block';
    }else {
        // alert("input kamu " + inputValue);
        document.getElementById('hasil').innerHTML = "Ongko seng mbok peleh " + inputValue;
    }
});

span.onclick = function() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}
