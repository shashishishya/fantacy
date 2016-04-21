<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6a67ebaae5a5e8a2017eec19e02e654c7f5f5dca956e005bd2b2964d231e2f3d extends Twig_Template
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
        $__internal_3dc9a4f021f11ca3559f0ce157803d9b95500ba32f89a5e1fcca508d567a8e89 = $this->env->getExtension("native_profiler");
        $__internal_3dc9a4f021f11ca3559f0ce157803d9b95500ba32f89a5e1fcca508d567a8e89->enter($__internal_3dc9a4f021f11ca3559f0ce157803d9b95500ba32f89a5e1fcca508d567a8e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3dc9a4f021f11ca3559f0ce157803d9b95500ba32f89a5e1fcca508d567a8e89->leave($__internal_3dc9a4f021f11ca3559f0ce157803d9b95500ba32f89a5e1fcca508d567a8e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
