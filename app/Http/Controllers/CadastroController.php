<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use App\Models\AsPatasAnimalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CadastroController extends Controller {
    public function index() {
        return view('cadastro');
    }

    public function cadastrar(Request $request) {
        $aDados = $request->validate([
              'animal-nome'        => 'required|string|max:255'
            , 'animal-especie'     => 'required|string|max:255'
            , 'animal-raca'        => 'required|string|max:255'
            , 'animal-idade'       => 'required|string|max:255'
            , 'animal-descricao'   => 'required|string|max:255'
            , 'animal-localizacao' => 'required|string|max:255'
            , 'animal-estado'      => 'required|string|max:255'
            , 'imagem'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            , 'pessoa-nome'        => 'required|string|max:255'
            , 'pessoa-email'       => 'required|string|max:255'
            , 'pessoa-telefone'    => 'required|string|max:255'
            , 'pessoa-endereco'    => 'required|string|max:255'
        ]);

        if ($request->hasFile('imagem')) {
            $oImagem            = $request->file('imagem');
            $sNomeImagem        = time() . '-' . $oImagem->getClientOriginalName();
            $sCaminhoImagem     = $oImagem->move(public_path('img'), $sNomeImagem);
            $aDados['imagem'] = 'img/' . $sNomeImagem;
        }


        AsPatasAnimalModel::create([
              'NOME_ANIMAL'          => $aDados['animal-nome']
            , 'ESPECIE'              => $aDados['animal-especie']
            , 'RACA'                 => $aDados['animal-raca']
            , 'IDADE'                => $aDados['animal-idade']
            , 'DESCRICAO_ANIMAL'     => $aDados['animal-descricao']
            , 'LOCALIZACAO_ENCONTRO' => $aDados['animal-localizacao']
            , 'ESTADO_ANIMAL'        => $aDados['animal-estado']
            , 'IMAGEM'               => $aDados['imagem']
            , 'PESSOA_NOME'          => $aDados['pessoa-nome']
            , 'PESSOA_EMAIL'         => $aDados['pessoa-email']
            , 'PESSOA_TELEFONE'      => $aDados['pessoa-telefone']
            , 'PESSOA_ENDERECO'      => $aDados['pessoa-endereco']
        ]);

        return redirect()->route('adocao')->with('success', 'Animal cadastrado com sucesso!');
    }

    public function contato(Request $oRequest) {
        $oRequest->validate([
              'contato-nome'     => 'required|string|max:255'
            , 'contato-email'    => 'required|email|max:255'
            , 'contato-mensagem' => 'required|string'
        ]);

        $aDados = [
              'title'            => 'Novo Contato - asPatas'
            , 'contato-nome'     => $oRequest->name
            , 'contato-email'    => $oRequest->email
            , 'contato-mensagem' => $oRequest->message
        ];

        Mail::to('alinefernandahoffmann@gmail.com')->send(new ContatoMail($aDados));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
