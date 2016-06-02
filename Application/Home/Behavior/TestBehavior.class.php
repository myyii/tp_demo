<?php
/**
 * Created by PhpStorm.
 * User: liu
 * Date: 16/6/1
 * Time: 下午6:18
 */

namespace Home\Behavior;


class TestBehavior
{
    public function run(&$params){
        echo 'RUN TEST BEHAVIOR'.$params.'<br/>';
    }
}