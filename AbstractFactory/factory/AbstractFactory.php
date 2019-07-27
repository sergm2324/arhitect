<?php


abstract class AbstractFactory
{
    abstract public function createButton( $element): AbstractElement;
    abstract public function createModalForm( $element): AbstractElement;
    abstract public function createLabel( $element): AbstractElement;
}