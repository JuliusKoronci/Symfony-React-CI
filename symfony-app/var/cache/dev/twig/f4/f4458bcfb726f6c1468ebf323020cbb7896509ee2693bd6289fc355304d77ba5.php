<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d3dac1dc65590bd851a07f99a20adde7ea783d48fee5a4bdea4399d13d4d4520 extends Twig_Template
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
        $__internal_9b238a611907a9aa07212f0ff49426798f846fbe6cf69adf111d64510c561f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b238a611907a9aa07212f0ff49426798f846fbe6cf69adf111d64510c561f79->enter($__internal_9b238a611907a9aa07212f0ff49426798f846fbe6cf69adf111d64510c561f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_577e2d4e0a7901cd907986d838f80a7edd61ada46afa206120932c49348a2976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577e2d4e0a7901cd907986d838f80a7edd61ada46afa206120932c49348a2976->enter($__internal_577e2d4e0a7901cd907986d838f80a7edd61ada46afa206120932c49348a2976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b238a611907a9aa07212f0ff49426798f846fbe6cf69adf111d64510c561f79->leave($__internal_9b238a611907a9aa07212f0ff49426798f846fbe6cf69adf111d64510c561f79_prof);

        
        $__internal_577e2d4e0a7901cd907986d838f80a7edd61ada46afa206120932c49348a2976->leave($__internal_577e2d4e0a7901cd907986d838f80a7edd61ada46afa206120932c49348a2976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
