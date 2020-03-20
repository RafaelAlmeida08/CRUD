<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->model('usuario/listar_model');
        $dados['usuario'] = $this->listar_model->listaUsuarios();        
        $this->load->view('usuarios/listar',$dados);  
        $this->load->view('templates/footer');         
            
    }

    public function paginaCadastro()
    {
        $this->load->view('templates/header');         
        $this->load->view('usuarios/cadastrar');  
        $this->load->view('templates/footer');        
    }

    public function cadastraUsuario()
    {
        $dados = [

            'usuario_nome'       => $this->input->post('nome'),
            'usuario_telefone'   => $this->input->post('telefone'),
            'usuario_email'      => $this->input->post('email'),
            'usuario_senha'      => $this->input->post('senha'),
            'usuario_status'     => $this->input->post('status'),
            'usuario_nivel'      => $this->input->post('nivel')
    
        ];

        $this->load->model('usuario/cadastrar_model'); 
        if($this->cadastrar_model->inserir($dados))
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_sucesso');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }else
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_erro');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }                     
    }

    public function deletaUsuario($id)
    {
        $this->load->model('usuario/excluir_model');
        if($this->excluir_model->excluir($id))
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_sucesso');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }else
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_erro');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }     
    }

    public function listaAtualizar($id)
    {
        $this->load->view('templates/header');
        $this->load->model('usuario/atualizar_model');
        $dados['usuario'] = $this->atualizar_model->listaUsuario($id);
        $this->load->view('usuarios/atualizar',$dados);
        $this->load->view('templates/footer');  
    }

    public function atualizar()
    {            
        $this->load->model('usuario/atualizar_model');
        if($this->atualizar_model->atualizaUsuario())
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_sucesso');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }else
        {
            $this->load->view('templates/header'); 
            $this->load->view('mensagens/msg_erro');
            $this->load->view('home');  
            $this->load->view('templates/footer');
        }     
    }
}
