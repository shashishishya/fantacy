<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e166d93fcdf5b0befabc69dcd4a55edf6ad81cd56a061c3d949da6c8f5e2de9b extends Twig_Template
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
        $__internal_4252e358e4607b1446f4ca404c6e49850df99b09afb56a2a9925a69a3e5d13d3 = $this->env->getExtension("native_profiler");
        $__internal_4252e358e4607b1446f4ca404c6e49850df99b09afb56a2a9925a69a3e5d13d3->enter($__internal_4252e358e4607b1446f4ca404c6e49850df99b09afb56a2a9925a69a3e5d13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4252e358e4607b1446f4ca404c6e49850df99b09afb56a2a9925a69a3e5d13d3->leave($__internal_4252e358e4607b1446f4ca404c6e49850df99b09afb56a2a9925a69a3e5d13d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
