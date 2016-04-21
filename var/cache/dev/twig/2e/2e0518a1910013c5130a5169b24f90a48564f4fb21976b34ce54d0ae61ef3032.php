<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_44f844a04067fbd090570868616e581cf87c9031edf99b75d98eca11577af473 extends Twig_Template
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
        $__internal_33bf4f724050f7ec928516ed02f5087cd16f18e28c65f7e9254f72adf19ab501 = $this->env->getExtension("native_profiler");
        $__internal_33bf4f724050f7ec928516ed02f5087cd16f18e28c65f7e9254f72adf19ab501->enter($__internal_33bf4f724050f7ec928516ed02f5087cd16f18e28c65f7e9254f72adf19ab501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_33bf4f724050f7ec928516ed02f5087cd16f18e28c65f7e9254f72adf19ab501->leave($__internal_33bf4f724050f7ec928516ed02f5087cd16f18e28c65f7e9254f72adf19ab501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
