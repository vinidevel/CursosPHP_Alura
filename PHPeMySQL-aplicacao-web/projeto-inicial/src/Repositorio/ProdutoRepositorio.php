<?php

class ProdutoRepositorio
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function formarObjeto($dados)
    {
        return new Produto($dados['id'],
            $dados['tipo'],
            $dados['nome'],
            $dados['descricao'],
            $dados['preco'],
            $dados['imagem']
        );
    }


    public function opcoesCafe(): array
    {
        //código omitido
        $sql1 = "SELECT * FROM produtos WHERE tipo = 'Cafe' ORDER BY preco";
        $statement = $this->pdo->query($sql1);
        $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

        //código omitido

        $dadosCafe = array_map(function ($cafe) {
            return new Produto(
                $cafe['id'],
                $cafe['tipo'],
                $cafe['nome'],
                $cafe['descricao'],
                $cafe['preco'],
                $cafe['imagem'],
            );
        }, $produtosCafe);

        return $dadosCafe;
    }




    public function opcoesAlmoco(): array
    {
        $sql2 = "SELECT * FROM produtos WHERE tipo = 'Almoço' ORDER BY preco";
        $statement = $this->pdo->query($sql2);
        $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosAlmoco = array_map(function ($almoco) {
            return new Produto(
                $almoco['id'],
                $almoco['tipo'],
                $almoco['nome'],
                $almoco['descricao'],
                $almoco['preco'],
                $almoco['imagem'],
            );
        }, $produtosAlmoco);


        return $dadosAlmoco;
    }

    public function buscarTodos(): array
    {
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $statement = $this->pdo->query($sql);
        $dados = $statement->fetchAll(PDO::FETCH_ASSOC);

        $todosOsDados = array_map(function ($produto) {
            return new Produto(
                $produto['id'],
                $produto['tipo'],
                $produto['nome'],
                $produto['descricao'],
                $produto['preco'],
                $produto['imagem'],
            );
        }, $dados);


        return $todosOsDados;
    }

    public function deletar(int $id)
    {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }


    public function salvar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) VALUES  (?, ?, ?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getTipo());
        $statement->bindValue(2, $produto->getNome());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getImagem());
        $statement->execute();
    }


    public function buscar(int $id)
    {
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $dados = $statement->fetch(PDO::FETCH_ASSOC);

        return new Produto(
            $dados['id'],
            $dados['tipo'],
            $dados['nome'],
            $dados['descricao'],
            $dados['preco'],
            $dados['imagem']
        );
    }

    public function atualizar(Produto $produto)
    {
        $sql = "UPDATE produtos SET tipo = ?, nome = ?, descricao = ?, preco = ?, imagem = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getTipo());
        $statement->bindValue(2, $produto->getNome());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getImagem());
        $statement->bindValue(6, $produto->getId());
        $statement->execute();
    }
}
