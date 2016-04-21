<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_72de8b715cf3159919b5aae8157c5c5b95da16f9b5e753cad721e465b0975e4f extends Twig_Template
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
        $__internal_5c66d111bba2f02fdc3822a622054bfe85dec1968536c915dee9ba101f63ea36 = $this->env->getExtension("native_profiler");
        $__internal_5c66d111bba2f02fdc3822a622054bfe85dec1968536c915dee9ba101f63ea36->enter($__internal_5c66d111bba2f02fdc3822a622054bfe85dec1968536c915dee9ba101f63ea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5c66d111bba2f02fdc3822a622054bfe85dec1968536c915dee9ba101f63ea36->leave($__internal_5c66d111bba2f02fdc3822a622054bfe85dec1968536c915dee9ba101f63ea36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
