<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1d33fa6508cd581b3873f0a412e26b9f6c71ea159f26e0dce6c8f8e2f2e2144c extends Twig_Template
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
        $__internal_af7709eff453ae5b296e1cc9fe797f5dd0d8991cd08a55afcccdabe2afe77aea = $this->env->getExtension("native_profiler");
        $__internal_af7709eff453ae5b296e1cc9fe797f5dd0d8991cd08a55afcccdabe2afe77aea->enter($__internal_af7709eff453ae5b296e1cc9fe797f5dd0d8991cd08a55afcccdabe2afe77aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_af7709eff453ae5b296e1cc9fe797f5dd0d8991cd08a55afcccdabe2afe77aea->leave($__internal_af7709eff453ae5b296e1cc9fe797f5dd0d8991cd08a55afcccdabe2afe77aea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
