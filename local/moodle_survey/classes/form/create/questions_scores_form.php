<?php
namespace local_moodle_survey\form\create;

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/customformslib.php");

class questions_scores_form extends \customformlib {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form-section">');
        $iconurl = new \moodle_url('/local/moodle_survey/pix/plus-icon.svg');
        $mform->addElement('html', '<div class="form-group">');
        $mform->addElement('html', '<label for="question">' . get_string('questionlabel', 'local_moodle_survey') . '</label>');
        $mform->addElement('html', '<input type="text" id="question" name="question" class="form-control" placeholder="' . get_string('questionplaceholder', 'local_moodle_survey') . '">');
        $mform->addElement('html', '<div class="new-option-section question-score-option-section" id="question-score-option-section">');
        $mform->addElement('html', $this->get_question_score_section());
        $mform->addElement('html', '</div>');
        $mform->addElement('html', '<div id="new-sections-container"></div>');
        $mform->addElement('html', '<button type="button" id="new-score-and-option-button" class="add-new-button"><img src="' . $iconurl . '" alt="Icon" class="plus-icon">' . get_string('addnewscorebutton', 'local_moodle_survey') . '</button>');
        $mform->addElement('html', '</div></div>');
    
        $this->add_custom_action_buttons_helper(true, get_string('submit', 'local_moodle_survey'));
    }
    
    protected function get_question_score_section() {
        $section = '<div class="question-score-section">';
        $section .= '<div><label for="from" class="form-label">' . get_string('score', 'local_moodle_survey') . '</label>';
        $section .= '<input type="number" class="question-score" id="score" name="score[]" min="1" max="10"></div>';
        $section .= '<div class="associated-option-section"><label for="associatedoption" class="form-label">' . get_string('associatedoption', 'local_moodle_survey') . '</label>';
        $section .= '<input type="text" id="associatedoption" class="question-associatedoption" name="associatedoption[]" placeholder="' . get_string('interpretedasplaceholder', 'local_moodle_survey') . '"></div>';
        $section .= '</div>';
        return $section;
    }
}
