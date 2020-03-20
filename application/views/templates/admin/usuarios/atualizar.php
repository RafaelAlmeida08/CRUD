
<div class="cadastro-usuarios">


<div class="container-fluid">
    <div  class="titlePage">
            <h1>Atualizar Usuário</h1>
    </div>        
</div>

<div class="cadastro-usuarios-form">
    <div class="container">                
            <div class="form-login" action="" method="post">                                 
                <form action="<?=base_url()?>usuario/atualizar" method="post">

                    <div class="row">  

                            <input name="id" required type="hidden" class="form-control" id="inlineFormInputName" value="<?=$usuario->usuario_id?>">

                            <div class="col-12">    
                                <label  for="nome"><strong>Nome:</strong></label>                        
                                <input name="nome" required type="text" class="form-control" id="inlineFormInputName" value="<?=$usuario->usuario_nome?>">
                            </div>

                            <div class="col-12">   
                                <label  for="telefone"><strong>Telefone:</strong></label>                          
                                <input name="telefone" required type="text" class="form-control" id="inlineFormInputName" value="<?=$usuario->usuario_telefone?>">
                            </div>

                            <div class="col-12">
                                <label  for="email"><strong>Email:</strong></label>
                                <input name="email" required type="email" class="form-control" id="inlineFormInputName" value="<?=$usuario->usuario_email?>">
                            </div>   

                            <div class="col-4" style="display: flex;align-items: center;">
                                <label  for="email"><strong>Senha:</strong></label>
                                <input name="senha" required type="password" class="form-control" id="inlineFormInputName" value="<?=$usuario->usuario_senha?>">
                            </div>

                            <div class="col-md-4" >
                                <label  for="status"><strong>Status:</strong></label>
                                <select name="status" required id="status" class="form-control" value="<?=$usuario->usuario_status?>">
                                    <option value="0"> --- </option>
                                    <option value="1"<?=$usuario->usuario_nivel==2?'selected':'';?>> Ativo </option>
                                    <option value="2"<?=$usuario->usuario_nivel==1?'selected':'';?>> Inativo </option>
                                </select>
                            </div>

                        <div class="col-md-4">
                            <label  for="nivel"><strong>Nível:</strong></label>
                            <select name="nivel" required id="nivel" class="form-control">
                                <option value="0"> --- </option>
                                <option value="1" <?=$usuario->usuario_nivel==2?'selected':'';?>> Administrador </option>
                                <option value="2"<?=$usuario->usuario_nivel==1?'selected':'';?>> Usuário </option>
                            </select>
                        </div>
                    </div>

                    

                    <div class="d-flex justify-content-start" style="margin-top: 20px;">     
                            <div class="col-sm-2">
                                    <button type="submit" class="btn btn-success">Atualizar</button>
                            </div>
                     </div>  
                    
                </form>

            </div> 
    </div>
</div>



</div>