<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\menu;

class category extends Model
{
    use HasFactory;
    public function menus()
    {
        return $this->hasmany(menu::class);
    }
}
