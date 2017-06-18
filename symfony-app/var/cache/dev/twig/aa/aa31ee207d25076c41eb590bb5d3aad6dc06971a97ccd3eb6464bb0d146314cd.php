<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_909ca202d6bf6ef1fceb73318adb11854864d1aae30a33ed44cab250d62a4ddb extends Twig_Template
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
        $__internal_26d05620ac4f1280728f31c4dcf2beababf614d37e4261f07e3d4de24d5e8858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d05620ac4f1280728f31c4dcf2beababf614d37e4261f07e3d4de24d5e8858->enter($__internal_26d05620ac4f1280728f31c4dcf2beababf614d37e4261f07e3d4de24d5e8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_aeebce121a91f51cb1e7879bc3e8b2e8a57ced93bb65111976247fdd454a5b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeebce121a91f51cb1e7879bc3e8b2e8a57ced93bb65111976247fdd454a5b3c->enter($__internal_aeebce121a91f51cb1e7879bc3e8b2e8a57ced93bb65111976247fdd454a5b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_26d05620ac4f1280728f31c4dcf2beababf614d37e4261f07e3d4de24d5e8858->leave($__internal_26d05620ac4f1280728f31c4dcf2beababf614d37e4261f07e3d4de24d5e8858_prof);

        
        $__internal_aeebce121a91f51cb1e7879bc3e8b2e8a57ced93bb65111976247fdd454a5b3c->leave($__internal_aeebce121a91f51cb1e7879bc3e8b2e8a57ced93bb65111976247fdd454a5b3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
