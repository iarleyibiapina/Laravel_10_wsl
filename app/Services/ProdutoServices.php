<?php

namespace App\services;

use stdClass;

class produtoService{
    protected $repository;

    public function __construct(){}
//elo entre repositorio e controller retornando dados
// $filter = null, filtro sendo opcional
// : array retornar um array
    public function getAll(string $filter = null): array{
    // pegando os dados
            return $this->repository->getAll($filter);
        }
    // retornar stdClass ou nulo
        public function findOne(string $id): stdClass|null{
            return $this->repository->findOne($id);
        }
    // retorna nada :void()
        public function delete(string $id): void{
            $this->repository->delete($id);
        }
    // create, recebendo parametros
        public function new(
    string $assunto, 
    string $status, 
    string $descricao): stdClass{
    // pode ser new() ou store()
        return $this->repository->new($assunto, $status, $descricao);
        }
        
    public function update( string $id, string $assunto, string $status, string $descricao): stdClass|null{
    // pode ser new() ou store()
        return $this->repository->new($id, $assunto, $status, $descricao);
    }
    
}   