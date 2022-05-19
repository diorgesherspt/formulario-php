<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form method="post" name="formCadastro"
    action="http://localhost/cadcliente.php"
    enctype="multipart/form-data">
<h1>Cadastro de Clientes</h1>
<table width="100%">
    <tr>
        <th width="18%">Nome</th>
        <td width="82%"><input type="text" name="txtNome"></td>
    </tr>
    <tr>
        <th>CPF</th>
        <td><input name="txtCPF" type="text" maxlength="14"></td>
    </tr>
    <tr>
        <th>Endereço</th>
        <td><textarea name="txtEndereco" cols="30" rows="4"></textarea></td>
    </tr>
<tr>
<th>Estado</th>
<td>
<select name="listEstados">
        <option value="BA">Bahia</option>
        <option value="ES">Espírito Santo</option>
        <option value="MG">Bahia</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="SP">São Paulo</option>
    </select>     
</td>
</tr>
<tr>
    <th>Data Nasc.</th>
    <td><input name="txtData" type="date"></td>
</tr>
<tr>
    <th>Sexo</th>
    <td>
        <input type="radio" name="sexo" value="M" checked>
        Masculino <BR>
        <input type="radio" name="sexo" value="F" />
        Feminino
    </td>
</tr>
<tr>
    <th>Áreas fe Interesses</th>
    <td>
        <input name="checkCinema" type="checkbox" value="true" /> Cinema <BR>
        <input name="checkMusica" type="checkbox" value="true" /> Música <BR>
        <input name="checkInfo" type="checkbox" value="true" /> Informática <BR>
    </td>
</tr>
<tr>
    <th>Login</th>
    <td><input name="txtLogin" type="text"></td>
</tr>
<tr>
    <th>Senha</th>
    <td><input name="txtSenha1" type="password"></td>
</tr>
<tr>
    <th>Confirmação de Senha</th>
    <td><input name="txtSenha2" type="password"></td>
</tr>
<tr>
    <th>Currículo:</th>
    <td><input name="campoCurriculo" type="file"></td>
</tr>
<tr>
<tr>
    <td>
        <input type="submit" name="btnEnviar" value="Enviar">
    </td>
    <td>
        <input type="reset" name="btnLimpar" value="Limpar">
    </td>
</td>
</tr>

</table>
</form>
</body>
</html>