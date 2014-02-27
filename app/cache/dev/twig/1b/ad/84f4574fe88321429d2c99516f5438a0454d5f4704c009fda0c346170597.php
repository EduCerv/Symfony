<?php

/* MDWDemoBundle:Default:articulo.html.twig */
class __TwigTemplate_1bad84f4574fe88321429d2c99516f5438a0454d5f4704c009fda0c346170597 extends Twig_Template
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
        echo "           Auto ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "
    ";
    }

    // line 8
    public function block_sub($context, array $blocks = array())
    {
        // line 9
        echo "           <h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</h1>
    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "       <ul>
           <li>Titulo: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</li>
           <li>Fecha de creacion: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</li>
           <li>Descripcion: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "description"), "html", null, true);
        echo "</li>
       </ul>             
         
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-250gto01.jpg"), "html", null, true);
        echo "\" alt=\"FRR\" name=\"grande\" width=\"338\" height=\"253\" id=\"grande\"/>
                <div id=\"peques\">
                    <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-250gto.html\">
                     <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-250gto01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
                     </a>
                     <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-340mexico.html\">   
                     <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-340mexico01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\">
                      </a>
                     <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-sp12-ec.html\">
                     <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-sp12-ec-02.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
                     </a>
                     <a href=\"http://www.super-autos.net/ferrari/autos/ferrari-sp12-ec.html\">
                     <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/ferrari-sp12-ec-01.jpg"), "html", null, true);
        echo "\" width=\"72\" height=\"48\" border=\"0\"/>
                     </a>      
                </div>
           

    ";
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
        return array (  94 => 31,  88 => 28,  82 => 25,  76 => 22,  70 => 19,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  50 => 12,  43 => 9,  40 => 8,  33 => 5,  30 => 4,);
    }
}
