<div id="audience">
    <?php
    require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/audience_access_form.php');
    $mform = new \local_moodle_survey\form\create\audience_access_form();
    $mform->display();
    ?>
</div>
