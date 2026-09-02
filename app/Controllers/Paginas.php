<?php 
class Paginas extends Controller{
    public function index(){
        $dados = [
            'titulo' => 'Página Inicial',
            'descricao' => ''
        ];
        $this->view('paginas/inicio', $dados);
    }
   public function sobre(){
    $dados = [
        'titulo' => 'Como Funciona',
        'descricao' => ''
    ];
     $this->view('paginas/sobre', $dados);
    
   }//fim da funcao sobre
   public function home(){
    $dados = [
        'titulo' => 'Cadastra Objeto',
        'descricao' => ''
    ];
     $this->view('paginas/home', $dados);
    
   }//fim da funcao home
}//fim da classe Páginas