<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.php */
class __TwigTemplate_46140705d938a2f65f8437da460c5a1d8c54970248208095d5540734a7a83401 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'rowcard' => [$this, 'block_rowcard'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.php", "login.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <?php if(\$_GET && \$_GET['login'] == 'failed'): ?>

    <div class=\"p-3\">

        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Error!</strong> The username/password provided is invalid.
        </div>

    </div>

    <?php endif; ?>



    <?php if(\$_GET && \$_GET['login'] == 'empty'): ?>

    <div class=\"p-3\">

        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Error!</strong> Mandatory Field in the form seems to be empty.
        </div>

    </div>
<?php endif; ?>
";
    }

    // line 32
    public function block_rowcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Login</h3>
        <h6 class=\"d-flex justify-content-center\">Login to your account</h6>
    </div>

    <hr/>

    <?php get_admin_template_part('form','login'); ?>


";
    }

    public function getTemplateName()
    {
        return "login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 32,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.php\" %}

{% block messages %}
    <?php if(\$_GET && \$_GET['login'] == 'failed'): ?>

    <div class=\"p-3\">

        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Error!</strong> The username/password provided is invalid.
        </div>

    </div>

    <?php endif; ?>



    <?php if(\$_GET && \$_GET['login'] == 'empty'): ?>

    <div class=\"p-3\">

        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Error!</strong> Mandatory Field in the form seems to be empty.
        </div>

    </div>
<?php endif; ?>
{% endblock %}

{% block rowcard %}

    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Login</h3>
        <h6 class=\"d-flex justify-content-center\">Login to your account</h6>
    </div>

    <hr/>

    <?php get_admin_template_part('form','login'); ?>


{% endblock %}



", "login.php", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/login.php");
    }
}
