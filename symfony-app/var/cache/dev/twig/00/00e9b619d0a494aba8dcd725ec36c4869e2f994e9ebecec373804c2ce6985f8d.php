<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_015d543a12b67a5284d65876306ad886c9c05d3a4d16b8f41fbef9f2f1450b06 extends Twig_Template
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
        $__internal_f4764872d2a8402f1e253d28cf035f838597291f34d202f929d9d5abf031e2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4764872d2a8402f1e253d28cf035f838597291f34d202f929d9d5abf031e2f3->enter($__internal_f4764872d2a8402f1e253d28cf035f838597291f34d202f929d9d5abf031e2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_66c9082b00b9c3f52b720489a38dce4c59066d262946363dde27de226fe20d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c9082b00b9c3f52b720489a38dce4c59066d262946363dde27de226fe20d44->enter($__internal_66c9082b00b9c3f52b720489a38dce4c59066d262946363dde27de226fe20d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f4764872d2a8402f1e253d28cf035f838597291f34d202f929d9d5abf031e2f3->leave($__internal_f4764872d2a8402f1e253d28cf035f838597291f34d202f929d9d5abf031e2f3_prof);

        
        $__internal_66c9082b00b9c3f52b720489a38dce4c59066d262946363dde27de226fe20d44->leave($__internal_66c9082b00b9c3f52b720489a38dce4c59066d262946363dde27de226fe20d44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
