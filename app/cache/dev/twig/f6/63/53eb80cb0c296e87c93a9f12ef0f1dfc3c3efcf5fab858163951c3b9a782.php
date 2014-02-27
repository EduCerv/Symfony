<?php

/* LaloPruebaBundle:Default:informacion.html.twig */
class __TwigTemplate_f66353eb80cb0c296e87c93a9f12ef0f1dfc3c3efcf5fab858163951c3b9a782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::inicio.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub' => array($this, 'block_sub'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "         Informacion
    ";
    }

    // line 8
    public function block_sub($context, array $blocks = array())
    {
        // line 9
        echo "           <h1>Informacion.</h1>
    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        echo " 
                     
        ";
        // line 14
        $this->env->loadTemplate("LaloPruebaBundle:Default:formulario.html.twig")->display($context);
        // line 15
        echo "                     
    ";
    }

    public function getTemplateName()
    {
        return "LaloPruebaBundle:Default:informacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  52 => 14,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 4,);
    }
}
