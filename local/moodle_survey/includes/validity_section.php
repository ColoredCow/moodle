<div id="validity">
    <?php
    require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/validity_form.php');
    $mform = new \local_moodle_survey\form\create\validity_form();
    $mform->display();
    ?>
</div>
