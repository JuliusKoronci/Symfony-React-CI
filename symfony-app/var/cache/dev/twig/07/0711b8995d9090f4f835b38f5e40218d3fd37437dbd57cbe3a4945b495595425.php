<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_53158d5a815c0e650a0251e7a657a83e340f5191b30c4f3343a2cc8576ffefe9 extends Twig_Template
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
        $__internal_0ceb014cb8454a75513d9a51f34a309bf32f1226a1eaa4e9ca9b929229e8ffe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ceb014cb8454a75513d9a51f34a309bf32f1226a1eaa4e9ca9b929229e8ffe3->enter($__internal_0ceb014cb8454a75513d9a51f34a309bf32f1226a1eaa4e9ca9b929229e8ffe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4a60ac95d9e81bfbf0cf6b64dd7b53e0166a30fc53c0eb64863ae9b3d9a20588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a60ac95d9e81bfbf0cf6b64dd7b53e0166a30fc53c0eb64863ae9b3d9a20588->enter($__internal_4a60ac95d9e81bfbf0cf6b64dd7b53e0166a30fc53c0eb64863ae9b3d9a20588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0ceb014cb8454a75513d9a51f34a309bf32f1226a1eaa4e9ca9b929229e8ffe3->leave($__internal_0ceb014cb8454a75513d9a51f34a309bf32f1226a1eaa4e9ca9b929229e8ffe3_prof);

        
        $__internal_4a60ac95d9e81bfbf0cf6b64dd7b53e0166a30fc53c0eb64863ae9b3d9a20588->leave($__internal_4a60ac95d9e81bfbf0cf6b64dd7b53e0166a30fc53c0eb64863ae9b3d9a20588_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
