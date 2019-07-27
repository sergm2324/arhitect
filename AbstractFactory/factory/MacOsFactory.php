<?php


class MacOsFactory extends AbstractFactory
{
    public function createButton($element): AbstractElement
    {
        return new Button($element);
    }

    public function createModalForm($element): AbstractElement
    {
        return new ModalForm($element);
    }

    public function createLabel($element): AbstractElement
    {
        return new Label($element);
    }
}