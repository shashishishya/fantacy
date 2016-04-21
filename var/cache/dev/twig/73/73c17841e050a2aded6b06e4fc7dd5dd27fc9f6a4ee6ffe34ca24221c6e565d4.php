<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_98e9d97abdacbdf53c6a047ffc2c98665235832c526401cecb6e61f6e3da52a4 extends Twig_Template
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
        $__internal_57bc9b06e43381e55bac91b9dd0edb85cb99b90ac9779455e17205781051295f = $this->env->getExtension("native_profiler");
        $__internal_57bc9b06e43381e55bac91b9dd0edb85cb99b90ac9779455e17205781051295f->enter($__internal_57bc9b06e43381e55bac91b9dd0edb85cb99b90ac9779455e17205781051295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_57bc9b06e43381e55bac91b9dd0edb85cb99b90ac9779455e17205781051295f->leave($__internal_57bc9b06e43381e55bac91b9dd0edb85cb99b90ac9779455e17205781051295f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
