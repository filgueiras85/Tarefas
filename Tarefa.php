<html>
	//Apenas testando mudar o arquivo pelo site github.com...
    <head>
        		<meta charset="utf-8" />
    </head>
    <body>
<h1>Tarefa: Criação e instanciamento de classes PHP</h1>
<?php
         // Criado por: Luan Lucena Ferreira
         // Curso: Técnico em Informática para Internet
         // Polo: Ouro Preto Do Oeste
         
class Veiculo {
	//Atributos
	public $_modelo;
	public $_cor;
	public $_placa;
	public $_ano;
	
	//Construtor
	public function __construct($modelo, $cor, $placa, $ano){
	     $this->_modelo = $modelo;
	     $this->_cor = $cor;
	     $this->_placa = $placa;
	     $this->_ano = $ano;
	    
	    
	}
	
}
        // Ou usar o include "Veiculo.php";
        // Mas no Veiculo.php precisa ter:
        // Inicio php...
        //     class Veiculo {
        //	//Atributos
        //	public $_modelo;
        //	public $_cor;
        //	public $_placa;
        //	public $_ano;
        //	
        //	//Construtor
        //	public function __construct($modelo, $cor, $placa, $ano){
        //	     $this->_modelo = $modelo;
        //	     $this->_cor = $cor;
        //	     $this->_placa = $placa;
        //	     $this->_ano = $ano;
        //	}
        //}
        // Fim php...
        // Só se for usar em outro arquivo.
         
    $instanciarVeiculo = new Veiculo("Gol","azul","NED-9080","2005");
    
    echo "Frase de demostração do instanciamento de classes: ";
    
    echo "Vende-se carro usado modelo ";
        echo $instanciarVeiculo->_modelo;
    echo " do ano de ";
        echo $instanciarVeiculo->_ano;
    echo " na cor ";
        echo $instanciarVeiculo->_cor;
    echo " placa ";
        echo $instanciarVeiculo->_placa;
    echo " por apenas R$ 50.000,00 reais se for avista.";

?>
<h1>-=Tarefa Finalizada=-</h1>
</body>
</html>
