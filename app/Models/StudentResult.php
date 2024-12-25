<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
 protected $table = 'studentresult';

 // Specify the primary key if it's not 'id'
 protected $primaryKey = 'rollno'; // Change to your actual column name

 // Optionally, if your primary key is not auto-incrementing
 public $incrementing = false; // Set to true if your primary key is auto-incrementing
 protected $keyType = 'Integer'; // Change this if your primary key is an integer
}
