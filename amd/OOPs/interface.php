
<?php
interface ducat
{
public function classes();
//public function lab();
}

 
    class Aniruddh implements ducat
 {
 public function classes()
 {
 $a="BCA";
 $b="PHP";
 echo"aditya and pravin is going to delhi";
 }
 public function travel()
 {
 $m="cab";
 $n="train";
 echo "m=$m and n=$n";
 }
 
 }
 $obj1=new Aniruddh;
 $obj1->travel();
 $obj1->classes();
 ?>