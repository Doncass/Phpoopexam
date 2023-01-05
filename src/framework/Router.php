<?php

namespace Donat\Phpoopexam\framework ;

use Donat\Phpoopexam\views\Dataform;
use Donat\Phpoopexam\views\Submitform ;
use Donat\Phpoopexam\forms;


class Router
{
    public function __construct(
        private Submitform $submitform,
        private Dataform $dataform

    ) {
    }

    public function process(string $route, string $registrationId = '')
    {
        switch ($route) {
            case '/':
                echo $this->submitform->submit();
                break;

            case '/dataform':
                require './Phpoopexam/src/forms/form.php' ;
                break;

            default:
                http_response_code(404);
                echo $this->homePageController->renderNotFoundPage();
                break;
        }
    }

}