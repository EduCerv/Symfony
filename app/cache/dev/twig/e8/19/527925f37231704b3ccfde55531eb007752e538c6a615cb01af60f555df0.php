<?php

/* LaloPruebaBundle:Default:contacto.html.twig */
class __TwigTemplate_e819527925f37231704b3ccfde55531eb007752e538c6a615cb01af60f555df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::inicio.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'sub' => array($this, 'block_sub'),
            'cuerpo' => array($this, 'block_cuerpo'),
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
    public function block_titulo($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("titulo", $context, $blocks);
        echo "
         Contacto
    ";
    }

    // line 9
    public function block_sub($context, array $blocks = array())
    {
        // line 10
        echo "           <h1>Contacto:</h1>
    ";
    }

    // line 13
    public function block_cuerpo($context, array $blocks = array())
    {
        echo " 
           
";
        // line 15
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nombre", array(), "array");
        echo "
           
        ";
        // line 17
        $this->env->loadTemplate("LaloPruebaBundle:Default:formulario.html.twig")->display($context);
        // line 18
        echo "           
    ";
    }

    public function getTemplateName()
    {
        return "LaloPruebaBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  60 => 17,  55 => 15,  49 => 13,  44 => 10,  41 => 9,  33 => 5,  30 => 4,);
    }
}
