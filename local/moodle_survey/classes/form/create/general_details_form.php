<?php
namespace local_moodle_survey\form\create;

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class general_details_form extends \moodleform {
    public function definition() {
        $mform = $this->_form;

        // Add custom HTML for form heading
        $mform->addElement('html', '<div class="form-section">');
        $iconurl = new \moodle_url('/local/moodle_survey/pix/plus-icon.svg');

        // Name field with custom HTML
        $mform->addElement('html', '<div class="form-group">');
        $mform->addElement('html', '<label for="id_name">' . get_string('surveycategory', 'local_moodle_survey') . '</label>');
        $mform->addElement('html', '<input type="text" id="id_name" name="name" class="form-control" required>');
        $mform->addElement('html', '<div class="new-survey-category-section">');
        $mform->addElement('html', '');
        $mform->addElement('html', '<div id="new-category-input-container"></div>');
        $mform->addElement('html', '<button type="button" id="add-category-button"><img src="' . $iconurl . '" alt="Icon" class="plus-icon">' . get_string('newsurveycategory', 'local_moodle_survey') . '</button>');
        $mform->addElement('html', '</div> </div>');

        // Description field with custom HTML
        $mform->addElement('html', '<div class="form-group">');
        $mform->addElement('html', '<label for="id_description">' . get_string('surveydescription', 'local_moodle_survey') . '</label>');
        $mform->addElement('html', '<textarea id="id_description" name="description" wrap="virtual" rows="5" cols="100" class="form-control"></textarea>');
        $mform->addElement('html', '</div>');

        // Status field with custom HTML
        $mform->addElement('html', '<div class="form-group">');
        $mform->addElement('html', '<label for="id_status">' . get_string('surveystatus', 'local_moodle_survey') . '</label>');
        $mform->addElement('html', '<select id="id_status" name="status" class="form-control">');
        $mform->addElement('html', '<option value="0">' . get_string('inactive', 'local_moodle_survey') . '</option>');
        $mform->addElement('html', '<option value="1">' . get_string('active', 'local_moodle_survey') . '</option>');
        $mform->addElement('html', '</select>');
        $mform->addElement('html', '</div>');

        // Custom HTML for closing the form section
        $mform->addElement('html', '</div>');

        // Add action buttons
        $this->add_action_buttons();
    }
}
