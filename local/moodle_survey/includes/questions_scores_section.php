<div id="questions">
    <div class="accordion">
        <div class="accordion-header general-details-section">
            <?php $iconurl = new moodle_url('/local/moodle_survey/pix/arrow-down.svg');
                echo '<img src="' . $iconurl . '" alt="Icon" class="accordion-icon">';
            ?>
            <h5>Question 1</h5>
        </div>
        <div class="accordion-body general-details">
            <?php
                require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/questions_scores_form.php');
                $mform = new \local_moodle_survey\form\create\questions_scores_form();
                $mform->display();
            ?>
        </div>
    </div>
</div>

