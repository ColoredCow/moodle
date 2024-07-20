function addQuestionField() {
    // Logic to clone the last question and score fields, update indices, and append to the form
}

document.addEventListener('DOMContentLoaded', function() {
    var accHeaders = document.querySelectorAll('.accordion-header');

    accHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            var accBody = this.nextElementSibling;
            if (accBody.style.display === 'none') {
                accBody.style.display = 'block';
            } else {
                accBody.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('add-category-button').addEventListener('click', function() {
        var container = document.getElementById('new-category-input-container');
        var newInput = document.createElement('input');
        newInput.setAttribute('type', 'text');
        newInput.setAttribute('name', 'newcategory');
        newInput.setAttribute('class', 'form-control');
        container.appendChild(newInput);
    });
});
