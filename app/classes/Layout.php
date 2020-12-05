<?php

namespace app\classes;

class Layout
{
    private string $view;
    private string $filePath;

    public function add(string $view): void
    {
        $this->view = str_replace('.', '/', $view);
    }

    public function load(): ?string
    {
        $this->filePath = __DIR__. "/../views/{$this->view}.php";
        return file_exists($this->filePath) ? $this->filePath : null;
    }

    public function master(string $name): string
    {
        return __DIR__. "/../views/{$name}.php";
    }

}