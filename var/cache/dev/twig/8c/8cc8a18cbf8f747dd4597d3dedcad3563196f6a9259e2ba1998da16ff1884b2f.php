<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a17506ab369ac374753ad5f591698de907ae9c4bc600631b982f3c9d03c7f4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_20eecb62199a1c2c859e83ac53a1d97a429797b450c17aec50a3c53f0ec0975d = $this->env->getExtension("native_profiler");
        $__internal_20eecb62199a1c2c859e83ac53a1d97a429797b450c17aec50a3c53f0ec0975d->enter($__internal_20eecb62199a1c2c859e83ac53a1d97a429797b450c17aec50a3c53f0ec0975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20eecb62199a1c2c859e83ac53a1d97a429797b450c17aec50a3c53f0ec0975d->leave($__internal_20eecb62199a1c2c859e83ac53a1d97a429797b450c17aec50a3c53f0ec0975d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df1755458cf43b3c86de8e1ce8d773c701eca3ac44605b2070e6b73ee8f061e = $this->env->getExtension("native_profiler");
        $__internal_7df1755458cf43b3c86de8e1ce8d773c701eca3ac44605b2070e6b73ee8f061e->enter($__internal_7df1755458cf43b3c86de8e1ce8d773c701eca3ac44605b2070e6b73ee8f061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7df1755458cf43b3c86de8e1ce8d773c701eca3ac44605b2070e6b73ee8f061e->leave($__internal_7df1755458cf43b3c86de8e1ce8d773c701eca3ac44605b2070e6b73ee8f061e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_849f71cf17c40a54c22e0306282fe1f66df8a3fd3caeddc4715fd17d0f8df508 = $this->env->getExtension("native_profiler");
        $__internal_849f71cf17c40a54c22e0306282fe1f66df8a3fd3caeddc4715fd17d0f8df508->enter($__internal_849f71cf17c40a54c22e0306282fe1f66df8a3fd3caeddc4715fd17d0f8df508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_849f71cf17c40a54c22e0306282fe1f66df8a3fd3caeddc4715fd17d0f8df508->leave($__internal_849f71cf17c40a54c22e0306282fe1f66df8a3fd3caeddc4715fd17d0f8df508_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
