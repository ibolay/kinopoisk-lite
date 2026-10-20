<?php

namespace App\Kernel\Controller;

use App\Kernel\View\View;

class Controller
{
    protected View $view;

    public function setView(View $view): void
    {
        $this->view = $view;
    }

    protected function view(string $name): void
    {
        $this->view->page($name);
    }
}