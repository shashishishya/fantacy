<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_85501c89ae1f6017dc83e755cee76f2d9d99ae0213ee838881fe341be3a68afb extends Twig_Template
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
        $__internal_f9fa7f01f13647a38bcf8eddcc3af080741e2313e5b4a1c1882f4df749f5c3d8 = $this->env->getExtension("native_profiler");
        $__internal_f9fa7f01f13647a38bcf8eddcc3af080741e2313e5b4a1c1882f4df749f5c3d8->enter($__internal_f9fa7f01f13647a38bcf8eddcc3af080741e2313e5b4a1c1882f4df749f5c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f9fa7f01f13647a38bcf8eddcc3af080741e2313e5b4a1c1882f4df749f5c3d8->leave($__internal_f9fa7f01f13647a38bcf8eddcc3af080741e2313e5b4a1c1882f4df749f5c3d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
