<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6c363e2a4ab19a061b90ac71d90a57c7053cbc0c5a6594becce25d097497b996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_007e335e01d53f06360847ca0b1a32379d780d3281ae0d052c82a278a651ac57 = $this->env->getExtension("native_profiler");
        $__internal_007e335e01d53f06360847ca0b1a32379d780d3281ae0d052c82a278a651ac57->enter($__internal_007e335e01d53f06360847ca0b1a32379d780d3281ae0d052c82a278a651ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_007e335e01d53f06360847ca0b1a32379d780d3281ae0d052c82a278a651ac57->leave($__internal_007e335e01d53f06360847ca0b1a32379d780d3281ae0d052c82a278a651ac57_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7704c6d01d985f1ffffcbe1da79d28c3923478f2d6f342ba6cd1b3d792faeb73 = $this->env->getExtension("native_profiler");
        $__internal_7704c6d01d985f1ffffcbe1da79d28c3923478f2d6f342ba6cd1b3d792faeb73->enter($__internal_7704c6d01d985f1ffffcbe1da79d28c3923478f2d6f342ba6cd1b3d792faeb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7704c6d01d985f1ffffcbe1da79d28c3923478f2d6f342ba6cd1b3d792faeb73->leave($__internal_7704c6d01d985f1ffffcbe1da79d28c3923478f2d6f342ba6cd1b3d792faeb73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
