<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3d9644a7f194277f6828a2134e95e6270caa158250fceb44160d1c9b90686629 extends Twig_Template
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
        $__internal_b0039d3d68af74507e5277d28c7a688eef77cdc4183f46a369901fe42bf3f755 = $this->env->getExtension("native_profiler");
        $__internal_b0039d3d68af74507e5277d28c7a688eef77cdc4183f46a369901fe42bf3f755->enter($__internal_b0039d3d68af74507e5277d28c7a688eef77cdc4183f46a369901fe42bf3f755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b0039d3d68af74507e5277d28c7a688eef77cdc4183f46a369901fe42bf3f755->leave($__internal_b0039d3d68af74507e5277d28c7a688eef77cdc4183f46a369901fe42bf3f755_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
