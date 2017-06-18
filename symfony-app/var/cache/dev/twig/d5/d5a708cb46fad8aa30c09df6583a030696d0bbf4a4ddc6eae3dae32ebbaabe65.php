<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_eb116fc09010850f8aa370700a07c9dbf97abe245a556f27e26037d6ad44268e extends Twig_Template
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
        $__internal_00320c3764caef780b0403f4d376f9896208867e576b69f27d55612f0a9aa8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00320c3764caef780b0403f4d376f9896208867e576b69f27d55612f0a9aa8c4->enter($__internal_00320c3764caef780b0403f4d376f9896208867e576b69f27d55612f0a9aa8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1e76e8415ba9b63dc398528dc9bd3db32455b43308a700fec36febd1573b3aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e76e8415ba9b63dc398528dc9bd3db32455b43308a700fec36febd1573b3aac->enter($__internal_1e76e8415ba9b63dc398528dc9bd3db32455b43308a700fec36febd1573b3aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_00320c3764caef780b0403f4d376f9896208867e576b69f27d55612f0a9aa8c4->leave($__internal_00320c3764caef780b0403f4d376f9896208867e576b69f27d55612f0a9aa8c4_prof);

        
        $__internal_1e76e8415ba9b63dc398528dc9bd3db32455b43308a700fec36febd1573b3aac->leave($__internal_1e76e8415ba9b63dc398528dc9bd3db32455b43308a700fec36febd1573b3aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
