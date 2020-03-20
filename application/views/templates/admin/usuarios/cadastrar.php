
<div class="cadastro-usuarios">


    <div class="container-fluid">
        <div  class="titlePage">
                <h1>Cadastro Usuário</h1>
        </div>        
    </div>

    <div class="cadastro-usuarios-form">
        <div class="container">                
                <div class="form-login" action="" method="post">                                 
                    <form action="<?=base_url();?>usuario/cadastraUsuario" method="post">

                        <div class="row">  

                                <div class="col-12">    
                                    <label  for="nome"><strong>Nome:</strong></label>                        
                                    <input name="nome" required type="text" class="form-control" id="inlineFormInputName" placeholder="Nome">
                                </div>

                                <div class="col-12">   
                                    <label  for="telefone"><strong>Telefone:</strong></label>                          
                                    <input name="telefone" required type="text" class="form-control" id="inlineFormInputName" placeholder="Telefone">
                                </div>

                                <div class="col-12">
                                    <label  for="email"><strong>Email:</strong></label>
                                    <input name="email" required type="email" class="form-control" id="inlineFormInputName" placeholder="Email">
                                </div>   

                                <div class="col-12">
                                    <label  for="senha"><strong>Senha:</strong></label>
                                    <input name="senha" required type="password" class="form-control" id="inlineFormInputName" placeholder="Senha">
                                </div>

                                <div class="col-md-4">
                                    <label  for="status"><strong>Status:</strong></label>
                                    <select name="status" required id="status" class="form-control">
                                        <option value="0"> --- </option>
                                        <option value="1"> Ativo </option>
                                        <option value="2"> Inativo </option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label  for="nivel"><strong>Nível:</strong></label>
                                    <select name="nivel" required id="nivel" class="form-control">
                                        <option value="0"> --- </option>
                                        <option value="2"> Administrador </option>
                                        <option value="1"> Usuário </option>
                                    </select>
                                </div>
                                
                        </div>

                        

                        <div class="d-flex justify-content-start" style="margin-top: 20px;">     
                                <div class="col-sm-2">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                         </div>  
                        
                    </form>

                </div> 
        </div>
</div>

   

</div>