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

class RecaptchaPlugin extends Plugin {
    public function selectElementClass($field) {
        if ($field instanceof \Forman\Field\Recaptcha)
            return "\Forman\Render\HTML\Recaptcha";
    }
}
