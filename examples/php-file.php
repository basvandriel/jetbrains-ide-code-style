<?php

    namespace example;

    use Exception;

    function foo()
    {
        return 0;
    }

    function bar($x, $y, int $z = 1)
    {
        $x = 0;
        // $x = 1
        do {
            $y += 1;
        } while ($y < 10);
        if (true) {
            $x = 10;
        } elseif ($y < 10) {
            $x = 5;
        } else if (true) {
            $x = 5;
        }
        for ($i = 0; $i < 10; $i++) {
            $yy = $x > 2 ? 1 : 2;
        }
        while (true) {
            $x = 0;
        }
        do {
            $x += 1;
        } while (true);
        foreach (array(
                     "a" => 0,
                     "b" => 1,
                     "c" => 2
                 ) as $e1) {
            echo $e1;
        }
        $count = 10;
        $x = array(
            "x",
            "y",
            array(
                1 => "abc",
                2 => "def",
                3 => "ghi"
            )
        );
        $zz = array(
            0.1,
            0.2,
            0.3,
            0.4
        );
        bar(
            0,
            1,
            2
        );
    }

    abstract class Foo extends \stdClass implements \ArrayAccess, \Countable, \DateTimeInterface
    {

        var $numbers = array(
            "one",
            "two",
            "three",
            "four",
            "five",
            "six"
        );

        var $v = 0;

        public $path = "root";

        const FIRST = 'first';

        const SECOND = 0;

        const Z = -1;

        function bar($v, $w = "a")
        {
            $y = $w;
            $result = foo(
                "arg1",
                "arg2",
                10
            );
            switch ($v) {
                case 0:
                    return 1;
                case 1:
                    echo '1';
                    break;
                case 2:
                    break;
                default:
                    $result = 10;
            }

            return $result;
        }

        public static function fOne($argA, $argB, $argC, $argD, $argE, $argF, $argG, $argH)
        {
            $x = $argA + $argB + $argC + $argD + $argE + $argF + $argG + $argH;
            list(
                $field1, $field2, $field3, $filed4, $field5, $field6
                ) = explode(",", $x);
            fTwo(
                $argA,
                $argB,
                $argC,
                fThree(
                    $argD,
                    $argE,
                    $argF,
                    $argG,
                    $argH
                )
            );
            $z = $argA == "Some string" ? "yes" : "no";
            $colors = array(
                "red",
                "green",
                "blue",
                "black",
                "white",
                "gray"
            );
            $count = count($colors);
            for ($i = 0; $i < $count; $i++) {
                $colorString = $colors[$i];
            }
        }

        function fTwo($strA, $strB, $strC, $strD)
        {
            if ($strA == "one"
                || $strB == "two"
                || $strC == "three"
            ) {
                return $strA + $strB + $strC;
            }
            $x = $foo->one("a", "b")->two(
                "c",
                "d",
                "e"
            )->three("fg")->four();
            $y = a()->b()->c();

            return $strD;
        }

        function fThree($strA, $strB, $strC, $strD, $strE)
        {
            try {
            } catch (Exception $e) {
                foo();
            } finally {
                // do something
            }

            return $strA + $strB + $strC + $strD + $strE;
        }

        protected abstract function fFour();
    }