<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1b63bebc82fe6fc41ba0914cfc9970f23f9c14a984ad6d83bd8f28d3cd75443f extends Twig_Template
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
        $__internal_8f01612ea448e1846a2d7debdb97a7563bd3227f7bd2eaccd8d1fcb9610ceb00 = $this->env->getExtension("native_profiler");
        $__internal_8f01612ea448e1846a2d7debdb97a7563bd3227f7bd2eaccd8d1fcb9610ceb00->enter($__internal_8f01612ea448e1846a2d7debdb97a7563bd3227f7bd2eaccd8d1fcb9610ceb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8f01612ea448e1846a2d7debdb97a7563bd3227f7bd2eaccd8d1fcb9610ceb00->leave($__internal_8f01612ea448e1846a2d7debdb97a7563bd3227f7bd2eaccd8d1fcb9610ceb00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
