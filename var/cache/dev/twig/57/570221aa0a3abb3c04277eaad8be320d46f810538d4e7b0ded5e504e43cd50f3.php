<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0939d37466cb1bdf06f142f9294790eeacf808ed33d8fdbeeddfaad3b357bc50 extends Twig_Template
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
        $__internal_c0e9a88c0c50d500a7d17e20ff9e3510c5c76cbf4d55994e55b6c1abc9c9d7db = $this->env->getExtension("native_profiler");
        $__internal_c0e9a88c0c50d500a7d17e20ff9e3510c5c76cbf4d55994e55b6c1abc9c9d7db->enter($__internal_c0e9a88c0c50d500a7d17e20ff9e3510c5c76cbf4d55994e55b6c1abc9c9d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c0e9a88c0c50d500a7d17e20ff9e3510c5c76cbf4d55994e55b6c1abc9c9d7db->leave($__internal_c0e9a88c0c50d500a7d17e20ff9e3510c5c76cbf4d55994e55b6c1abc9c9d7db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
