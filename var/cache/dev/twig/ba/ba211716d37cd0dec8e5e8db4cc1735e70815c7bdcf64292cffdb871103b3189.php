<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fea4343af0e86a9510ebb03962297b3a0c810833e74e39f02e4c7c89161b0b31 extends Twig_Template
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
        $__internal_83ab67212a0fdb58bdcbf853790f48585bcd34b22a05d0d15ebd18615daab6e8 = $this->env->getExtension("native_profiler");
        $__internal_83ab67212a0fdb58bdcbf853790f48585bcd34b22a05d0d15ebd18615daab6e8->enter($__internal_83ab67212a0fdb58bdcbf853790f48585bcd34b22a05d0d15ebd18615daab6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_83ab67212a0fdb58bdcbf853790f48585bcd34b22a05d0d15ebd18615daab6e8->leave($__internal_83ab67212a0fdb58bdcbf853790f48585bcd34b22a05d0d15ebd18615daab6e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
