<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2347fc720e48f660611ad60782831b96a8e2660d8e6a1941b85c042a88c9a9df extends Twig_Template
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
        $__internal_1ea8e2aae2ef8a14f29a18933b7dd7f6a549c7969b4f216d4096eea39db949aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea8e2aae2ef8a14f29a18933b7dd7f6a549c7969b4f216d4096eea39db949aa->enter($__internal_1ea8e2aae2ef8a14f29a18933b7dd7f6a549c7969b4f216d4096eea39db949aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8130b4ff11ac6f3824089b9191311fc10a1b6464bea54c672657e9e92d07614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8130b4ff11ac6f3824089b9191311fc10a1b6464bea54c672657e9e92d07614e->enter($__internal_8130b4ff11ac6f3824089b9191311fc10a1b6464bea54c672657e9e92d07614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1ea8e2aae2ef8a14f29a18933b7dd7f6a549c7969b4f216d4096eea39db949aa->leave($__internal_1ea8e2aae2ef8a14f29a18933b7dd7f6a549c7969b4f216d4096eea39db949aa_prof);

        
        $__internal_8130b4ff11ac6f3824089b9191311fc10a1b6464bea54c672657e9e92d07614e->leave($__internal_8130b4ff11ac6f3824089b9191311fc10a1b6464bea54c672657e9e92d07614e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
