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
        // $title не передаем -> сработает значение по умолчанию "Мой блог"
        $this->view->renderHtml('template.php', [
            'content' => '<h2>Статья 1</h2><p>Всем привет, это текст первой статьи</p><hr><h2>Статья 2</h2><p>Всем привет, это текст второй статьи</p>'
        ]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('template.php', [
            'title'   => 'Страница приветствия',
            'content' => '<h2>Привет, ' . htmlspecialchars($name) . '!</h2>'
        ]);
    }

    public function sayBye(string $name)
    {
        $this->view->renderHtml('template.php', [
            'title'   => 'Страница прощания',
            'content' => '<h2>Пока, ' . htmlspecialchars($name) . '!</h2>'
        ]);
    }
}
