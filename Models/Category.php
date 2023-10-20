<?php
class Category
{
    public $pet;
    public $icon;

    public function __construct(string $petType, string  $iconSrc)
    {
        $this->pet = $petType;
        $this->icon = $iconSrc;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
