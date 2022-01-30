<?php
namespace App\classes;
use mysql_xdevapi\BaseResult;

class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index() {

        /*    Variables in PHP*/

        /*  $this->firstName = "Morshed";
        $this->lastName  = "Khan";
        echo "Full Name is ".$this->firstName." ".$this->lastName;*/


        /*    Operator in PHP    */
        /*
         * Arithmetic Operator
              *binary Operator (+,-,*,/)
              *Unary Operator  (++, --, (-),)
         * Comperison Operator
         * Assignment Operator
         * conditional Operator ();
         * logical Operator;
         *
         */

        $this->x = 10;
        $this->y = 20;
        $this->x = 30;

        echo  $this->x + $this->y;
        echo "<br/>";
        echo  $this->x - $this->y;
        echo "<br/>";
        echo  $this->x * $this->y;
        echo "<br/>";
        echo  $this->x / $this->y;
        echo "<br/>";
        echo  $this->x % $this->y;
        echo "<br/>";

//        echo "<br/>";
//        echo "<br/>";
//        echo $this->x++;
//        echo "<br/>";
//        echo $this->x;
        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
        echo $this->x += $this->y;
        echo '<br/>';
        echo $this->x -= $this->y;
        echo '<br/>';
        echo $this->x *= $this->y;
        echo '<br/>';
        echo $this->x /= $this->y;
        echo '<br/>';
        echo $this->x %= $this->y;
        echo '<br/>';
        echo $this->x .= (int)$this->y;
//        $this->x = (int)$this->x;
        echo '<br/>';
        echo gettype($this->x);

        echo '<br/>';
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x > $this->y) && ($this->y < $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) && ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) && ($this->y < $this->z);
        echo " <br/> .......... <br/>";

        echo '<br/>';
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo " <br/> .......... <br/>";


        echo '<br/>';
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo " <br/> .......... <br/>";
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo " <br/> .......... <br/>";


        /* ======= Statements =======
         * Conditional
         * Iteration/ Repeated Statement.
         *
         *
         *
         */


        echo "if statement";
        $this->x = 100;
        echo '<br/>';
        if ($this->x > 200)
        {
            echo "Over 200";
        } elseif ($this->x <200)
        {
            echo "Over 50 and Less than 200";
        } else echo "Less than 50";


        /*Switch Statement*/
        echo '<br/>';
        echo '<br/>';
        echo "switch statement";
        $this->x = 100;
        echo '<br/>';


        switch ($this->x)
        {
            case 10:
                echo "10";
                break;
            case 20:
                echo "20";
                break;
            case 30:
                echo "30";
                break;
            case 40:
                echo "40";
                break;
            case 50:
                echo "Bangladesh";
                break;

            default:
                echo "Default";

        }


        /*For Loop*/
        echo 'For Loop';
        echo '<br/>';
        echo '<br/>';
        for ($this->y=10;$this->y <= 15; $this->y++)
        {
            echo 'Hello World <br/> <br/>';
        }


        /*Do While Loop*/
        echo 'Do While Loop';
        echo '<br/>';
        echo '<br/>';
        $this->x = 1;
        do{
            echo "Hello World<br/>";
            $this->x++;
        } while ($this->x <5);


        /*Do While Loop*/
        echo 'forEach Loop';
        echo '<br/>';
        echo '<br/>';
        $this->data = [10, 20, 30, 'BITM', 100.200, true];

        foreach ($this->data as item) {
            echo item;
        }


    }
}