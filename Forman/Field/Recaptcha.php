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
namespace Forman\Field;

class Recaptcha extends Field {
    protected $captcha;
    protected static $private, $public;

    public function __construct() {
        $this->captcha = new \Captcha\Captcha();
        $this->setKeys(self::$private, self::$public);

        call_user_func_array("parent::__construct", func_get_args());
    }

    /**
     * Set recaptcha keys
     * @param string
     * @param string
     * @return \Forman\Field\Field
     */
    public function setKeys($private, $public) {
        $this->captcha->setPrivateKey($private);
        $this->captcha->setPublicKey($public);

        return $this;
    }

    /**
     * Get recaptcha HTML code
     * @return string
     */
    public function getCaptchaHTML() {
        return $this->captcha->html();
    }

    public function validate() {
        $response = $this->captcha->check();
        if (!$response->isValid()) {
            $this->error = _($response->getError());
            return false;
        } else {
            return true;
        }
    }

    /**
     * Set default keys
     * @param string
     * @param string
     */
    public static function defaultKeys($private, $public) {
        self::$private = $private;
        self::$public = $public;
    }
}
