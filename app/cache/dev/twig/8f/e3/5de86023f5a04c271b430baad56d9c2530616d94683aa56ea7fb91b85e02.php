<?php

/* MDWDemoBundle:Default:herencia.html.twig */
class __TwigTemplate_8fe35de86023f5a04c271b430baad56d9c2530616d94683aa56ea7fb91b85e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo " 
         <h1>Hola Eduardo </h1>
    
         <br>
    ";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:herencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}
