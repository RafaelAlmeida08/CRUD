
  <div class="listagem-usuarios">
        <div class="container-fluid" style="display:flex; align-items:center;">
                <div class="col-md-10 titlePage">
                        <h1>Usuários</h1>
                </div>
                <div class="col-md-2">
                            <a class="btn btn-primary btn-block" href="<?=base_url()?>usuario/paginaCadastro">Novo Usuário</a>
                </div>
        </div>

         <div class="col-md-12">
                <table class="table table-striped">
                        <thead>
                                <tr>

                               
                                        <th></th>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Nível</th>       
                                        <th></th> 
                                        
                                                            
                                </tr>
                        </thead>
                                <?php foreach($usuario as $u)
                                {
                                ?>
                                        <tbody>
                                        <tr>
                                                <th scope="row"></th> 
                                                <th scope="row"><?= $u->usuario_id;?></th>     
                                                <th scope="row"><?= $u->usuario_nome;?></th>    
                                                <th scope="row"><?= $u->usuario_email;?></th>    
                                                <th scope="row"><?= $u->usuario_status==1?'Ativo':'Inativo';?></th>    
                                                <th scope="row"><?= $u->usuario_nivel==1?'Usuário':'Administrador';?></th> 
                                                <td>
                                                    <a href="<?=base_url('usuario/listaAtualizar/'.$u->usuario_id)?>" class="btn btn-primary">Atualizar</a>
                                                    <a href="<?=base_url('usuario/deletaUsuario/'.$u->usuario_id)?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir esse usuário?');">Excluir</a>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">Detalhes</button>
                                                </td>
                                                                                                    
                                         </tr>    
                                        </tbody>
                                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $u->usuario_nome;?></h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                                <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                </div>
                                        <div class="modal-body">
                                                <strong>Nome: </strong><span><?= $u->usuario_nome;?></span><br>
                                                <strong>Telefone: </strong><span><?= $u->usuario_telefone;?></span><br>
                                                <strong>Email: </strong><span><?= $u->usuario_email;?></span><br>
                                                <strong>Status: </strong><span><?= $u->usuario_status;?></span><br>
                                                <strong>Nível: </strong><span><?= $u->usuario_nivel;?></span><br>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                                                
                                        </div>
                                        </div>
                                        </div>
                                </div>
                                <?php } ?>                                
                </table>         
         </div>
    </div>


    