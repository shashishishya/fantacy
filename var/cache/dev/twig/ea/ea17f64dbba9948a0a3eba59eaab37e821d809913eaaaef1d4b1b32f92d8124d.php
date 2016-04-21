<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d1a0743fec73563c2630c98f7245d8e9b62354d5db9ffa1efea86d3347ca9c05 extends Twig_Template
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
        $__internal_69fd3544956c08ffa91715276aafa883d8b3214d7ede271ebf3b060afcce4732 = $this->env->getExtension("native_profiler");
        $__internal_69fd3544956c08ffa91715276aafa883d8b3214d7ede271ebf3b060afcce4732->enter($__internal_69fd3544956c08ffa91715276aafa883d8b3214d7ede271ebf3b060afcce4732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_69fd3544956c08ffa91715276aafa883d8b3214d7ede271ebf3b060afcce4732->leave($__internal_69fd3544956c08ffa91715276aafa883d8b3214d7ede271ebf3b060afcce4732_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
