<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bdb406fcfc19867584887997c03278c65aa9fe64f7c2660a6822a33a72907f4c extends Twig_Template
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
        $__internal_1b09a70fcf7accf436574684f51312cfaaec9187b72c8ae44aeb16d7c74a9f10 = $this->env->getExtension("native_profiler");
        $__internal_1b09a70fcf7accf436574684f51312cfaaec9187b72c8ae44aeb16d7c74a9f10->enter($__internal_1b09a70fcf7accf436574684f51312cfaaec9187b72c8ae44aeb16d7c74a9f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1b09a70fcf7accf436574684f51312cfaaec9187b72c8ae44aeb16d7c74a9f10->leave($__internal_1b09a70fcf7accf436574684f51312cfaaec9187b72c8ae44aeb16d7c74a9f10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
