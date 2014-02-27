<?php

/* ::loader.html.twig */
class __TwigTemplate_e9333b3cd89cab1100216d45d97cea92c6d8386d771a49011eb92ab54b9ce7ba extends Twig_Template
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
        echo "<div id=\"loader\">
  <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/loader.gif"), "html", null, true);
        echo "\"/>
  <br>
  <label>Cargando...</label>  
</div>
";
    }

    public function getTemplateName()
    {
        return "::loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  54 => 18,  46 => 17,  38 => 16,  19 => 1,  244 => 100,  241 => 99,  224 => 85,  218 => 81,  215 => 80,  208 => 68,  201 => 64,  194 => 60,  189 => 22,  186 => 21,  181 => 16,  175 => 14,  172 => 13,  165 => 14,  162 => 13,  158 => 10,  155 => 9,  152 => 8,  145 => 102,  143 => 99,  140 => 98,  138 => 80,  129 => 74,  122 => 69,  120 => 68,  115 => 65,  113 => 64,  108 => 61,  106 => 60,  96 => 53,  88 => 48,  82 => 45,  76 => 42,  70 => 39,  64 => 36,  56 => 31,  48 => 26,  44 => 24,  42 => 21,  37 => 18,  35 => 8,  26 => 1,);
    }
}
