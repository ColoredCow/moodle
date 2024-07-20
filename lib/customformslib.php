<?php

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

abstract class customformlib extends \moodleform {
    public function add_custom_action_buttons($cancel = true, $submitlabel = null) {
        $mform = $this->_form;

        // Custom action button wrapper
        $mform->addElement('html', '<div class="form-action-buttons">');

        // Cancel button
        if ($cancel) {
            $cancelurl = new \moodle_url('/local/moodle_survey/index.php');
            $mform->addElement('html', '<a href="' . $cancelurl . '" class="custom-action-btn custom-cancel-button">' . get_string('cancel') . '</a>');
        }

        // Submit button
        $submitlabel = $submitlabel ?? get_string('savechanges');
        $mform->addElement('html', '<button type="submit" class="custom-action-btn custom-submit-button">' . $submitlabel . '</button>');

        // Close custom action button wrapper
        $mform->addElement('html', '</div>');
    }
}