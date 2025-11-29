<?php

namespace Farshchian\TelegramBotLibrary\Models;

use ReflectionClass;
use ReflectionUnionType;

class BaseModel extends \stdClass
{
    public function __construct($data = [])
    {
        $reflection = new ReflectionClass(static::class);
        foreach ($data as $key => $value) {
            $property=null;
            try {
                $property = $reflection->getProperty($key);
                $type = $property->getType();
                if($type instanceof ReflectionUnionType){
                   $typeName=$type->getTypes()[0]->getName();
                }
                else{
                    $typeName = $type?->getName();
                }
                if (class_exists($typeName) && is_subclass_of($typeName, BaseModel::class)) {
                    $this->$key = new $typeName($value);
                }
                else {
                    if(is_array($value)){
                        $this->$key = array_map(fn($item)=>(object)$item,$value);
                    }
                    else{
                        $this->$key = $value;
                    }
                }
            } catch (\Exception $e) {
                $this->$key = $value;
                continue;
            }
        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
