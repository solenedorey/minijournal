<?php
namespace Sd\Framework\Validateur;

use Sd\Framework\AppInterfaces\ValidateurInterface;

class LongueurMaxi implements ValidateurInterface
{
    private $limit;

    /**
     * LongueurMini constructor.
     * @param $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function valider($valeur)
    {
        return strlen($valeur) > $this->limit ? false : true;
    }

    public function getMessage()
    {
        return "Il faut saisir un contenu de moins de " . $this->limit . " caractères";
    }
}
