<?php
namespace app\models;

use app\core\Models;

class StopWordModel extends Models
{
    public static function rules(): array
    {
        return
            [
            'Привет',
            'Hello',
            'Тест',
            'Проверочка',
        ];
    }
}