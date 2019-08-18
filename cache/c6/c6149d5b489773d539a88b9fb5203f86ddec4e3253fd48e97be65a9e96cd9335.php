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

/* form-reset-2.html */
class __TwigTemplate_29adb16188db221e8a6c5ff7568b41a81f230f3163de606d3b9ec4df0c4f7440 extends \Twig\Template
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
        echo "<form id=\"member-reset-form\" method=\"post\" action=\"\">

    <div class=\"form-body my-3 p-2\"> 
        <div class=\"form-row\">
            <div class=\"col-md-6 offset-md-3\">       

            <div class='form-group'>
                    <label class='form-label' for='old-password'>Old Password<span class=\"mandatory\">*</span>:</label>
                    <input id='old-password' type='password' name='old-password' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='password'>New Password<span class=\"mandatory\">*</span>:</label>
                    <input id='password' type='password' name='password' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='repeat-password'>Repeat Password<span class=\"mandatory\">*</span>:</label>
                    <input id='repeat-password' type='password' name='repeat-password' class='form-control' />
                </div>

                <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                    <div id=\"g-recaptcha\"></div>
                </div> -->

                <input class=\"d-none\" name=\"form\" type=\"text\" value=\"reset-2\" />

                <div class=\"form-group d-flex justify-content-center mt-5\">    
                    <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Reset your password</button>
                </div>
            </div>
        </div>
    </div>

</form> ";
    }

    public function getTemplateName()
    {
        return "form-reset-2.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"member-reset-form\" method=\"post\" action=\"\">

    <div class=\"form-body my-3 p-2\"> 
        <div class=\"form-row\">
            <div class=\"col-md-6 offset-md-3\">       

            <div class='form-group'>
                    <label class='form-label' for='old-password'>Old Password<span class=\"mandatory\">*</span>:</label>
                    <input id='old-password' type='password' name='old-password' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='password'>New Password<span class=\"mandatory\">*</span>:</label>
                    <input id='password' type='password' name='password' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='repeat-password'>Repeat Password<span class=\"mandatory\">*</span>:</label>
                    <input id='repeat-password' type='password' name='repeat-password' class='form-control' />
                </div>

                <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                    <div id=\"g-recaptcha\"></div>
                </div> -->

                <input class=\"d-none\" name=\"form\" type=\"text\" value=\"reset-2\" />

                <div class=\"form-group d-flex justify-content-center mt-5\">    
                    <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Reset your password</button>
                </div>
            </div>
        </div>
    </div>

</form> ", "form-reset-2.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/form-reset-2.html");
    }
}
