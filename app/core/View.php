<?php

namespace App\core;
class View
{
    public function rendering($content_view, $template_view = null, $payload = null)
    {
        if ($template_view) {
            include_once VIEW . $template_view;
        }
    }
}