<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b93d72f70b337b2a5f45b27186773a067934b9ed07ea309ccf55927d6ca2c889 extends Twig_Template
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
        $__internal_9deb10fc91136a0fca13953eadbdceacf1d59bad0b2d732489be4ae1a31300e8 = $this->env->getExtension("native_profiler");
        $__internal_9deb10fc91136a0fca13953eadbdceacf1d59bad0b2d732489be4ae1a31300e8->enter($__internal_9deb10fc91136a0fca13953eadbdceacf1d59bad0b2d732489be4ae1a31300e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9deb10fc91136a0fca13953eadbdceacf1d59bad0b2d732489be4ae1a31300e8->leave($__internal_9deb10fc91136a0fca13953eadbdceacf1d59bad0b2d732489be4ae1a31300e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
