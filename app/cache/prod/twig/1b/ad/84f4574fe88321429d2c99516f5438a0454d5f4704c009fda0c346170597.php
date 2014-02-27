<?php

/* MDWDemoBundle:Default:articulo.html.twig */
class __TwigTemplate_1bad84f4574fe88321429d2c99516f5438a0454d5f4704c009fda0c346170597 extends Twig_Template
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
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "id"), "html", null, true);
        echo "</h1>
<ul>
<li>Titulo: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "title"), "html", null, true);
        echo "</li>
<li>Fecha de creacion: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "created"), "html", null, true);
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  19 => 1,);
    }
}
