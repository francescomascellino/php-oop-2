<?php

// QUESTO TRATTO VIENE UTILIZZATO PER OTTENERE LE INFORMAZIONI DA QUELLE CLASSI CHE POSSIEDONO SIA UN $material CHE UN $color
trait MaterialInfo
{
    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
