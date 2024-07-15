var englishRadio = document.getElementById('english-radio');
var hindiRadio = document.getElementById('hindi-radio');

englishRadio.addEventListener('change', function() {
    if (englishRadio.checked) {
        document.getElementById('english-label').style.border = '5px solid #ffffff';
        document.getElementById('hindi-label').style.border = ''; 
    }
});

hindiRadio.addEventListener('change', function() {
    if (hindiRadio.checked) {
        document.getElementById('hindi-label').style.border = '5px solid #ffffff';
        document.getElementById('english-label').style.border = ''; 
    }
});
