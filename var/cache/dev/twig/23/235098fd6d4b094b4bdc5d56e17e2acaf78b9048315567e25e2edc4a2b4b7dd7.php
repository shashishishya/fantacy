<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ff289d970254a220e8171614a733b75ea7fccde2e66a1b2a19c1f18942196f3d extends Twig_Template
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
        $__internal_048457862b5f04b98afe0aa30bff1c5fdc6893eb9a5e731bd7f4c07cb0c7954d = $this->env->getExtension("native_profiler");
        $__internal_048457862b5f04b98afe0aa30bff1c5fdc6893eb9a5e731bd7f4c07cb0c7954d->enter($__internal_048457862b5f04b98afe0aa30bff1c5fdc6893eb9a5e731bd7f4c07cb0c7954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_048457862b5f04b98afe0aa30bff1c5fdc6893eb9a5e731bd7f4c07cb0c7954d->leave($__internal_048457862b5f04b98afe0aa30bff1c5fdc6893eb9a5e731bd7f4c07cb0c7954d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
