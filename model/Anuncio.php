<?php

    class Anuncio{

        private $idAnuncio ;
        private $nomeAnuncio ;
        private $descricaoAnuncio ;
        private $valorAnuncio ;
        private $precoCustoAnuncio ;
        private $estrelasAnuncio ;
        private $imagemPrincipalAnuncio ;
        private $tipoAnuncio ;
        private $qtdProduto ;

        private $Vendedora;
        public function __construct()
        {
            $this->Vendedora = new Vendedora();
        }

        public function getIdAnuncio() {
            return $this->idAnuncio;
        }
        public function getNomeAnuncio() {
            return $this->nomeAnuncio;
        }
        public function getDescricaoAnuncio() {
            return $this->descricaoAnuncio;
        }
        public function getValorAnuncio() {
            return $this->valorAnuncio;
        }
        public function getPrecoCustoAnuncio() {
            return $this->precoCustoAnuncio;
        }
        public function getEstrelasAnuncio() {
            return $this->estrelasAnuncio;
        }
        public function getImagemPrincipalAnuncio() {
            return $this->imagemPrincipalAnuncio;
        }
        public function getTipoAnuncio() {
            return $this->tipoAnuncio;
        }
        public function getQtdProduto() {
            return $this->qtdProduto;
        }
        public function getVendedora() {
            return $this->Vendedora;
        }
        public function setIdAnuncio($idAnuncio) {
            $this->idAnuncio = $idAnuncio;
        }
        public function setNomeAnuncio($nomeAnuncio) {
            $this->nomeAnuncio = $nomeAnuncio;
        }
        public function setDescricaoAnuncio($descricaoAnuncio) {
            $this->descricaoAnuncio = $descricaoAnuncio;
        }
        public function setValorAnuncio($valorAnuncio) {
            $this->valorAnuncio = $valorAnuncio;
        }
        public function setPrecoCustoAnuncio($precoCustoAnuncio) {
            $this->precoCustoAnuncio = $precoCustoAnuncio;
        }
        public function setEstrelasAnuncio($estrelasAnuncio) {
            $this->estrelasAnuncio = $estrelasAnuncio;
        }
        public function setImagemPrincipalAnuncio($imagemPrincipalAnuncio) {
            $this->imagemPrincipalAnuncio = $imagemPrincipalAnuncio;
        }
        public function setTipoAnuncio($tipoAnuncio) {
            $this->tipoAnuncio = $tipoAnuncio;
        }
        public function setQtdProduto($qtdProduto) {
            $this->qtdProduto = $qtdProduto;
        }
        public function setVendedora($Vendedora) {
            $this->Vendedora = $Vendedora;
        }
    }


?>
