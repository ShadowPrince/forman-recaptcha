<?php
/**
 * Forman Recaptcha plugin
 *
 * @author Vasiliy Horbachenko <shadow.prince@ya.ru>
 * @copyright 2013 Vasiliy Horbachenko
 * @version 0.1
 * @package shadowprince/forman-recaptcha
 *
 */
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