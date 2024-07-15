const moodLabels = document.querySelectorAll('.singer-label');

moodLabels.forEach(label => {
    label.addEventListener('click', function() {
        moodLabels.forEach(label => {
            label.style.border = 'none';
        });
        this.style.border = '5px solid #fff';
    });
});
