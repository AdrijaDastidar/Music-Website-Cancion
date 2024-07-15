const radioInputs = document.querySelectorAll('.input-radio');

radioInputs.forEach(input => {
    input.addEventListener('change', function() {
        const allLabels = document.querySelectorAll('.singer-label');
        allLabels.forEach(label => {
            label.style.border = 'none';
        });

        const selectedLabelId = this.id.replace('-radio', '-label');
        const selectedLabel = document.getElementById(selectedLabelId);
        selectedLabel.style.border = '5px solid white';
    });
});
