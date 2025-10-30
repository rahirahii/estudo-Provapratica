<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;

    protected $rules = [
        'nome' => 'required|min:3|max:30',
        'descricao' => 'required|max:40',
        'preco' => 'required|decimal',
        'quantidade' => 'required|integer',
        'quantidade_minima' => 'required|integer'
    ];

    public function store()
    {
        $this->validate();
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'quantidade_minima' => $this->quantidade_minima
        ]);

        session()->flash('success', 'Cadastro de produto realizado com sucesso');
    }

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O numero minimo de caracteres para esse campo é 3',
        'nome.max' => 'O numero máximo de caracteres para esse campo é 30',
        'descricao.required' => 'O campo descrição é obrigatório',
        'descricao.max' => 'O numero máximo de caracteres para esse campo é 40',
        'preco.required' => 'O campo preço é obrigatório',
        'preco.decimal' => 'Valor do campo inválido',
        'quantidade.required' => 'O campo quantidade é obrigatório',
        'quantidade.integer'=>'O campo quantidade é inteiro',
        'quantidade_minima.required' => 'O campo quantidade minima é obrigatório',
        'quantidade_minima.integer'=>'O campo quantidade minima é inteiro'
    ];

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
