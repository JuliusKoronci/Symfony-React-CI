<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5c40d88f9aee593e14862b4578139699373e1e209fdb561292d698a4c963e370 extends Twig_Template
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
        $__internal_0eb73bbf60100f64918189df54608f120ab5333951179d31a43260299c389912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb73bbf60100f64918189df54608f120ab5333951179d31a43260299c389912->enter($__internal_0eb73bbf60100f64918189df54608f120ab5333951179d31a43260299c389912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_36baa49bf8757d3c9b7aaee3083c75dca4488274949eff8af748afa96511a81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36baa49bf8757d3c9b7aaee3083c75dca4488274949eff8af748afa96511a81e->enter($__internal_36baa49bf8757d3c9b7aaee3083c75dca4488274949eff8af748afa96511a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0eb73bbf60100f64918189df54608f120ab5333951179d31a43260299c389912->leave($__internal_0eb73bbf60100f64918189df54608f120ab5333951179d31a43260299c389912_prof);

        
        $__internal_36baa49bf8757d3c9b7aaee3083c75dca4488274949eff8af748afa96511a81e->leave($__internal_36baa49bf8757d3c9b7aaee3083c75dca4488274949eff8af748afa96511a81e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
