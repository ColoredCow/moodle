<div id="questions">
    <?php
    require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/questions_scores_form.php');
    $mform = new \local_moodle_survey\form\create\questions_scores_form();
    $mform->display();
    ?>
</div>
