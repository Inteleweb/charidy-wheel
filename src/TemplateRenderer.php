<?php

class TemplateRenderer {
    public function render($template, $data) {
        extract($data);
        include($template);
    }
}
