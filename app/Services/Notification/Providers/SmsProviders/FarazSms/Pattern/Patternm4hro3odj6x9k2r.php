<?php
namespace App\Services\Notification\Providers\SmsProviders\FarazSms\Pattern;

use App\Services\Notification\Providers\SmsProviders\FarazSms\Pattern\Contracts\PatternInterface;

class Patternm4hro3odj6x9k2r implements PatternInterface
{
    private $variables;

    public function __construct($variables)
    {
        $this->variables = $variables;
    }

    public function createInputData()
    {
        return array("name" => $this->variables['name'],
            "verification-code" => $this->variables['verificationCode'],
        );
    }
}
