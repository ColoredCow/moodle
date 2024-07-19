<div id="interpretations">
    <?php
    require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/interpretations_form.php');
    $mform = new \local_moodle_survey\form\create\interpretations_form();
    $mform->display();
    ?>
</div>
