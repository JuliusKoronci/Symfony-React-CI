<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2a0ddbb5b70ff1494b7a9bb44c781d9c20219e72acee09a99d822905cd8136fa extends Twig_Template
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
        $__internal_500e5a6368f39ddc4152f2a920fa555ab404c20e4b08d945593bcdd7b030d573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500e5a6368f39ddc4152f2a920fa555ab404c20e4b08d945593bcdd7b030d573->enter($__internal_500e5a6368f39ddc4152f2a920fa555ab404c20e4b08d945593bcdd7b030d573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_93ac28c2a789f232248ca346b772e1ed75d998dadc4bc9ea515d8a81ace91d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ac28c2a789f232248ca346b772e1ed75d998dadc4bc9ea515d8a81ace91d26->enter($__internal_93ac28c2a789f232248ca346b772e1ed75d998dadc4bc9ea515d8a81ace91d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_500e5a6368f39ddc4152f2a920fa555ab404c20e4b08d945593bcdd7b030d573->leave($__internal_500e5a6368f39ddc4152f2a920fa555ab404c20e4b08d945593bcdd7b030d573_prof);

        
        $__internal_93ac28c2a789f232248ca346b772e1ed75d998dadc4bc9ea515d8a81ace91d26->leave($__internal_93ac28c2a789f232248ca346b772e1ed75d998dadc4bc9ea515d8a81ace91d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
