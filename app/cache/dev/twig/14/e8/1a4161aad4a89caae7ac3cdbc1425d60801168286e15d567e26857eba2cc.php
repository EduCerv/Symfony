<?php

/* MDWDemoBundle:Default:hola.html.twig */
class __TwigTemplate_14e81a4161aad4a89caae7ac3cdbc1425d60801168286e15d567e26857eba2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <title>Bienvenido</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width\">
    </head>
    <body>
     ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["hola"]) ? $context["hola"] : $this->getContext($context, "hola")), "html", null, true);
        echo "
        
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:hola.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
