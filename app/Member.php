<?php
namespace App;
class Member extends \Illuminate\Database\Eloquent\Model
{
    public static function getMember()
    {
         return "member-model";
    }
}