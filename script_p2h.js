const radioButtons = document.querySelectorAll('.input-radio');

radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', function() {
        document.querySelectorAll('.singer-label').forEach(label => {
            label.style.border = 'none';
        });

        if (this.checked) {
            const singerLabel = this.parentElement;
            singerLabel.style.border = '5px solid white';
        }
    });
});
