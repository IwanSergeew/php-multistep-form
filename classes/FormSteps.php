<?php
    class FormSteps {
        function __construct($current, $total, $path) {
            $this->current = $current;
            $this->total = $total;
            $this->path = $path;
        }

        function stepsHeadHtml() {
            $html = "<ul id='multistepFormHead' class='multistep-form-head'>";
            
            for($i = 1; $i <= $this->total; $i++) {
                if($i < $this->current) $html .= "<li class='done'>✓</li>";
                else $html .= "<li".($i == $this->current ? " class='current'" : "").">$i</li>";
            }
            $html .= "</ul>";
            echo $html;
        }

        function getNextStepForm() {
            if($this->current > $this->total) include_once "$this->path/step-final.php";
            else include_once "$this->path/step$this->current.php";
        }
    }