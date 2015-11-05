<link rel="stylesheet" href="css/contact-form.css">

<form id="form" action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <div class="col-1-2">
            <label><input name="nome" type="text" id="nome" placeholder="NOME *" required/></label>
            <label><input name="telefone" type="tel" id="telefone" placeholder="TELEFONE *" required/></label>
        </div>
        <div class="col-1-2">
            <label><input name="email" type="email" id="email" placeholder="EMAIL *" required/></label>
            <label><input name="cidade" type="text" id="cidade" placeholder="CIDADE/ESTADO ONDE DESEJA ABRIR A FRANQUIA *" required/></label>
        </div>
        <div class="col-1-1">
            <label><textarea name="mensagem" rows="6" id="mensagem" placeholder="OBSERVAÇÕES"/></textarea></label>
        </div>
        <p class="required-field">* Campos obrigatórios</p>
        <input type="submit" name="enviar" value= "Enviar" class="button" />
        <input type="reset" name="reset" value="Limpar" class="button" />
    </fieldset>
</form>
