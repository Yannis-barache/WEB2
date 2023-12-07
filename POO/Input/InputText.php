<?php

require 'Input.php';

class InputText extends Input
{
    public function __construct(string $name, string $id, string $placeholder, string $value)
    {
        parent::__construct($name, $id, $placeholder, $value);
    }







    public function render(): string
    {
        return "<input type='text' name='$this->name' id='$this->id' placeholder='$this->placeholder' value='$this->value'>";
    }


}