## Forman-Recaptcha
Forman-Recaptcha - plugin for [forman](http://github.com/shadowprince/forman), adding field Recaptcha for easy recaptcha integration. It validates on `validate()` method, sets errors; you just need to add `new \Forman\Field\Recaptcha()` to your form to use it.

```php
$form = new \Forman\Form(
    new \Forman\Field\Value("name"),
    (new \Forman\Field\Recaptcha())->setKeys("private", "public")
);
```

You can set default keys by
```php
\Forman\Field\Recaptcha::defaultKeys("private", "public");
```

Uses [recaptcha/php5](http://packagist.org/recaptcha/php5).
