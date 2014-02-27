<?php

/* MDWDemoBundle:Default:principal.html.twig */
class __TwigTemplate_5023c4d2bee297555fa8c2e509d07d7981362956c9742634956fb7c96934a13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::inicio.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'inicio' => array($this, 'block_inicio'),
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, (isset($context["us"]) ? $context["us"] : $this->getContext($context, "us")), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_inicio($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Buenos dias ";
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  32 => 3,  29 => 2,);
    }
}
