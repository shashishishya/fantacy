<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fc339a724e853fa0a2a72ea0e8baf526e4e46eec77efa45d723c8dc3888476bc extends Twig_Template
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
        $__internal_360549d87bedbaf97bffd631124e9e93094e08567456c7e8824ae4d568ecc092 = $this->env->getExtension("native_profiler");
        $__internal_360549d87bedbaf97bffd631124e9e93094e08567456c7e8824ae4d568ecc092->enter($__internal_360549d87bedbaf97bffd631124e9e93094e08567456c7e8824ae4d568ecc092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_360549d87bedbaf97bffd631124e9e93094e08567456c7e8824ae4d568ecc092->leave($__internal_360549d87bedbaf97bffd631124e9e93094e08567456c7e8824ae4d568ecc092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
