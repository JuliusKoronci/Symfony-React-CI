<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_471ed3cf4e7c4ac11d25279209d5f425e34c34c6fff65155648e027166462dd5 extends Twig_Template
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
        $__internal_3777f19388fbb244d04a4e5d24a90eaac2fd53e182b658e71c8677184e6a2f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3777f19388fbb244d04a4e5d24a90eaac2fd53e182b658e71c8677184e6a2f1b->enter($__internal_3777f19388fbb244d04a4e5d24a90eaac2fd53e182b658e71c8677184e6a2f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bf2d98f7107c376ff163b19720d4229ba61b8224437f763f5ddf01469b7bde4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2d98f7107c376ff163b19720d4229ba61b8224437f763f5ddf01469b7bde4b->enter($__internal_bf2d98f7107c376ff163b19720d4229ba61b8224437f763f5ddf01469b7bde4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3777f19388fbb244d04a4e5d24a90eaac2fd53e182b658e71c8677184e6a2f1b->leave($__internal_3777f19388fbb244d04a4e5d24a90eaac2fd53e182b658e71c8677184e6a2f1b_prof);

        
        $__internal_bf2d98f7107c376ff163b19720d4229ba61b8224437f763f5ddf01469b7bde4b->leave($__internal_bf2d98f7107c376ff163b19720d4229ba61b8224437f763f5ddf01469b7bde4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
