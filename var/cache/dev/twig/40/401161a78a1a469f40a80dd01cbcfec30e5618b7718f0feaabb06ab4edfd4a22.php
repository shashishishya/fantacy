<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8fd6b5b647c3cb6db1b24f62e1438c596cbabd12041ea65bd540106683649647 extends Twig_Template
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
        $__internal_399bc31873429d0367ab6ef9b62d0fa706d6daf7593d94d6b041780d4b2865df = $this->env->getExtension("native_profiler");
        $__internal_399bc31873429d0367ab6ef9b62d0fa706d6daf7593d94d6b041780d4b2865df->enter($__internal_399bc31873429d0367ab6ef9b62d0fa706d6daf7593d94d6b041780d4b2865df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_399bc31873429d0367ab6ef9b62d0fa706d6daf7593d94d6b041780d4b2865df->leave($__internal_399bc31873429d0367ab6ef9b62d0fa706d6daf7593d94d6b041780d4b2865df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
