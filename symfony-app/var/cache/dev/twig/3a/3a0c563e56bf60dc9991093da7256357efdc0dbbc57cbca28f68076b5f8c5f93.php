<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9bd62f4da47ac465fd5984a00afe34a8197ba6f250c5d81317c49b4c5c6c5be9 extends Twig_Template
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
        $__internal_05c6a079e119ec6e2cae7f14371a1e4c016476698c4f60813b7580fe65a48fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c6a079e119ec6e2cae7f14371a1e4c016476698c4f60813b7580fe65a48fef->enter($__internal_05c6a079e119ec6e2cae7f14371a1e4c016476698c4f60813b7580fe65a48fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_115462821fcb415fe4587b3b71af1002652265c6486ead28f48963b66c560181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115462821fcb415fe4587b3b71af1002652265c6486ead28f48963b66c560181->enter($__internal_115462821fcb415fe4587b3b71af1002652265c6486ead28f48963b66c560181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_05c6a079e119ec6e2cae7f14371a1e4c016476698c4f60813b7580fe65a48fef->leave($__internal_05c6a079e119ec6e2cae7f14371a1e4c016476698c4f60813b7580fe65a48fef_prof);

        
        $__internal_115462821fcb415fe4587b3b71af1002652265c6486ead28f48963b66c560181->leave($__internal_115462821fcb415fe4587b3b71af1002652265c6486ead28f48963b66c560181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
