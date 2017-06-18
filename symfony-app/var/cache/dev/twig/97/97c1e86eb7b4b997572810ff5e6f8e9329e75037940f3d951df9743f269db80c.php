<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1b73b48ca13159ccb3fb0f6729d4adb89861894162b8b0dca79088a6d6108235 extends Twig_Template
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
        $__internal_56671d7c6ee580a6aa70b99e200912f87f121e92a78cf2c076643ff67a92b1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56671d7c6ee580a6aa70b99e200912f87f121e92a78cf2c076643ff67a92b1ac->enter($__internal_56671d7c6ee580a6aa70b99e200912f87f121e92a78cf2c076643ff67a92b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f09e41aca6e94eca44b8bd9276dab5ce1f22398ce347c095e472e9a2fe3a7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e41aca6e94eca44b8bd9276dab5ce1f22398ce347c095e472e9a2fe3a7788->enter($__internal_f09e41aca6e94eca44b8bd9276dab5ce1f22398ce347c095e472e9a2fe3a7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_56671d7c6ee580a6aa70b99e200912f87f121e92a78cf2c076643ff67a92b1ac->leave($__internal_56671d7c6ee580a6aa70b99e200912f87f121e92a78cf2c076643ff67a92b1ac_prof);

        
        $__internal_f09e41aca6e94eca44b8bd9276dab5ce1f22398ce347c095e472e9a2fe3a7788->leave($__internal_f09e41aca6e94eca44b8bd9276dab5ce1f22398ce347c095e472e9a2fe3a7788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
