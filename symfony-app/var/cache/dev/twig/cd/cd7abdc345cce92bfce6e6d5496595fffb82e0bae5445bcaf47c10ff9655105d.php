<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_04dd8715e1d9d957de11481277d32c1ba9b6c095af932bd6a303c150564be67c extends Twig_Template
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
        $__internal_19533ca8ab8bb56f6e5f5d9229c99c93c82e36dba842cdfb34be4cecb6fa6ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19533ca8ab8bb56f6e5f5d9229c99c93c82e36dba842cdfb34be4cecb6fa6ee5->enter($__internal_19533ca8ab8bb56f6e5f5d9229c99c93c82e36dba842cdfb34be4cecb6fa6ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1aedd07f1139d2a30eaa710c3ad260dfbb8b75729749cd01a0a5aebc5d9a8b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aedd07f1139d2a30eaa710c3ad260dfbb8b75729749cd01a0a5aebc5d9a8b2e->enter($__internal_1aedd07f1139d2a30eaa710c3ad260dfbb8b75729749cd01a0a5aebc5d9a8b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_19533ca8ab8bb56f6e5f5d9229c99c93c82e36dba842cdfb34be4cecb6fa6ee5->leave($__internal_19533ca8ab8bb56f6e5f5d9229c99c93c82e36dba842cdfb34be4cecb6fa6ee5_prof);

        
        $__internal_1aedd07f1139d2a30eaa710c3ad260dfbb8b75729749cd01a0a5aebc5d9a8b2e->leave($__internal_1aedd07f1139d2a30eaa710c3ad260dfbb8b75729749cd01a0a5aebc5d9a8b2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
