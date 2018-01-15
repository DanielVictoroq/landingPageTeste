<!DOCTYPE html>

 <html>
      <head>
          <meta charset="UTF-8">
          <title>Cadastro Visitante</title>
      </head>
<style>
  body.center-form {
    min-height: 100vh;
  }

  div.center-form {
    position: relative;
    min-height: 100vh;
  }

  div.center-form > form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
</style>
<body>
<form class "center-form" action='{{route('visitante/create')}}' method="POST" >
<!--botôes-->
<label class="center-form">Nome</label>  
<div class="controls">
                    <input type="text" id="idNome" name="nome" class="input-xlarge " size="50" maxlength="50" required>
					</div>
<div class="control-group">
<label class="control-label ">E-mail</label>
<div class="controls">
                    <input type="text" id="idEmail" name="email" class="input-xlarge" size="50" maxlength="50" required>
                </div>
				<label class="control-label ">Celular</label>
				<div class="controls">
                    <input type="text" id="idcelular" name="celular" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Data de Nascimento</label>
<div class="controls">
                    <input type="text" id="idData" name="data" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Cep</label>
<div class="controls">
                    <input type="text" id="idcep" name="cep" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Rua</label>
<div class="controls">
                    <input type="text" id="idrua" name="rua" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Bairro</label>
<div class="controls">
                    <input type="text" id="idbairro" name="bairro" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Cidade</label>
<div class="controls">
                    <input type="text" id="idcidade" name="cidade" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<label class="control-label ">Estado</label>
<div class="controls">
                    <input type="text" id="idestado" name="estado" class="input-xlarge" size="15" maxlength="15" required>
                </div>
<input type="submit" value="Enviar" class="btn btn-success">
</form> 
</body>
  </html>