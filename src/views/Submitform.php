<?php

namespace Donat\Phpoopexam\views ;

use  Donat\Phpoopexam\forms ;

class Submitform
{

    public function submit()
    {
        if (is_null($energyAmount)) {
            $energyAmount = [];
        }
        $energyAmount = json_decode(file_get_contents('./energy.json'), true);
        $energyAmount[] = [
            'amountkW' => $_POST['usedKw'],
            'price' => $_POST['price'],
            'dieninis' => $_POST['Dieninis'],
            'naktinis' => $_POST['Naktinis'],
            "data" =>  date('Y/m/d H:i:s'),

        ];
        file_put_contents('./energy.json', json_encode($energyAmount));
    }


}