<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5434073aa23978f65c9d6e4620677420c54500585e89a36128f4096cc67e372d extends Twig_Template
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
        $__internal_8cedee4ca207080210869b1ce107b171af43ecbf4605c964adf38ee0fa546b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cedee4ca207080210869b1ce107b171af43ecbf4605c964adf38ee0fa546b0d->enter($__internal_8cedee4ca207080210869b1ce107b171af43ecbf4605c964adf38ee0fa546b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ff64c88e7d32b29ca0763f3ef611114d950975757e04dd21fadaeefdf93b7317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff64c88e7d32b29ca0763f3ef611114d950975757e04dd21fadaeefdf93b7317->enter($__internal_ff64c88e7d32b29ca0763f3ef611114d950975757e04dd21fadaeefdf93b7317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8cedee4ca207080210869b1ce107b171af43ecbf4605c964adf38ee0fa546b0d->leave($__internal_8cedee4ca207080210869b1ce107b171af43ecbf4605c964adf38ee0fa546b0d_prof);

        
        $__internal_ff64c88e7d32b29ca0763f3ef611114d950975757e04dd21fadaeefdf93b7317->leave($__internal_ff64c88e7d32b29ca0763f3ef611114d950975757e04dd21fadaeefdf93b7317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
