<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d1d6225f9787295ab5612947a57155c93775262a1100e4829e4e06a79812b3a9 extends Twig_Template
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
        $__internal_b88fa87633ce73a031c8e5abc973ee3f9db7155ac794148c016936053bb6a9bd = $this->env->getExtension("native_profiler");
        $__internal_b88fa87633ce73a031c8e5abc973ee3f9db7155ac794148c016936053bb6a9bd->enter($__internal_b88fa87633ce73a031c8e5abc973ee3f9db7155ac794148c016936053bb6a9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b88fa87633ce73a031c8e5abc973ee3f9db7155ac794148c016936053bb6a9bd->leave($__internal_b88fa87633ce73a031c8e5abc973ee3f9db7155ac794148c016936053bb6a9bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
