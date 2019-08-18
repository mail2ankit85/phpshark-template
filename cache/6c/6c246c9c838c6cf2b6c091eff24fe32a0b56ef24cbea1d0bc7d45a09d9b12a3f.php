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

/* form-login.html */
class __TwigTemplate_cdd39a3badf186837885f09cb4dd43610e79d305799ed6306875ad155aab6273 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form id=\"login-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\">
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">

                    <div class='form-group'>
                        <label class='form-label' for='username'>Username<span class=\"mandatory\">*</span>:</label>
                        <input id='username' type='text' name='username' class='form-control' />
                    </div>

                    <div class='form-group'>
                        <label class='form-label' for='password'>Password<span class=\"mandatory\">*</span>:</label>
                        <input id='password' type='password' name='password' class='form-control' />
                    </div>

                    <div class=\"form-group d-flex flex-column justify-content-between\">
                        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["forgot_url"] ?? null), "html", null, true);
        echo "\" class=\"align-self-center\">forgot password</a>
                        <label class=\"form-check-label align-self-center\">
                            <input class=\"myremember form-check-input\" name=\"rememberme\" type=\"checkbox\" value=\"forever\">
                            Remember me
                        </label>
                    </div>

                    <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div>  -->

                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"login\" />

                    <div class=\"form-group d-flex justify-content-center mt-3\">
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Login\">Login to your account</button>
                    </div>

                </div>
            </div>
        </div>

    </form>
";
    }

    public function getTemplateName()
    {
        return "form-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"login-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\">
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">

                    <div class='form-group'>
                        <label class='form-label' for='username'>Username<span class=\"mandatory\">*</span>:</label>
                        <input id='username' type='text' name='username' class='form-control' />
                    </div>

                    <div class='form-group'>
                        <label class='form-label' for='password'>Password<span class=\"mandatory\">*</span>:</label>
                        <input id='password' type='password' name='password' class='form-control' />
                    </div>

                    <div class=\"form-group d-flex flex-column justify-content-between\">
                        <a href=\"{{ forgot_url }}\" class=\"align-self-center\">forgot password</a>
                        <label class=\"form-check-label align-self-center\">
                            <input class=\"myremember form-check-input\" name=\"rememberme\" type=\"checkbox\" value=\"forever\">
                            Remember me
                        </label>
                    </div>

                    <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div>  -->

                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"login\" />

                    <div class=\"form-group d-flex justify-content-center mt-3\">
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Login\">Login to your account</button>
                    </div>

                </div>
            </div>
        </div>

    </form>
", "form-login.html", "/Applications/MAMP/htdocs/new/crs/wp-content/plugins/phpshark-template/public/partials/form-login.html");
    }
}
