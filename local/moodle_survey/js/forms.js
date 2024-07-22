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
        var newSelect = document.createElement('select');
        newSelect.name = 'category';
        newSelect.className = 'form-control category-select';
        newSelect.required = true;
        newSelect.innerHTML = '<option value="0">Inactive</option>' +
                            '<option value="1">Active</option>';
        container.appendChild(newSelect);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('add-new-score-button').addEventListener('click', function() {
        var container = document.getElementById('new-sections-container');
        container.appendChild(createQuestionScoreSection());
    });
});

function createQuestionScoreSection() {
    var newSection = document.createElement('div');
    newSection.className = 'new-option-section question-score-option-section';

    newSection.innerHTML = `
        <div>
            <label for="score" class="form-label">Score</label>
            <input type="number" id="number" class="question-score" name="score[]" min="1" max="10">
        </div>
        <div class="associated-option-section">
            <label for="associatedoption" class="form-label">Associated option</label>
            <input type="text" id="associatedoption" class="question-associatedoption" name="associatedoption[]" placeholder="ex: never">
        </div>
    `;

    return newSection;
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('add-new-category').addEventListener('click', function() {
        console.log("hello")
        var container = document.getElementById('question-category-selection');
        container.appendChild(createQuestionCategorySelectionSection());
    });
});

function createQuestionCategorySelectionSection() {
    var newSection = document.createElement('div');
    newSection.className = 'question-score-category-selection';

    newSection.innerHTML = `
        <select id="id_name" name="status" class="form-control question-score-category-selection" required>
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select>
    `;

    return newSection;
}

// set the default value 0 of the input number type 
document.getElementById("number").defaultValue = "0";