<?php


abstract class Entity
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add (Entity $component);
    abstract public function remove (Entity $component);
    abstract public function display ();

}

