<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_02e7dbaad08af995b048d0123620ba8e7c656a59c34979c32d59491833af7a4e extends Twig_Template
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
        $__internal_cb076a44fac7db510354824c0e882fd87e776b143fcd9d56d940a1d8920a0846 = $this->env->getExtension("native_profiler");
        $__internal_cb076a44fac7db510354824c0e882fd87e776b143fcd9d56d940a1d8920a0846->enter($__internal_cb076a44fac7db510354824c0e882fd87e776b143fcd9d56d940a1d8920a0846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cb076a44fac7db510354824c0e882fd87e776b143fcd9d56d940a1d8920a0846->leave($__internal_cb076a44fac7db510354824c0e882fd87e776b143fcd9d56d940a1d8920a0846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
