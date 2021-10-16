<?php
    class Galeria{
        private $imagens = array('art-1.jpg','art-2.jpg','art-3.jpg','art-4.jpg','art-5.jpg','art-6.jpg','art-7.jpg','art-8.jpg','art-9.jpg','art-10.jpg','art-11.jpg');

        public function getCurrentPicture(){
            $atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
            if($atual < 0){
                $atual = 0;
            }if($atual >= count($this->imagens)){
                $atual = count($this->imagens) -1;
            }

                return $this->imagens[$atual];
            }
            
            public function getPrevPictureIndex(){
                $atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
                $atual--;
                if($atual < 0){
                    $atual = 0;
                }

                return '?imagem='.$atual;
        }

        public function getNextPictureIndex(){
            $atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
            $atual++;
            if($atual <= count($this->imagens)){
                $atual = count($this->imagens) -1;
            }
            return '?imagem='.$atual;
        }
    }
?>