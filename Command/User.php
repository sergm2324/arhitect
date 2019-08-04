<?php


class User
{
    private $editor;
    private $commands = [];

    private $current = 0;

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function runCommand($text, $operation){
        $command = new EditorCommand($this->editor, $text, $operation);
        $command->execute();

        $this->commands[] = $command;
        $this->current++;
    }

    public function up($levels)
    {
        echo "Повторить $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current < count($this->commands) - 1){
                $this->commands[$this->current++]->execute();
            }
        }
    }

    public function down($levels)
    {
        echo "Отменить $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current > 0){
                $this->commands[--$this->current]->unExecute();
            }
        }
    }



}