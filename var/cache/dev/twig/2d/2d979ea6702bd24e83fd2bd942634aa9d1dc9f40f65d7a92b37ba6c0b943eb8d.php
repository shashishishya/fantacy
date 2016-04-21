<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c788990071790a327dd40cebd364e2e4cdd3e2180ae8831cabd354f0693b8ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d96472f10635c05c539fcd41b741f1e40c6a68e07fbf52caebce9f5ec2a045 = $this->env->getExtension("native_profiler");
        $__internal_85d96472f10635c05c539fcd41b741f1e40c6a68e07fbf52caebce9f5ec2a045->enter($__internal_85d96472f10635c05c539fcd41b741f1e40c6a68e07fbf52caebce9f5ec2a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d96472f10635c05c539fcd41b741f1e40c6a68e07fbf52caebce9f5ec2a045->leave($__internal_85d96472f10635c05c539fcd41b741f1e40c6a68e07fbf52caebce9f5ec2a045_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_760d9e368b99012100001ff54e596544231eebb121c0048022b89574579ef89b = $this->env->getExtension("native_profiler");
        $__internal_760d9e368b99012100001ff54e596544231eebb121c0048022b89574579ef89b->enter($__internal_760d9e368b99012100001ff54e596544231eebb121c0048022b89574579ef89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_760d9e368b99012100001ff54e596544231eebb121c0048022b89574579ef89b->leave($__internal_760d9e368b99012100001ff54e596544231eebb121c0048022b89574579ef89b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e3678786ef060bcdc40101a88fd0024d299fbd5a5d9777ba4e68695e715d16 = $this->env->getExtension("native_profiler");
        $__internal_33e3678786ef060bcdc40101a88fd0024d299fbd5a5d9777ba4e68695e715d16->enter($__internal_33e3678786ef060bcdc40101a88fd0024d299fbd5a5d9777ba4e68695e715d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33e3678786ef060bcdc40101a88fd0024d299fbd5a5d9777ba4e68695e715d16->leave($__internal_33e3678786ef060bcdc40101a88fd0024d299fbd5a5d9777ba4e68695e715d16_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b095883147bfa6385c2e66c006c74c29764ef82003ab0114d5a74d1d9390c46f = $this->env->getExtension("native_profiler");
        $__internal_b095883147bfa6385c2e66c006c74c29764ef82003ab0114d5a74d1d9390c46f->enter($__internal_b095883147bfa6385c2e66c006c74c29764ef82003ab0114d5a74d1d9390c46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b095883147bfa6385c2e66c006c74c29764ef82003ab0114d5a74d1d9390c46f->leave($__internal_b095883147bfa6385c2e66c006c74c29764ef82003ab0114d5a74d1d9390c46f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
