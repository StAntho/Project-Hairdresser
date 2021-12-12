<?php

namespace Core;

class DefaultController
{
    /**
     * @param string $pathView
     * @param array $params
     * @return void
     */
    public function render(string $pathView, array $params = [])
    {
        ob_start();
        extract($params);
        require ROOT . "/Templates/$pathView.php";
        $content = ob_end_clean();
        require ROOT . '/Templates/base.php';
    }
}
