<div id="general">
    <div class="accordion">
        <div class="accordion-header">
            <h5><?php echo get_string('surveydetails', 'local_moodle_survey'); ?></h5>
        </div>
        <div class="accordion-body">
            <?php
            require_once($CFG->dirroot . '/local/moodle_survey/classes/form/create/general_details_form.php');
            $mform = new \local_moodle_survey\form\create\general_details_form();
            if ($mform->is_cancelled()) {
                redirect(new moodle_url('/local/moodle_survey/manage_survey.php'));
            } else if ($data = $mform->get_data()) {
                $record = new stdClass();
                $record->name = $data->name;
                $record->description = $data->description;
                $record->status = $data->status;
                $DB->insert_record('moodle_survey', $record);
                redirect(new moodle_url('/local/moodle_survey/manage_survey.php'));
            }
            $mform->display();
            ?>
        </div>
    </div>
</div>
