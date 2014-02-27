<?php

/* MDWDemoBundle:Default:articulos.html.twig */
class __TwigTemplate_531d14e884dfc9acf714d16d4649418a2ca85901539627f1c728f02771346fb2 extends Twig_Template
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
        echo "Autos
    ";
    }

    // line 8
    public function block_sub($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Autos</h1>
    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Listado de Autos</h1>
<table border=\"1\" id=\"tabla\">
    <tr>
        <th>ID</th>
        <th width=\"125\">Titulo</th>
        <th  width=\"105\">Fecha de Creacion</th>
        <th>Descripcion</th>
    </tr>
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 22
            echo "    <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "description"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>            

<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-250gto01.jpg"), "html", null, true);
        echo "\" alt=\"FRR\" name=\"grande\" width=\"338\" height=\"253\" id=\"grande\"/>
<div id=\"peques\">
    <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-250gto.html\">
        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-250gto01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
    </a>
    <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-340mexico.html\">   
        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-340mexico01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\">
    </a>
    <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-sp12-ec.html\">
        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-sp12-ec-02.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
    </a>
    <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-sp12-ec.html\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-sp12-ec-01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
    </a>      
</div>


    ";
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
        return array (  115 => 43,  109 => 40,  103 => 37,  97 => 34,  91 => 31,  87 => 29,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 4,);
    }
}
