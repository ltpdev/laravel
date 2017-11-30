<?php
namespace App\Http\Controllers;
use App\Member;

class MemberController extends Controller{
    public function info($id){
        //return "MemberController-info".$id;
        //return route('memberinfo');
        //return view("member/info",['name'=>'lin','age'=>12]);
        return Member::getMember();
    }
}