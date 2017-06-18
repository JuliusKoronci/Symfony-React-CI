<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f4b2fcdfc8a156345061b8855ef9152ab63191538dce1e569379d40df7f0a999 extends Twig_Template
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
        $__internal_06dba4baa915a3995c7eeca296c2afa121211a52c2b2311092c4e03717c9f00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dba4baa915a3995c7eeca296c2afa121211a52c2b2311092c4e03717c9f00c->enter($__internal_06dba4baa915a3995c7eeca296c2afa121211a52c2b2311092c4e03717c9f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_76498fea0067b8090414f21ed9cdd779f9d800a9f128b68d83db3d82ee8c6a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76498fea0067b8090414f21ed9cdd779f9d800a9f128b68d83db3d82ee8c6a2c->enter($__internal_76498fea0067b8090414f21ed9cdd779f9d800a9f128b68d83db3d82ee8c6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_06dba4baa915a3995c7eeca296c2afa121211a52c2b2311092c4e03717c9f00c->leave($__internal_06dba4baa915a3995c7eeca296c2afa121211a52c2b2311092c4e03717c9f00c_prof);

        
        $__internal_76498fea0067b8090414f21ed9cdd779f9d800a9f128b68d83db3d82ee8c6a2c->leave($__internal_76498fea0067b8090414f21ed9cdd779f9d800a9f128b68d83db3d82ee8c6a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
