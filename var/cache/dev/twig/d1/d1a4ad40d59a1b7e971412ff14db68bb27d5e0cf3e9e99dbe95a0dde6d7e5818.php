<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fbef2f0832731233b8fc4d2e39fbd3c5c947f5512d05d1133ec8e27518cd6567 extends Twig_Template
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
        $__internal_aff4c3f2b5bc7e926d9bde3d76fa29988a86bd0a4e5268ab91d76e7541eaf648 = $this->env->getExtension("native_profiler");
        $__internal_aff4c3f2b5bc7e926d9bde3d76fa29988a86bd0a4e5268ab91d76e7541eaf648->enter($__internal_aff4c3f2b5bc7e926d9bde3d76fa29988a86bd0a4e5268ab91d76e7541eaf648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_aff4c3f2b5bc7e926d9bde3d76fa29988a86bd0a4e5268ab91d76e7541eaf648->leave($__internal_aff4c3f2b5bc7e926d9bde3d76fa29988a86bd0a4e5268ab91d76e7541eaf648_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
