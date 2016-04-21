<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_12616a38d684237c0bc4b95ce3dc6a99a8cb3a3aaa21a3c9049aa59fe0bc4a6d extends Twig_Template
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
        $__internal_3d5374f3bdbf409565ab56195f097fa08d48e113756a84c8b9840674cdad5b25 = $this->env->getExtension("native_profiler");
        $__internal_3d5374f3bdbf409565ab56195f097fa08d48e113756a84c8b9840674cdad5b25->enter($__internal_3d5374f3bdbf409565ab56195f097fa08d48e113756a84c8b9840674cdad5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3d5374f3bdbf409565ab56195f097fa08d48e113756a84c8b9840674cdad5b25->leave($__internal_3d5374f3bdbf409565ab56195f097fa08d48e113756a84c8b9840674cdad5b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
