<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_115c00d33459eecb06f663d487ca8e6167364f7af5a2be4e8c6e35a0757670dd extends Twig_Template
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
        $__internal_cff4e381f37050fc07292f16073f6c1d40d35016701cd85750cde2ceffee19fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff4e381f37050fc07292f16073f6c1d40d35016701cd85750cde2ceffee19fa->enter($__internal_cff4e381f37050fc07292f16073f6c1d40d35016701cd85750cde2ceffee19fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6cf5a44304bafb737036a9f3cd3a374a5de87b34438984d3a73a8efd0af83a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf5a44304bafb737036a9f3cd3a374a5de87b34438984d3a73a8efd0af83a59->enter($__internal_6cf5a44304bafb737036a9f3cd3a374a5de87b34438984d3a73a8efd0af83a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cff4e381f37050fc07292f16073f6c1d40d35016701cd85750cde2ceffee19fa->leave($__internal_cff4e381f37050fc07292f16073f6c1d40d35016701cd85750cde2ceffee19fa_prof);

        
        $__internal_6cf5a44304bafb737036a9f3cd3a374a5de87b34438984d3a73a8efd0af83a59->leave($__internal_6cf5a44304bafb737036a9f3cd3a374a5de87b34438984d3a73a8efd0af83a59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
