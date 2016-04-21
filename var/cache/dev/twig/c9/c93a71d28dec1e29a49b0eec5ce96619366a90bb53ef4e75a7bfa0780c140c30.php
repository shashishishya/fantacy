<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_83a6b1c186c343ec73f833a8d9069bccf9a348a521f0135fc7642956b5ef9c0d extends Twig_Template
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
        $__internal_4db48ebfef8f1e9711fdc06f6c8e4a8ae6022a6c9a38ecddfb99f2872a89802e = $this->env->getExtension("native_profiler");
        $__internal_4db48ebfef8f1e9711fdc06f6c8e4a8ae6022a6c9a38ecddfb99f2872a89802e->enter($__internal_4db48ebfef8f1e9711fdc06f6c8e4a8ae6022a6c9a38ecddfb99f2872a89802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4db48ebfef8f1e9711fdc06f6c8e4a8ae6022a6c9a38ecddfb99f2872a89802e->leave($__internal_4db48ebfef8f1e9711fdc06f6c8e4a8ae6022a6c9a38ecddfb99f2872a89802e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
