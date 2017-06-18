<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1403704a9e7f5a5ffc670746569a0f63cc4c464b41dbcb6cadb50fb82e42bf37 extends Twig_Template
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
        $__internal_0216665eb7e7c44a23c612586a8b9217f5fe688643b758e3895e839ee6f8a390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0216665eb7e7c44a23c612586a8b9217f5fe688643b758e3895e839ee6f8a390->enter($__internal_0216665eb7e7c44a23c612586a8b9217f5fe688643b758e3895e839ee6f8a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a0891cfc4b7a0eee0971f15e22ec6d55ed558e1a265860e8db0a804e598be596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0891cfc4b7a0eee0971f15e22ec6d55ed558e1a265860e8db0a804e598be596->enter($__internal_a0891cfc4b7a0eee0971f15e22ec6d55ed558e1a265860e8db0a804e598be596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0216665eb7e7c44a23c612586a8b9217f5fe688643b758e3895e839ee6f8a390->leave($__internal_0216665eb7e7c44a23c612586a8b9217f5fe688643b758e3895e839ee6f8a390_prof);

        
        $__internal_a0891cfc4b7a0eee0971f15e22ec6d55ed558e1a265860e8db0a804e598be596->leave($__internal_a0891cfc4b7a0eee0971f15e22ec6d55ed558e1a265860e8db0a804e598be596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
