<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_48c3dec861fd335076924abd8d5e1165c9562b163e349fd02f2089cbd69a5e23 extends Twig_Template
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
        $__internal_a5da7d21f9c4b283b066c8ecad357ba49f3ebe05924168a91e73e4c9580fb44c = $this->env->getExtension("native_profiler");
        $__internal_a5da7d21f9c4b283b066c8ecad357ba49f3ebe05924168a91e73e4c9580fb44c->enter($__internal_a5da7d21f9c4b283b066c8ecad357ba49f3ebe05924168a91e73e4c9580fb44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a5da7d21f9c4b283b066c8ecad357ba49f3ebe05924168a91e73e4c9580fb44c->leave($__internal_a5da7d21f9c4b283b066c8ecad357ba49f3ebe05924168a91e73e4c9580fb44c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
