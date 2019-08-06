<?php


class EditorCommand extends Command
{
public $text;
public $operation;

public $editor;

    public function __construct($editor, $text, $operation)
    {
        $this->text = $text;
        $this->operation = $operation;
        $this->editor = $editor;
    }


    public function execute()
    {
        $this->editor->action($this->text, $this->operation);
    }

    public function unExecute()
    {
        $this->editor->action($this->down($this->text), $this->operation);
    }

    protected function down($text){
        $textAction = null;

        switch ($text){
            case 'copy': $textAction = 'Отмена copy'; break;
            case 'insert': $textAction = 'Отмена insert'; break;
            case 'cut': $textAction = 'Отмена cut'; break;
            default: $textAction = ' ';
        }

     return $textAction;
    }


}