<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_31650f25cdd2d84d6bbe0b7ded2c1fae0d19fbe7ee9b3c65d8943afb0bdcc577 extends Twig_Template
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
        $__internal_6858df45b6eadbf134e57777fd1b958eaefccce88b71fb61654e2c305b4d9f08 = $this->env->getExtension("native_profiler");
        $__internal_6858df45b6eadbf134e57777fd1b958eaefccce88b71fb61654e2c305b4d9f08->enter($__internal_6858df45b6eadbf134e57777fd1b958eaefccce88b71fb61654e2c305b4d9f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6858df45b6eadbf134e57777fd1b958eaefccce88b71fb61654e2c305b4d9f08->leave($__internal_6858df45b6eadbf134e57777fd1b958eaefccce88b71fb61654e2c305b4d9f08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
