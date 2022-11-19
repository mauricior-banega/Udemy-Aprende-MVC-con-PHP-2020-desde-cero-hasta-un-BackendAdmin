<?php
    /*
      Clases: Es una plantilla que usamos para crear objetos.
      Podemos crear clases de tipo:
            public: Variables publicas, es decir que pueden usarse en todas las clases.
            private: Variables privadas, que solo van a poder ser usadas en esa clase.
            protected: Variables protegidas.
    */
    
    class Principal
    {
        public $var="hola mundo";

        public function Inicio()
        {
            echo $this->var;

            //La "flechita" sirve para unir un Objeto con uno de sus campos/atributos/funciones o miembros.
        }
    }

?>