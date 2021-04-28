<?php 

namespace Dean26\Helper;
use Illuminate\Database\Eloquent\Model;

class FormHelper
{

    static array $inputs;

    public static function getVal(string $field_name, Model $object): string
    {
        if(!isset(self::$inputs)) self::$inputs = session()->getOldInput();

        return (isset(self::$inputs[$field_name])) ? self::$inputs[$field_name] : (string)$object->$field_name;
    }

}
