<?php

/* ::inicio.html.twig */
class __TwigTemplate_4d7bac1fef752ba3f2f6df1b4c1e3ad6d20b029ef1de8a3c181e434086376d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'inicio' => array($this, 'block_inicio'),
            'sub' => array($this, 'block_sub'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'loader' => array($this, 'block_loader'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" >
    <head>
        <meta charset=\"iso-8859-1\">
            <meta name=\"description\" content=\"Ejemplo de HTML5\">
                <meta name=\"keywords\" content=\"HTML5, CSS3, JavaScript\">

 ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "

                    <title>      
    ";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        // line 24
        echo "                    </title>
                    </head>
                    <body backgroung=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\">


                        <header>
                            <div id=\"inicial\">
                                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/portada.jpg"), "html", null, true);
        echo "\" />
                            </div>                
                            <div id=\"header\">
                                <ul class=\"nav\">
                                    <li>
                                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("menu");
        echo "\">Inicio</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("articulos");
        echo "\">Autos</a>          
                                        <ul> 
                                            <li>      
                                                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("articulo", array("id" => 1));
        echo "\">Ferrari SP12 EC </a>          
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("articulo", array("id" => 2));
        echo "\">Ferrari 340 Mexico</a>
                                            </li>   
                                            <li>                  
                                                <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("articulo", array("id" => 3));
        echo "\">Ferrari 250 GTO</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("informacion");
        echo "\">Informacion.</a>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        <div id=\"todo\">

            ";
        // line 60
        $this->displayBlock('inicio', $context, $blocks);
        // line 61
        echo "   


            ";
        // line 64
        $this->displayBlock('sub', $context, $blocks);
        // line 65
        echo " 


            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "    

                        </div>
                        <div id=\"footer\">
                            <footer>
                                <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes/infoexpo.jpg"), "html", null, true);
        echo "\" />
                                <br/> 
                                    Derechos Reservados &copy 2014-2015   
                            </footer>
                        </div>

        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "
            ";
        // line 99
        $this->displayBlock('loader', $context, $blocks);
        // line 102
        echo "

                    </body>     
                    </html> ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
     ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4b16c09_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b16c09_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b16c09_format_1.css");
            // line 13
            echo "
                    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" id=\"galleria-theme\" />
    ";
        } else {
            // asset "4b16c09"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b16c09") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b16c09.css");
            // line 13
            echo "
                    <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" id=\"galleria-theme\" />
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        // line 22
        echo "                        Inicio
    ";
    }

    // line 60
    public function block_inicio($context, array $blocks = array())
    {
        echo "            
            ";
    }

    // line 64
    public function block_sub($context, array $blocks = array())
    {
        echo "                
            ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        echo "      
            ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "
                        <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
                        <script src=\"http://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
                        <script type=\"text/javascript\" src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js\"></script>
                        <script language=\"text/javascript\" type=\"text/javascript\"  src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validacion.js"), "html", null, true);
        echo "\"></script>

                        <script type=\"text/javascript\">

                            \$(document).ready(function() {

                                \$(\"#peques img\").hover(function() {
                                    var imagen = \$(this).attr(\"src\");
                                    \$(\"#grande\").attr(\"src\", imagen);
                                });
                            });
                        </script>
        ";
    }

    // line 99
    public function block_loader($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        $this->env->loadTemplate("::loader.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "::inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 100,  241 => 99,  224 => 85,  218 => 81,  215 => 80,  208 => 68,  201 => 64,  194 => 60,  189 => 22,  186 => 21,  181 => 16,  175 => 14,  172 => 13,  165 => 14,  162 => 13,  158 => 10,  155 => 9,  152 => 8,  145 => 102,  143 => 99,  140 => 98,  138 => 80,  129 => 74,  122 => 69,  120 => 68,  115 => 65,  113 => 64,  108 => 61,  106 => 60,  96 => 53,  88 => 48,  82 => 45,  76 => 42,  70 => 39,  64 => 36,  56 => 31,  48 => 26,  44 => 24,  42 => 21,  37 => 18,  35 => 8,  26 => 1,);
    }
}
