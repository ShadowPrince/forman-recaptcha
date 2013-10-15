<?php
namespace Forman\Render\HTML;

class Recaptcha extends HTMLElement {
    protected $html;

    public function collectField($field) {
        $this->html = $field->getCaptchaHTML();

        parent::collectField($field);
    }

    public function render() {
        return $this->html . $this->getError();
    }
}
