<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e7c50f8b64cc4b60597d6704cdce684320830c4b1a5684cece47e7da1797b64b extends Twig_Template
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
        $__internal_fe0c5f649f7c58f5792a5fef5a796c576e9597950c12148790fc6c081f7c1d93 = $this->env->getExtension("native_profiler");
        $__internal_fe0c5f649f7c58f5792a5fef5a796c576e9597950c12148790fc6c081f7c1d93->enter($__internal_fe0c5f649f7c58f5792a5fef5a796c576e9597950c12148790fc6c081f7c1d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fe0c5f649f7c58f5792a5fef5a796c576e9597950c12148790fc6c081f7c1d93->leave($__internal_fe0c5f649f7c58f5792a5fef5a796c576e9597950c12148790fc6c081f7c1d93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
