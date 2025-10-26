<?php

class Tarta {

    private $ingredientes = []; 
    public $error = null;

    private static $ingredientesValidos = [
        'chocolate',
        'crema de vainilla',
        'almendra',
        'nata',
        'fresa'
    ];

    public static function getIngredientesValidos() {
        return self::$ingredientesValidos;
    }

    public function setIngredientes(array $ingredientes) { 
        $this->error = null;
        $cantidad = count($ingredientes);
        echo "\nCantidad de ingredientes: " . $cantidad . "\n";

        if ($cantidad < 1 || $cantidad > 2) { 
            $this->error = "Una tarta debe tener exactamente 1 o 2 ingredientes.";
            return; 
        }

        foreach ($ingredientes as $ingrediente) { 
            if (!in_array($ingrediente, self::$ingredientesValidos)) {
                $this->error = "Ingrediente inválido: $ingrediente";
                return;
            }
        }

        $this->ingredientes = $ingredientes;
    }

    public function __get($propiedad) { 
        if ($propiedad === 'ingredientes') {
            return $this->ingredientes;
        }
        
        return null; 
    }

    public function __set($propiedad, $valor) {
        if ($propiedad === 'ingredientes') {
            $this->setIngredientes($valor);
        }
    }

    public function __toString() { 
        return "Tarta de " . implode(" y ", $this->ingredientes);
    }

}


