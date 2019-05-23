<?php 
class A
{
    public function test1()
    {
        return "test1<hr>";
    }
}
//-----------------------------------------
class B extends A
{
    public function test2()
    {
        return "test2<hr>";
    }
}
//-----------------------------------------
class C extends B
{
    public function test3()
    {
        return "test3<hr>";
    }
}
//------------------------------------------
// Exo : créer un opbjet de la classe C et afficher les méthodes issues de celle-ci et faire les affichages des méthodes 
$c = new C;
echo '<pre>'; print_r(get_class_methods($c));echo '</pre>'; // permet d'afficher les méthodes issues de la classe
echo $c->test1();
echo $c->test2();
echo $c->test3();

// Si la classe B hérite de A et que la classe C hérite de B, alors la classe C hérite de A 


