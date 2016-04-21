<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13601fd9471fdd799e7cec9db8930b09370cf8dc9b591dbaa2f8896e1d8d2f50 extends Twig_Template
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
        $__internal_77ee3c479191a630d70767075bbe6554c7a13e0664faed5587351e1c8aab051f = $this->env->getExtension("native_profiler");
        $__internal_77ee3c479191a630d70767075bbe6554c7a13e0664faed5587351e1c8aab051f->enter($__internal_77ee3c479191a630d70767075bbe6554c7a13e0664faed5587351e1c8aab051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_77ee3c479191a630d70767075bbe6554c7a13e0664faed5587351e1c8aab051f->leave($__internal_77ee3c479191a630d70767075bbe6554c7a13e0664faed5587351e1c8aab051f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
