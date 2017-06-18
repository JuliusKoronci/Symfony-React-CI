<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_efe1d46556aef4f9c26eb7828015e9bbea6ed5090db6153730dfd8751c4bbee5 extends Twig_Template
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
        $__internal_4f15821118817ec762058c31aa76f963dfba45ed88dae2377cc852c8d5f8fe49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f15821118817ec762058c31aa76f963dfba45ed88dae2377cc852c8d5f8fe49->enter($__internal_4f15821118817ec762058c31aa76f963dfba45ed88dae2377cc852c8d5f8fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5f0bd87017c9257757d5821ecd8c1bcfb2e4619e3f2b52808e19aab525fb0ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0bd87017c9257757d5821ecd8c1bcfb2e4619e3f2b52808e19aab525fb0ab6->enter($__internal_5f0bd87017c9257757d5821ecd8c1bcfb2e4619e3f2b52808e19aab525fb0ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4f15821118817ec762058c31aa76f963dfba45ed88dae2377cc852c8d5f8fe49->leave($__internal_4f15821118817ec762058c31aa76f963dfba45ed88dae2377cc852c8d5f8fe49_prof);

        
        $__internal_5f0bd87017c9257757d5821ecd8c1bcfb2e4619e3f2b52808e19aab525fb0ab6->leave($__internal_5f0bd87017c9257757d5821ecd8c1bcfb2e4619e3f2b52808e19aab525fb0ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
