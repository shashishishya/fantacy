<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d46080110e31d0317e36e3a9ace13c30735d3e7eeeb0ec8c5ce443f218e7e76c extends Twig_Template
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
        $__internal_fac0c2ca90e615aa2fd509f084908dfda19cc076d6f545bda9b0f966651d8f16 = $this->env->getExtension("native_profiler");
        $__internal_fac0c2ca90e615aa2fd509f084908dfda19cc076d6f545bda9b0f966651d8f16->enter($__internal_fac0c2ca90e615aa2fd509f084908dfda19cc076d6f545bda9b0f966651d8f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fac0c2ca90e615aa2fd509f084908dfda19cc076d6f545bda9b0f966651d8f16->leave($__internal_fac0c2ca90e615aa2fd509f084908dfda19cc076d6f545bda9b0f966651d8f16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
