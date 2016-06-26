<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);

   /* ini_set('display_errors', true);
    error_reporting(E_ALL);
    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;

    if(abs($a-$b) < $epsilon) {
        echo is_nan("true");
    }

    class strtest
    {
        var $foo;
        var $name;
        var $bar = 'I am a bar';

        function strtest()
        {
            $this->foo = "abcd";
            $this->name = array("fsdf", "sdfsd");
        }

    }

    $foo = new strtest();*/


   /* $saysome = <<<EOD
    fdsdgsdgjie \n
EOD;

    echo <<<'PPT'
eeee {$foo->name[1]} name is $foo->name haha <br />
PPT;*/



 /*   echo 'I\'ll back \t';
    echo $saysome;

    $juice  = "周磊";
    echo "he drank some $juice.";
    echo "he drank some $juices.";


    $great = "hahahha";
    $arraytest = array("A1", "B2", 'test' => 'forget C#');
    $barz = array('foo', 'bar', 'baz', 'quux');
    echo "{$foo->bar}\n";
    echo "{$foo->baz[1]}\n";*/
    /*
    echo "This is $great";
    echo "I call array $arraytest[test]";

    echo "";*/

    /*echo '<br />';

    class beers{
        const softdrink = 'rootbeer';
        public static  $ale = 'ipa';
    }

    $rootbeer = "A & W";
    $ipa = "Alexander Knith";
    echo <<<"Eot"
我要 {${beers::softdrink}}
Eot;

    echo <<<"HaHA"
        我要 beers::softdrink
HaHA;

    echo "我要 {beers::$ale}";

    class foo {
        var $bar = 'I am bar.';
    }

    $foo = new foo();
    $bar = 'bar';
    $baz = array('foo', 'bar', 'baz', 'quux');
    echo "{$foo->bar}\n";
    echo "{$foo->$baz[1]}\n";

    $str = 'abc';
    echo var_dump(isset($str[1.0]));

    $anum = "10.0 pigs" + 1.0;
    echo 'type is ' . gettype(anum) . 'number is ' . $anum;*/



    //echo "asdfsaf". $test12['1'];

    /*foreach($i as $test12){
        echo $i . '<br />';
    }*/

//    $test12 =array('stest', 111, 'global' => 24343);
//    echo '输出数组容易吗'. $test12['global'] . var_dump($test12);
//
//    $test13 = array('teste', 222, 'la' => array('mmm' => array( 'nnn'=> 'deep get')));
//    echo $test13['la']['mmm']['nnn'];
//
//    list(, $testst) = $test12[1];
//    echo  $testst;
//
//    $arr = array(3=>12, 12=> 5);
//    $arr[] = 9;
//    echo  $arr[13];
//    unset($arr[3]);
//    print_r($arr);
//
//    class A{
//        function foo(){
//            if(isset($this)){
//                echo '$this is defined(';
//                echo gettype($this);
//                echo ")\n";
//            }else{
//                echo '$this is not defined';
//            }
//        }
//    }
//
//    class  B{
//        function bar(){
//            A::foo();
//        }
//    }
//
//    $a = new A();
//    $a->foo();
//
//    A::foo();
//
//    $b = new B();
//    $b->bar();
//
//    B::bar();

    class SimpleClass{
        // 错误的属性声明
//        public $var1 = 'hello ' . 'world';
        public $var2 = <<<EOD
hello world
EOD;
//        public $var3 = 1+2;
//        public $var4 = self::myStaticMethod();
//        public $var5 = $myVar;

        // 正确的属性声明
//        public $var6 = myConstant;
//        public $var7 = array(true, false);

        //在 PHP 5.3.0 及之后，下面的声明也正确
        public $var8 = <<<'EOD'
hello world
EOD;

        public $var = "这是个默认值";
        public function displayVar(){
            echo $this->var;
        }
    }
//
//    $instance = new SimpleClass();
//    $assigned = $instance;
//    $referen = &$instance;
//
//    $instance = null;
//    var_dump($instance);
//    var_dump($referen);
//    var_dump($assigned);

    class Test{
        static public function getNew(){
            return new static;
        }
    }

    class Child extends Test{}

    $obj1 = new Test();
    $obj2 = new $obj1;
    var_dump($obj1 !== $obj2);

    $obj3 = Test::getNew();
    var_dump($obj3 instanceof Test);

    $obj4 = Child::getNew();
    var_dump($obj4 instanceof Child);

    class ExtendClass extends SimpleClass{
        public function displayVar(){
            echo "子类的";
        }
    }

//    $child = new ExtendClass();
//    $child->displayVar();

//trait Hello{
//    public function getSayHello(){
//        echo "Hello".$this->sayHello();
//    }
//    abstract public function sayHello();
//}

//class MyHelloWorld{
//    private $world;
//    use Hello;
//
//    public function sayHello()
//    {
//        echo $this->world;
//    }
//
//    public function setWorld($say){
//        $this->world = $say;
//    }
//}
//
echo "<br/>";
//$obj5 = new MyHelloWorld();
//$obj5->sayHello();

//    class ClassName{
//        public function showClassName(){
//            echo SimpleClass::class;
//        }
//    }
//
//    $c = new ClassName();
//    $c->showClassName();













