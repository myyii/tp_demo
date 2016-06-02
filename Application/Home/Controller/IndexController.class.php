<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        $this->show('<h1><span style="color: #00aa00">hello world!</span></h1>');
        //$re = Build::buildModel('Home','User');
        $array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
        $array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
        $result = $array1 + $array2;
        var_dump($result);
        exit;
        $string = 'hello';
        echo C('USER_AUTH_ID');
        echo strstr($string,'l');die();
        $this->LeftRotatingString($string,0,20);

    }

    public function Reverse(&$string,$from,$to){
        while($from < $to){
            $t = $string{$from};
            $string{$from++} = $string{$to};
            $string{$to--} = $t;
        }
        return $string;
    }
    public function LeftRotatingString($string,$m,$n){
//        $m %= $n;
       // echo $this->Reverse($string,0,$m-1);echo "<br/>";
       // echo $this->Reverse($string,$m,$n-1);echo "<br/>";
       // echo $this->Reverse($string,$m,$n-1);echo "<br/>";
    }

    public function sayHello(){
        echo 'hello world!';
    }
}