<?php
#print_r($_POST);
class Mensagem{
    private $para=null;
    private $assunto=null;
    private $mensagem=null;
    public $status=array('codigo_status'=>null,'descricao_status'=>'');

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo,$valor){
        $this->$atributo=$valor;
    }
    public function mensagemValida(){
        if(empty($this->para)|| empty($this->assunto)|| empty($this->mensagem)){//Verificar se o campo está vazio
            return false;
    }else{
        return true;
    }
    }
}

$mensagem = new Mensagem();
$mensagem->__set('para',$_POST['para']); 
$mensagem->__set('assunto',$_POST['assunto']);
$mensagem->__set('mensagem',$_POST['mensagem']);

print_r($mensagem);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $para = $_POST["para"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    if (empty($para) || empty($assunto) || empty($mensagem)) {
        echo "<p style='color: red;'>Mensagem não enviada, há campos vazios!!</p>";
    } else {
        echo "<p style='color: green;'>Mensagem pronta para enviar!!</p>";
    }
}
?>
