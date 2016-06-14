<html>
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
    
    echo "<br> Vende-se carro usado modelo ";
        echo"<br>" $instanciarVeiculo->_modelo;
    echo "<br> do ano de ";
        echo"<br>" $instanciarVeiculo->_ano;
    echo "<br> na cor ";
        echo"<br>" $instanciarVeiculo->_cor;
    echo "<br> placa ";
        echo"<br>" $instanciarVeiculo->_placa;
    echo "<br> por apenas R$ 50.000,00 reais se for avista.";

?>
<h1>-=Tarefa Finalizada=-</h1>
</body>
</html>
