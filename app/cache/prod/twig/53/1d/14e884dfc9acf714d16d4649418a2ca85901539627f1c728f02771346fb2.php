<?php

/* MDWDemoBundle:Default:articulos.html.twig */
class __TwigTemplate_531d14e884dfc9acf714d16d4649418a2ca85901539627f1c728f02771346fb2 extends Twig_Template
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
        echo "<h1>Listado de Articulos</h1>
<table border=\"1\">
<tr>
<th>ID</th>
<th>Titulo</th>
<th>Fecha de Creacion</th>
</tr>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 9
            echo "<tr>
<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "id"), "html", null, true);
            echo "</td>
<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "title"), "html", null, true);
            echo "</td>
<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : null), "created"), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  43 => 12,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
