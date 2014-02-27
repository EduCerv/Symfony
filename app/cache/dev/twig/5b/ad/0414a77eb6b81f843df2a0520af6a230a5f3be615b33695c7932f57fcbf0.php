<?php

/* MDWDemoBundle:Default:heredar.html.twig */
class __TwigTemplate_5bad0414a77eb6b81f843df2a0520af6a230a5f3be615b33695c7932f57fcbf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::herencia.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::herencia.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["ola"]) ? $context["ola"] : $this->getContext($context, "ola")), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:heredar.html.twig";
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
