<?php

/* base.html.twig */
class __TwigTemplate_17754f8890888a649a2d0133d610d039efe169a36956ac54eccc760ab67cf09c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9d63cfe637fa28e384f27be4de8b51c63a7c0654d6ce9f08147ffd71e7ad1a7 = $this->env->getExtension("native_profiler");
        $__internal_c9d63cfe637fa28e384f27be4de8b51c63a7c0654d6ce9f08147ffd71e7ad1a7->enter($__internal_c9d63cfe637fa28e384f27be4de8b51c63a7c0654d6ce9f08147ffd71e7ad1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c9d63cfe637fa28e384f27be4de8b51c63a7c0654d6ce9f08147ffd71e7ad1a7->leave($__internal_c9d63cfe637fa28e384f27be4de8b51c63a7c0654d6ce9f08147ffd71e7ad1a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2fa85f2b3555190d681d822c9362d650fa642fa9914d01678c400d8a06e5c0a = $this->env->getExtension("native_profiler");
        $__internal_d2fa85f2b3555190d681d822c9362d650fa642fa9914d01678c400d8a06e5c0a->enter($__internal_d2fa85f2b3555190d681d822c9362d650fa642fa9914d01678c400d8a06e5c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2fa85f2b3555190d681d822c9362d650fa642fa9914d01678c400d8a06e5c0a->leave($__internal_d2fa85f2b3555190d681d822c9362d650fa642fa9914d01678c400d8a06e5c0a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22bc159a2b795858e65e821e618bf260be45d4a8e21bdfa8f12a9b21abef70b9 = $this->env->getExtension("native_profiler");
        $__internal_22bc159a2b795858e65e821e618bf260be45d4a8e21bdfa8f12a9b21abef70b9->enter($__internal_22bc159a2b795858e65e821e618bf260be45d4a8e21bdfa8f12a9b21abef70b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_22bc159a2b795858e65e821e618bf260be45d4a8e21bdfa8f12a9b21abef70b9->leave($__internal_22bc159a2b795858e65e821e618bf260be45d4a8e21bdfa8f12a9b21abef70b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5007cd64ca1e3b8d42125f00a94b1686328916a40a926929458d95403c9699 = $this->env->getExtension("native_profiler");
        $__internal_af5007cd64ca1e3b8d42125f00a94b1686328916a40a926929458d95403c9699->enter($__internal_af5007cd64ca1e3b8d42125f00a94b1686328916a40a926929458d95403c9699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af5007cd64ca1e3b8d42125f00a94b1686328916a40a926929458d95403c9699->leave($__internal_af5007cd64ca1e3b8d42125f00a94b1686328916a40a926929458d95403c9699_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3a3de964d5de1080234d3f524a32baffda337ecc84e71be954b58874ab2fa02 = $this->env->getExtension("native_profiler");
        $__internal_d3a3de964d5de1080234d3f524a32baffda337ecc84e71be954b58874ab2fa02->enter($__internal_d3a3de964d5de1080234d3f524a32baffda337ecc84e71be954b58874ab2fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3a3de964d5de1080234d3f524a32baffda337ecc84e71be954b58874ab2fa02->leave($__internal_d3a3de964d5de1080234d3f524a32baffda337ecc84e71be954b58874ab2fa02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
