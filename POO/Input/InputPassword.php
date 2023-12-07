<?php

class InputPassword extends Input
{

    public function __construct(string $name, string $id, string $placeholder, string $value)
    {
        parent::__construct($name, $id, $placeholder, $value);
    }
    public function render(): string
    {
        return "<input type='password' name='$this->name' id='$this->id' placeholder='$this->placeholder' value='$this->value'>";
    }
}