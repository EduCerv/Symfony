<?php

/* ::base.html.twig */
class __TwigTemplate_5ce39e2531ce2fe9e2aa090e19a40217d16974c94e05b05c45d0f287be97d25a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title id='titulo'>
            ";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        // line 6
        echo "        </title>
        
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width\">  
    
    </head>

    <body id=\"cuerpo\">
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "      
    </body>
</html>";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        echo "Primera pantalla";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  47 => 5,  41 => 15,  39 => 14,  29 => 6,  27 => 5,  21 => 1,  28 => 2,);
    }
}
