<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_42840ecea318ad8cfd89172d089bfbdebae56866d07c89aade8e2200db9a285a extends Twig_Template
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
        $__internal_e848e0ebd6c118c893277e636e69e7bf163a830957fabb493762ce63483d2072 = $this->env->getExtension("native_profiler");
        $__internal_e848e0ebd6c118c893277e636e69e7bf163a830957fabb493762ce63483d2072->enter($__internal_e848e0ebd6c118c893277e636e69e7bf163a830957fabb493762ce63483d2072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e848e0ebd6c118c893277e636e69e7bf163a830957fabb493762ce63483d2072->leave($__internal_e848e0ebd6c118c893277e636e69e7bf163a830957fabb493762ce63483d2072_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
