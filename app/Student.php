<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

 class Student extends Model{
     protected $table='student';
     protected $primaryKey='id';
     public $timestamps=true;
     protected $fillable=['name','age'];
 }