<?php

/* LaloPruebaBundle:Default:formulario.html.twig */
class __TwigTemplate_eb8ec3175a08307220b6e6b3074ff3334cfd31791c443f85d78d5f69e8384b23 extends Twig_Template
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
        echo "<form  id=\"form_datos\" action=\"";
        echo $this->env->getExtension('routing')->getPath("informacion");
        echo "\" method=\"POST\"> 
    <input type=\"tetx\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" />
    <br/>
    <input type=\"tetx\" id=\"apellido\"  name=\"apellido\"placeholder=\"Apellido\"/>
    <br/>
    <input type=\"tetx\" id=\"escuela\" name=\"escuela\" placeholder=\"Escuela\"/>       
    <br/>
    <input type=\"submit\" id=\"guardar\" name=\"Guardar\" value=\"Guardar\" />                    
</form>


<div id=\"datos_formulario\" style=\"";
        // line 12
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nombre", array(), "array", true, true)) {
            echo "display:block";
        }
        echo "\" >
    Nombre: ";
        // line 13
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nombre", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nombre", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "<br/>
    Apellido: ";
        // line 14
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "apellido", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "apellido", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "<br/>
      Escuela: ";
        // line 15
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "escuela", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "escuela", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "<br/>
</div>";
    }

    public function getTemplateName()
    {
        return "LaloPruebaBundle:Default:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  48 => 14,  40 => 13,  34 => 12,  19 => 1,);
    }
}
