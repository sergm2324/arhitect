<?php


class AnimalFamily extends Entity
{
    private $children = [];

    public function add(Entity $component)
    {
        $this->children[$component->name] = $component;
    }

    public function remove(Entity $component)
    {
        unset($this->children[$component->name]);
    }

    public function display()
    {
        foreach ($this->children as $child) {
            $child->display();
        }
    }

}