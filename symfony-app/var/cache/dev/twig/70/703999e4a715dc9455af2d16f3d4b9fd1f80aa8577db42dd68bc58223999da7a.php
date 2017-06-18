<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_c54225cf1ee086aeb7044a641f23f04e21ee412b02559d3a31093db16e057a29 extends Twig_Template
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
        $__internal_8555722f3927da02ad400c7a5fbd944b05673ee2c0f1ba42747797461f4e578c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8555722f3927da02ad400c7a5fbd944b05673ee2c0f1ba42747797461f4e578c->enter($__internal_8555722f3927da02ad400c7a5fbd944b05673ee2c0f1ba42747797461f4e578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_4b6f8ec8113ee26ac617f4783fd360a5ddba5e36d374eaffeb502b1465cd3485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6f8ec8113ee26ac617f4783fd360a5ddba5e36d374eaffeb502b1465cd3485->enter($__internal_4b6f8ec8113ee26ac617f4783fd360a5ddba5e36d374eaffeb502b1465cd3485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_8555722f3927da02ad400c7a5fbd944b05673ee2c0f1ba42747797461f4e578c->leave($__internal_8555722f3927da02ad400c7a5fbd944b05673ee2c0f1ba42747797461f4e578c_prof);

        
        $__internal_4b6f8ec8113ee26ac617f4783fd360a5ddba5e36d374eaffeb502b1465cd3485->leave($__internal_4b6f8ec8113ee26ac617f4783fd360a5ddba5e36d374eaffeb502b1465cd3485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
