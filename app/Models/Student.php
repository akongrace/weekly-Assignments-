<?php
namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name', 'nim', 'email', 'Major'];
}