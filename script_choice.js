document.addEventListener('DOMContentLoaded', function() {
    const optionLabels = document.querySelectorAll('.option-label');

    optionLabels.forEach(label => {
        label.addEventListener('click', function() {
            optionLabels.forEach(label => {
                label.style.border = '2px solid rgba(255, 255, 255, 0.5)';
            });
            this.style.border = '5px solid #fff';
        });
    });
});
