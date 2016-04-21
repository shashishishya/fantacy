<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_707a04ef6b2b90ac381ce42dc78da1c7fc66583be491629816180af18f9dfaec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_314df70ce0f8ae5056b522d88ae9665792bb84b2e0f8a0566dc84d978d01a9a1 = $this->env->getExtension("native_profiler");
        $__internal_314df70ce0f8ae5056b522d88ae9665792bb84b2e0f8a0566dc84d978d01a9a1->enter($__internal_314df70ce0f8ae5056b522d88ae9665792bb84b2e0f8a0566dc84d978d01a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314df70ce0f8ae5056b522d88ae9665792bb84b2e0f8a0566dc84d978d01a9a1->leave($__internal_314df70ce0f8ae5056b522d88ae9665792bb84b2e0f8a0566dc84d978d01a9a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e403afbc468e4e908418ffd6bd099591643d6fb13a799086ed74b62d35101ee8 = $this->env->getExtension("native_profiler");
        $__internal_e403afbc468e4e908418ffd6bd099591643d6fb13a799086ed74b62d35101ee8->enter($__internal_e403afbc468e4e908418ffd6bd099591643d6fb13a799086ed74b62d35101ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e403afbc468e4e908418ffd6bd099591643d6fb13a799086ed74b62d35101ee8->leave($__internal_e403afbc468e4e908418ffd6bd099591643d6fb13a799086ed74b62d35101ee8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e17d786d269673899f26c0508f14562cfc5afa68f8bbef45cde984aa53d10d5d = $this->env->getExtension("native_profiler");
        $__internal_e17d786d269673899f26c0508f14562cfc5afa68f8bbef45cde984aa53d10d5d->enter($__internal_e17d786d269673899f26c0508f14562cfc5afa68f8bbef45cde984aa53d10d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e17d786d269673899f26c0508f14562cfc5afa68f8bbef45cde984aa53d10d5d->leave($__internal_e17d786d269673899f26c0508f14562cfc5afa68f8bbef45cde984aa53d10d5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4c2490b3e4936e0f11fb4699c4da56d3dcf8e0d537c7fd881b22933b041ce9f = $this->env->getExtension("native_profiler");
        $__internal_a4c2490b3e4936e0f11fb4699c4da56d3dcf8e0d537c7fd881b22933b041ce9f->enter($__internal_a4c2490b3e4936e0f11fb4699c4da56d3dcf8e0d537c7fd881b22933b041ce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4c2490b3e4936e0f11fb4699c4da56d3dcf8e0d537c7fd881b22933b041ce9f->leave($__internal_a4c2490b3e4936e0f11fb4699c4da56d3dcf8e0d537c7fd881b22933b041ce9f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
