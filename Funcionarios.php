<?php

    class Funcionarios
    {
        private $funcionarios;

        public function __construct()
        {
            $this->funcionarios = [
                ['id' => '123', 'nome' => 'Breno'],
                ['id' => '321', 'nome' => 'Cassio']
            ];
        }

        public function all()
        {
            return $this->funcionarios;
        }

        public function find($id)
        {
            foreach ($this->funcionarios as $func) {
                if ($func['id'] == $id) {
                    return $func;
                }
            }

            return null;
        }
    }

?>