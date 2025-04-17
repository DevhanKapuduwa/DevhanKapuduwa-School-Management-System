<?php

namespace App;

enum SportsStatus:string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public function sportfn():string
    {
        return match($this)
        {
            SportsStatus::ACTIVE => 'active',
            SportsStatus::INACTIVE => 'inactive',
            
        };
    }
}