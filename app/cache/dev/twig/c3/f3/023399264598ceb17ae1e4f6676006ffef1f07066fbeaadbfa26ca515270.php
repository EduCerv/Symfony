<?php

/* MDWDemoBundle:Default:primera.html.twig */
class __TwigTemplate_c3f3023399264598ceb17ae1e4f6676006ffef1f07066fbeaadbfa26ca515270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
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
    public function block_titulo($context, array $blocks = array())
    {
        echo "Muestra";
    }

    // line 5
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hola Eduardo </h1>
     ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hola"]) ? $context["hola"] : $this->getContext($context, "hola")), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:primera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 2,);
    }
}
