<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c8f73b19b183f3495259860d8d8f38cc06c7d33b2bba126ef058712842991e4a extends Twig_Template
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
        $__internal_403cb99558e7b6f1e1ad742eaf5d599b7cbe2fa0a1f9f58721e70aa5a0c09873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403cb99558e7b6f1e1ad742eaf5d599b7cbe2fa0a1f9f58721e70aa5a0c09873->enter($__internal_403cb99558e7b6f1e1ad742eaf5d599b7cbe2fa0a1f9f58721e70aa5a0c09873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e7fc5970309edc944c4eee17afa38be1efdac909f3ba73039123f87f15a43932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fc5970309edc944c4eee17afa38be1efdac909f3ba73039123f87f15a43932->enter($__internal_e7fc5970309edc944c4eee17afa38be1efdac909f3ba73039123f87f15a43932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_403cb99558e7b6f1e1ad742eaf5d599b7cbe2fa0a1f9f58721e70aa5a0c09873->leave($__internal_403cb99558e7b6f1e1ad742eaf5d599b7cbe2fa0a1f9f58721e70aa5a0c09873_prof);

        
        $__internal_e7fc5970309edc944c4eee17afa38be1efdac909f3ba73039123f87f15a43932->leave($__internal_e7fc5970309edc944c4eee17afa38be1efdac909f3ba73039123f87f15a43932_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
