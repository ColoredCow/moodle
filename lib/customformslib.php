<?php

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

abstract class customformlib extends \moodleform {

    public function add_custom_action_buttons_helper($cancel = true, $submitlabel = null) {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form-action-buttons">');
        if ($cancel) {
            $cancelurl = new \moodle_url('/local/moodle_survey/index.php');
            $mform->addElement('html', '<a href="' . $cancelurl . '" class="custom-action-btn custom-cancel-button">' . get_string('cancel') . '</a>');
        }
        $submitlabel = $submitlabel ?? get_string('savechanges');
        $mform->addElement('html', '<button type="submit" class="custom-action-btn custom-submit-button">' . $submitlabel . '</button>');
        $mform->addElement('html', '</div>');
    }
}