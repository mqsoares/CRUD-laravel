<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $filllable = ['name', 'email', 'mobile'];
}
