<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f9462ce5f20a018e5b24586573b1600bf2cb1aac745827f6cbf56379e9af33b2 extends Twig_Template
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
        $__internal_d5deffc31c1409429bc13f3631045e3943ea04eb3c91e92ee2f3ad1043466bc5 = $this->env->getExtension("native_profiler");
        $__internal_d5deffc31c1409429bc13f3631045e3943ea04eb3c91e92ee2f3ad1043466bc5->enter($__internal_d5deffc31c1409429bc13f3631045e3943ea04eb3c91e92ee2f3ad1043466bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d5deffc31c1409429bc13f3631045e3943ea04eb3c91e92ee2f3ad1043466bc5->leave($__internal_d5deffc31c1409429bc13f3631045e3943ea04eb3c91e92ee2f3ad1043466bc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
