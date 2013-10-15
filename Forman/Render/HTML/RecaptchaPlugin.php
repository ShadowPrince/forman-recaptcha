<?php
namespace Forman\Render\HTML;

class RecaptchaPlugin implements RendererPlugin {
    public function selectElementClass($field) {
        if ($field instanceof \Forman\Field\Recaptcha)
            return "\Forman\Render\HTML\Recaptcha";
    }
}
