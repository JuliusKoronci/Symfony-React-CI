<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4423b91d5912573927227b582bf67f07a3807ae04100e3d0caf143a023da578d extends Twig_Template
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
        $__internal_11b3a12998de1910f992a1b341da3cd23766242282fc531fab22b8e03e2527ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b3a12998de1910f992a1b341da3cd23766242282fc531fab22b8e03e2527ee->enter($__internal_11b3a12998de1910f992a1b341da3cd23766242282fc531fab22b8e03e2527ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_11e5c4d132227c43bc19dc2a0bdf09057fa0eb3ab8045656286682900f06db70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e5c4d132227c43bc19dc2a0bdf09057fa0eb3ab8045656286682900f06db70->enter($__internal_11e5c4d132227c43bc19dc2a0bdf09057fa0eb3ab8045656286682900f06db70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_11b3a12998de1910f992a1b341da3cd23766242282fc531fab22b8e03e2527ee->leave($__internal_11b3a12998de1910f992a1b341da3cd23766242282fc531fab22b8e03e2527ee_prof);

        
        $__internal_11e5c4d132227c43bc19dc2a0bdf09057fa0eb3ab8045656286682900f06db70->leave($__internal_11e5c4d132227c43bc19dc2a0bdf09057fa0eb3ab8045656286682900f06db70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
