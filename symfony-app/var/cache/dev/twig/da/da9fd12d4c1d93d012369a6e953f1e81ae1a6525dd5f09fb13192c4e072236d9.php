<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cddbbc76b1466a16e0f4c4cb51c1d9003840ea3fdc1e17b1554716c8924b64d1 extends Twig_Template
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
        $__internal_b84b992d0965907f323d7839276f73407dece3c0fcac3bad3fa6dad1228ca881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84b992d0965907f323d7839276f73407dece3c0fcac3bad3fa6dad1228ca881->enter($__internal_b84b992d0965907f323d7839276f73407dece3c0fcac3bad3fa6dad1228ca881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_712d787bf19ecfbef55ef5af9bf99af0650ae34b4d4e8b4d0f4a4b4cc85c66a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712d787bf19ecfbef55ef5af9bf99af0650ae34b4d4e8b4d0f4a4b4cc85c66a1->enter($__internal_712d787bf19ecfbef55ef5af9bf99af0650ae34b4d4e8b4d0f4a4b4cc85c66a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b84b992d0965907f323d7839276f73407dece3c0fcac3bad3fa6dad1228ca881->leave($__internal_b84b992d0965907f323d7839276f73407dece3c0fcac3bad3fa6dad1228ca881_prof);

        
        $__internal_712d787bf19ecfbef55ef5af9bf99af0650ae34b4d4e8b4d0f4a4b4cc85c66a1->leave($__internal_712d787bf19ecfbef55ef5af9bf99af0650ae34b4d4e8b4d0f4a4b4cc85c66a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
