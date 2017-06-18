<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_45ed02118dc8b1219a43b6254f746e5c0fe1f7c9d79b848ddf49a84f555400c1 extends Twig_Template
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
        $__internal_66c620ba18259369974c1a456fbc8b0ed33d4c97bf4afd0c9e44c2f6c4b27190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c620ba18259369974c1a456fbc8b0ed33d4c97bf4afd0c9e44c2f6c4b27190->enter($__internal_66c620ba18259369974c1a456fbc8b0ed33d4c97bf4afd0c9e44c2f6c4b27190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_071920d22587d5752b58011573528e07a48ff8c69f327023c82314334384d0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071920d22587d5752b58011573528e07a48ff8c69f327023c82314334384d0da->enter($__internal_071920d22587d5752b58011573528e07a48ff8c69f327023c82314334384d0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_66c620ba18259369974c1a456fbc8b0ed33d4c97bf4afd0c9e44c2f6c4b27190->leave($__internal_66c620ba18259369974c1a456fbc8b0ed33d4c97bf4afd0c9e44c2f6c4b27190_prof);

        
        $__internal_071920d22587d5752b58011573528e07a48ff8c69f327023c82314334384d0da->leave($__internal_071920d22587d5752b58011573528e07a48ff8c69f327023c82314334384d0da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
