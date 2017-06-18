<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_92e5bc07c33dfeaacacc67d399f88a45bfd58898ccdef840f98ea4c789594fb5 extends Twig_Template
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
        $__internal_2408582190ff8f5f75ed94671efca9b332ffacc7faf255de561556addc848eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2408582190ff8f5f75ed94671efca9b332ffacc7faf255de561556addc848eda->enter($__internal_2408582190ff8f5f75ed94671efca9b332ffacc7faf255de561556addc848eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_66f8297b9a597ae100195891937f5a3c6d575f72fe1edf43916a15b36a77334c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f8297b9a597ae100195891937f5a3c6d575f72fe1edf43916a15b36a77334c->enter($__internal_66f8297b9a597ae100195891937f5a3c6d575f72fe1edf43916a15b36a77334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2408582190ff8f5f75ed94671efca9b332ffacc7faf255de561556addc848eda->leave($__internal_2408582190ff8f5f75ed94671efca9b332ffacc7faf255de561556addc848eda_prof);

        
        $__internal_66f8297b9a597ae100195891937f5a3c6d575f72fe1edf43916a15b36a77334c->leave($__internal_66f8297b9a597ae100195891937f5a3c6d575f72fe1edf43916a15b36a77334c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
