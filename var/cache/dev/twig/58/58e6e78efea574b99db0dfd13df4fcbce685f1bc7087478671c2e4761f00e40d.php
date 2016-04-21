<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_316f0c1a98b75dc1ac28ce836b0fb120b740a3662dfa1f7e152967b96bfc7915 extends Twig_Template
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
        $__internal_2800dac93cbbf90cb6f34f79fcf26ce88da77dfefc76869c10b01def67786c6b = $this->env->getExtension("native_profiler");
        $__internal_2800dac93cbbf90cb6f34f79fcf26ce88da77dfefc76869c10b01def67786c6b->enter($__internal_2800dac93cbbf90cb6f34f79fcf26ce88da77dfefc76869c10b01def67786c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2800dac93cbbf90cb6f34f79fcf26ce88da77dfefc76869c10b01def67786c6b->leave($__internal_2800dac93cbbf90cb6f34f79fcf26ce88da77dfefc76869c10b01def67786c6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
