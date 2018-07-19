<?php

namespace app\home\model;
class Passenger
{
    public function read()
    {
        $passenger = model('Passenger');
        $passenger->name = 'zhangsan';
        $passenger->save();
    }
    
}

