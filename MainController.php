<?php

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__);
    }

    public function main()
    {
        // title не передаём -> подставится "Мой блог" по умолчанию
        $this->view->renderHtml('main.php');
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('hello.php', [
            'name'  => $name,
            'title' => 'Страница приветствия'
        ]);
    }
}
