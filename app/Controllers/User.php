<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter;

class User extends BaseController
{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    //function responsável por mostrar os dados do usuario
    public function index()
    {
        return view('alunos', [
            'alunos' => $this->userModel->paginate(10),
            'pager' => $this->userModel->pager
        ]);
    }

    //function responsável por deletar usuario apos confirmação
    public function delete($id){
        if($this->userModel->delete($id)){
            echo view('messages', [
                'message' =>'Usuário Excluido com Sucesso'
            ]);
        }else{
            echo view('messages', [
                'message' =>'Ocorreu um erro ao Excluir aluno'
            ]);
        }
    }

    //function responsável pela criação e edição de usuario
    public function store(){
        
        $image = \Config\Services::image();
        $file = $this->request->getFile('img_perfil');

        //Upload de imagem
        if(!$_POST['id'] or $file->isvalid()){
            $fileName = $file->getRandomName();
            $image->withFile($file)
            ->fit(200, 200, 'center')
            ->save('../public/assets/upload/image/perfil/'.$fileName); 
        }else{
            $fileName = $_POST['perfil_img'];
        }

        //caso salvar os dados do usuário ele vai para tela de mensagem 
        if($this->userModel->save(['id' => $_POST['id'], 'name' => $_POST['name'], 'adress' => $_POST['adress'], 'img_perfil' => $fileName])){
            return view('messages', ['message' => 'Usuário Salvo com sucesso']);
        }else{
            return view('messages', ['message' => 'Ocorreu um erro ao salvar Usuário']);
        }
    }


    //Envia para a function store() para criação de usuário
    public function create(){
        return view('form');
    }

    //Envia para a function store() para Edição de Usuário
    public function edit($id){
        return view('form', ['aluno' => $this->userModel->find($id)]);
    }

}
