<?php
class Category
{
    public $pet;
    public $icon;

    // PROTECTED ATTRIBUTES CAN NOT BE EDITED
    public function __construct(protected string $petType, protected string  $iconSrc)
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
