<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Os dados informados são: </h1>.+
    <?php
    // Recebe cada campo do formulário
    // e coloca em variável.
    $nome=$_POST["txtNome"];
    $ender=$_POST["txtEndereco"];
    $cpf=$_POST["txtCPF"];
    $estado=$_POST["listEstados"];
    $dtNasc=$_POST["txtData"];
    $sexo=$_POST["sexo"];
    $cinema=$_POST["checkCinema"];
    $musica=$_POST["checkMusica"];
    $info=$_POST["checkInfo"];
    $login=$_POST["txtLogin"];
    $senha1=$_POST["txtSenha1"];
    $senha2=$_POST["txtSenha2"];
    $arquivo=$_FILES["campoCurriculo"];

    function validaCPF($cpf) {

        // Extrai somente os números
        $cpf = preg_replace("/[^0-9]/is", '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
            
        }
        
        return true;
    }
    // verificar campos 
$camposOK = true; //Determina se ocorreu erro 
if ($nome == ""){
    echo "Informe o NOME. <BR>";
    $camposOK = false;
}
if ($ender == "") {
    echo "Informe o ENDEREÇO. <BR>";
    $camposOK = false; 
}
//Verificar se as SENHAS conferem
if ($senha1 != $senha2) {
    echo "As SENHAS não conferem. <BR>";
    $camposOK = false; 
}
// * Acrescentar as validações de CPF e DATA 

//Cada campo é uma linha <TR> da tabela 
function data($data){
    return date("d/m/Y", strtotime($data));
}
$dtNasc=data($dtNasc);

if(validaCPF($cpf)==false

){
    echo "<h1>Cpf falso</h1>";
}

if(($arquivo["type"]!="application/pdf")){
echo "Não é PDF. <BR>";
$camposOK=false;}
$destino="pdf/";
$destino=$destino.$arquivo["name"];
$res=move_uploaded_file($arquivo['tmp_name'],$destino);
    if($camposOK==true) {
        echo "<TABLE border='0' cellpadding='5'>";
            echo "<TR><TD>NOME:</TD><TD><B>$nome</B></TD></TR>";
            echo "<TR><TD>CPF:</TD><TD><B>$cpf</B></TD></TR>";
            echo "<TR><TD>ENDEREÇO:</TD><TD><B>$ender</B></TD></TR>";
            echo "<TR><TD>ESTADO:</TD><TD><B>$estado</B></TD></TR>";
            echo "<TR><TD>DATA NASC.:</TD><TD><B>$dtNasc</B></TD></TR>";
            echo "<TR><TD>SEXO:</TD><TD><B>$sexo</B></TD></TR>";
            echo "<TR><TD>LOGIN:</TD><TD><B>$login</B></TD></TR>";
            echo "<TR><TD>SENHA:</TD><TD><B>$senha1</B></TD></TR>";
            echo "<a href='pdf/".$arquivo['name']."'>link</a>";

            //Campos do tipo CheckBox retornam 
            //Verdadeiro (true) se foi marcado
            echo "<TR><TD>ÁREAS DE INSTERESSE:</TD><TD><B>"; 
                if ($cinema == true) {
                    echo "Cinema <BR>";
                }
                if ( $musica == true ) {
                    echo "Música <BR>";
                }
                if ( $info == true) {
                    echo "Informática ";
                }
                echo "</B></TD></TR></TABLE>";
        }  //fim IF $camposOK
        ?>
</body>
</html>