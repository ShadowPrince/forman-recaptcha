<?php
namespace Forman\Field;

class Recaptcha extends Field {
    protected $captcha;

    public function __construct() {
        $this->captcha = new \Captcha\Captcha();

        call_user_func_array("parent::__construct", func_get_args());
    }

    public function setKeys($private, $public) {
        $this->captcha->setPrivateKey($private);
        $this->captcha->setPublicKey($public);

        return $this;
    }

    public function getCaptchaHTML() {
        return $this->captcha->html();
    }

    public function validate($app) {
        $response = $this->captcha->check();
        if (!$response->isValid()) {
            $this->error = $response->getError();
            return false;
        } else {
            return true;
        }
    }
}