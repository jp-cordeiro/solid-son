<?php

Interface Poligono{
    public function area();
}

Class Retangulo implements Poligono{
    function __construct($largura,$altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area()
    {
        return $this->largura * $this->altura;
    }
}

Class Quadrado extends Retangulo{
    function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function area()
    {
        return pow($this->lado,2);
    }
}

Class ImprimeResultados{
    public function imprime(Poligono $pol){
        echo $pol->area();
    }
}

$imprime = new ImprimeResultados;
$imprime->imprime(new Retangulo(5,10));
echo '    ';
$imprime->imprime(new Quadrado(5));

/*
 * Príncipio de Liskov
 * Subtipos devem ser substituíveis pelos seus tipos base.
 *
 * O quadrado é um tipo de retângulo, mas nõa pode ser substituído pelo retângulo, ele quebra o príncipio de Liskov
 */