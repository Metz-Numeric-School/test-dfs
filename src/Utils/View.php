<?php

class View
{
    private array $data;
    private string $template;
    private string $layout;

    public function __construct($template, $data, $layout){
        $this->template = '../src/Views/' . $template;
        $this->layout = '../src/Views/' . $layout;
        $this->data = $data;
    }

    public function render()
    {
        extract($this->data);
        require $this->layout;
    }

    /**
     * Get the value of data
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Set the value of data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of template
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * Set the value of template
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get the value of layout
     */
    public function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * Set the value of layout
     */
    public function setLayout(string $layout): self
    {
        $this->layout = $layout;

        return $this;
    }
}