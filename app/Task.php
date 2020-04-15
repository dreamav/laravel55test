<?php

namespace App;

use App\Model;

class Task extends Model
{
    public function isComplete()
    {
    	return false;
    }
}
