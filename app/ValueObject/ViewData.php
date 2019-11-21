<?php

namespace App\ValueObject;

class ViewData
{
    /** @var string */
    private $templateName;

    /** @var array */
    private $viewData;

    /**
     * @param string $templateName
     * @param array  $viewData
     */
    public function __construct(string $templateName, array $viewData)
    {
        $this->templateName = $templateName;
        $this->viewData     = $viewData;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @return array
     */
    public function getViewData(): array
    {
        return $this->viewData;
    }
}
