<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_749e8271bc3769aa62e9c7d3b8b92a1190eac6101e475cea3790e3ff20547e7f extends Twig_Template
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
        $__internal_b85a94a61d80300059c8fbd4ba55931bcaa04c98d985b8624279e807b5276058 = $this->env->getExtension("native_profiler");
        $__internal_b85a94a61d80300059c8fbd4ba55931bcaa04c98d985b8624279e807b5276058->enter($__internal_b85a94a61d80300059c8fbd4ba55931bcaa04c98d985b8624279e807b5276058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b85a94a61d80300059c8fbd4ba55931bcaa04c98d985b8624279e807b5276058->leave($__internal_b85a94a61d80300059c8fbd4ba55931bcaa04c98d985b8624279e807b5276058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
