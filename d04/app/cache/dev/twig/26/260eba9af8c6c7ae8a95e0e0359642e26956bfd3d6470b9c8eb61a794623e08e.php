<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E01Bundle:symfony2cheatsheet:testing.html.twig */
class __TwigTemplate_be0ca4d1928a15c31990afe6914a3338d0e81875db30ade94afff3924b4447cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "E01Bundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "E01Bundle:symfony2cheatsheet:testing.html.twig"));

        $this->parent = $this->loadTemplate("E01Bundle:Default:base.html.twig", "E01Bundle:symfony2cheatsheet:testing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <p>Symfony2 works with PHPUnit 3.5.11 or later, though version 3.6.4 is needed to test the Symfony
        core code itself.</p>

";
        // line 8
        echo "<pre><code># specify the configuration directory on the command line
    \$ phpunit -c app/
</code></pre>";
        echo "

    <h3>Unit tests</h3>

    <p>Writing Symfony2 unit tests is no different than writing standard PHPUnit unit tests. Suppose, for
        example, that you have an incredibly simple class called Calculator in the Utility/ directory of your
        bundle:</p>

";
        // line 32
        echo "<pre><code>// src/Acme/DemoBundle/Tests/Utility/CalculatorTest.php
namespace Acme\\DemoBundle\\Tests\\Utility;

use Acme\\DemoBundle\\Utility\\Calculator;

class CalculatorTest extends \\PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        \$calc = new Calculator();
        \$result = \$calc-&gt;add(30, 12);

        // assert that our calculator added the numbers correctly!
        \$this-&gt;assertEquals(42, \$result);
    }
}
</code></pre>";
        echo "

    <p>By convention, the Tests/ sub-directory should replicate the directory of your bundle. So, if you're
        testing a class in your bundle's Utility/ directory, put the test in the Tests/Utility/ directory.</p>

    <p>Running tests for a given file or directory is also very easy:</p>

";
        // line 47
        echo "<pre><code># run all tests in the Utility directory
\$ phpunit -c app src/Acme/DemoBundle/Tests/Utility/

# run tests for the Calculator class
\$ phpunit -c app src/Acme/DemoBundle/Tests/Utility/CalculatorTest.php

# run all tests for the entire Bundle
\$ phpunit -c app src/Acme/DemoBundle/
</code></pre>";
        echo "

    <h3>Functional Tests</h3>

    <p>They are no different from unit tests as far as PHPUnit is concerned, but they have a very specific
        workflow:</p>

    <ul>
        <li>Make a request;</li>
        <li>Test the response;</li>
        <li>Click on a link or submit a form;</li>
        <li>Test the response;</li>
        <li>Rinse and repeat.</li>
    </ul>
    <p>Symfony 2 provides a simple functional test for its DemoController as follows:</p>

";
        // line 77
        echo "<pre><code>// src/Acme/DemoBundle/Tests/Controller/DemoControllerTest.php
namespace Acme\\DemoBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        \$client = static::createClient();
        \$crawler = \$client-&gt;request('GET', '/demo/hello/Fabien');
        \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('html:contains(\"Hello Fabien\")')-&gt;count());
    }
}
</code></pre>";
        echo "


    <div class=\"row\">

        <div class=\"span6\">
    <p>The createClient() method returns a client, which is like a browser that you'll use to crawl your site:</p>

    <p>The request() method returns a Crawler object which can be used to select elements in the Response, click on links, and submit forms.</p>

    <ul>
        <li>
            <p>Click on a link:</p>
";
        // line 92
        echo "<pre><code>\$link = \$crawler-&gt;filter('a:contains(\"Greet\")')-&gt;eq(1)-&gt;link();
\$crawler = \$client-&gt;click(\$link);
</code></pre>";
        echo "
        </li>

        </div>

        <div class=\"span6\">
        <li>
            <p>Submit a form:</p>

";
        // line 109
        echo "<pre><code>\$form = \$crawler-&gt;selectButton('submit')-&gt;form();

// set some values
\$form['name'] = 'Lucas';
\$form['form_name[subject]'] = 'Hey there!';

// submit the form
\$crawler = \$client-&gt;submit(\$form);
</code></pre>";
        echo "
        </li>
        <li>

        </div>

    </div>

            <p>Assertions:</p>


    <div class=\"row\">

        <div class=\"span6\">
            <p><strong>Assert that the response matches a given CSS selector.</strong></p>

";
        // line 126
        echo "<pre><code> \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('h1')-&gt;count());
</code></pre>";
        echo "

            <p><strong>Check content text</strong></p>

";
        // line 131
        echo "<pre><code> \$this-&gt;assertRegExp('/Hello Fabien/', \$client-&gt;getResponse()-&gt;getContent());
</code></pre>";
        echo "

            <p><strong>Assert that there is more than one h2 tag with the class \"subtitle\"</strong></p>

";
        // line 136
        echo "<pre><code> \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('h2.subtitle')-&gt;count());
</code></pre>";
        echo "

            <p><strong>Assert that there are exactly 4 h2 tags on the page</strong></p>

";
        // line 141
        echo "<pre><code> \$this-&gt;assertCount(4, \$crawler-&gt;filter('h2'));
</code></pre>";
        echo "

            <p><strong>Assert that the \"Content-Type\" header is \"application/json</strong></p>

";
        // line 146
        echo "<pre><code> \$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;headers-&gt;contains('Content-Type','application/json'));
</code></pre>";
        echo "

            <p><strong>Assert that the response content matches a regexp</strong></p>

";
        // line 151
        echo "<pre><code>\$this-&gt;assertRegExp('/foo/', \$client-&gt;getResponse()-&gt;getContent());
</code></pre>";
        echo "

            <p><strong>Assert that the response status code is 2xx</strong></p>

";
        // line 156
        echo "<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isSuccessful());
</code></pre>";
        echo "

            <p><strong>Assert that the response status code is 404</strong></p>

";
        // line 161
        echo "<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isNotFound());
</code></pre>";
        echo "

            <p><strong>Assert a specific 200 status code</strong></p>

";
        // line 166
        echo "<pre><code>\$this-&gt;assertEquals(200, \$client-&gt;getResponse()-&gt;getStatusCode());
</code></pre>";
        echo "

            <p><strong>Assert that the response is a redirect to /demo/contact</strong></p>

";
        // line 171
        echo "<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isRedirect('/demo/contact'));
</code></pre>";
        echo "

            <p><strong>or simply check that the response is a redirect to any URL</strong></p>

";
        // line 176
        echo "<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isRedirect());
</code></pre>";
        echo "

            <p><strong>Directly submit a form (but using the Crawler is easier!)</strong></p>

";
        // line 181
        echo "<pre><code>\$client-&gt;request('POST', '/submit', array('name' =&gt; 'Fabien'));
</code></pre>";
        echo "
        </div>

        <div class=\"span6\">


            <p><strong>Form submission with a file upload</strong></p>

";
        // line 211
        echo "<pre><code>use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

    \$photo = new UploadedFile(
    '/path/to/photo.jpg',
    'photo.jpg',
    'image/jpeg',
    123
    );
    // or
    \$photo = array(
    'tmp_name' =&gt; '/path/to/photo.jpg',
    'name' =&gt; 'photo.jpg',
    'type' =&gt; 'image/jpeg',
    'size' =&gt; 123,
    'error' =&gt; UPLOAD_ERR_OK
    );
    \$client-&gt;request(
    'POST',
    '/submit',
    array('name' =&gt; 'Fabien'),
    array('photo' =&gt; \$photo)
    );
</code></pre>";
        echo "

            <p><strong>Perform a DELETE requests, and pass HTTP headers</strong></p>

";
        // line 222
        echo "<pre><code>\$client-&gt;request(
    'DELETE',
    '/post/12',
    array(),
    array(),
    array('PHP_AUTH_USER' =&gt; 'username', 'PHP_AUTH_PW' =&gt; 'pa\$\$word')
    );
</code></pre>";
        echo "

            <p><strong>browsing</strong></p>

";
        // line 229
        echo "<pre><code>\$client-&gt;back();
\$client-&gt;forward();
\$client-&gt;reload();
</code></pre>";
        echo "

            <p><strong>Clears all cookies and the history</strong></p>

";
        // line 234
        echo "<pre><code>\$client-&gt;restart();
</code></pre>";
        echo "

            <p><strong>redirecting</strong></p>

";
        // line 240
        echo "<pre><code>\$crawler = \$client-&gt;followRedirect();
\$client-&gt;followRedirects();
</code></pre>";
        echo "
        </li>
        </div>

    </div>

    </ul>


    <h3>The Request() method:</h3>

    <div class=\"row\">

        <div class=\"span6\">

";
        // line 264
        echo "<pre><code>request(
    \$method,
    \$uri,
    array \$parameters = array(),
    array \$files = array(),
    array \$server = array(),
    \$content = null,
    \$changeHistory = true
)
</code></pre>";
        echo "
    <p>The server array is the raw values that you'd expect to normally find in the PHP \$_SERVER4
        superglobal. For example, to set the Content-Type and Referer HTTP headers, you'd pass the
        following:</p>
        </div>

        <div class=\"span6\">


";
        // line 283
        echo "<pre><code>\$client-&gt;request(
    'GET',
    '/demo/hello/Fabien',
    array(),
    array(),
    array(
        'CONTENT_TYPE' =&gt; 'application/json',
        'HTTP_REFERER' =&gt; '/foo/bar',
        )
    );
</code></pre>";
        echo "
        </div>

    </div>


    <h3>Accessing Internal Objects</h3>

    <p>If you use the client to test your application, you might want to access the client's internal objects:</p>

";
        // line 295
        echo "<pre><code>\$history = \$client-&gt;getHistory();
\$cookieJar = \$client-&gt;getCookieJar();
</code></pre>";
        echo "

    <p>You can also get the objects related to the latest request:</p>

";
        // line 302
        echo "<pre><code>\$request = \$client-&gt;getRequest();
\$response = \$client-&gt;getResponse();
\$crawler = \$client-&gt;getCrawler();
</code></pre>";
        echo "

    <p>If your requests are not insulated, you can also access the Container and the Kernel:</p>

";
        // line 309
        echo "<pre><code>\$container = \$client-&gt;getContainer();
\$kernel = \$client-&gt;getKernel();
\$profile = \$client-&gt;getProfile();
</code></pre>";
        echo "

    <h3>The Crawler</h3>

    <div class=\"row\">

        <div class=\"span6\">
    <p>A Crawler instance is returned each time you make a request with the Client. It allows you to traverse
        HTML documents, select nodes, find links and forms.</p>

    <p>Like jQuery, the Crawler has methods to traverse the DOM of an HTML/XML document.</p>

";
        // line 325
        echo "<pre><code>\$newCrawler = \$crawler-&gt;filter('input[type=submit]')
    -&gt;last()
    -&gt;parents()
    -&gt;first();
</code></pre>";
        echo "

    <p>Many other methods are also available:</p>

    <ul>
        <li>filter('h1.title') Nodes that match the CSS selector</li>
        <li>filterXpath('h1') Nodes that match the XPath expression</li>
        <li>eq(1) Node for the specified index</li>
        <li>first() First node</li>
        <li>last() Last node</li>
        <li>siblings() Siblings</li>
        <li>nextAll() All following siblings</li>
        <li>previousAll() All preceding siblings</li>
        <li>parents() Returns the parent nodes</li>
        <li>children() Returns children nodes</li>
        <li>reduce(\$lambda) Nodes for which the callable does not return false</li>
    </ul>

        </div>

        <div class=\"span6\">
    <h4>Extracting information</h4>

    ";
        // line 369
        echo "
<pre><code>// Returns the attribute value for the first node
\$crawler-&gt;attr('class');

// Returns the node value for the first node
\$crawler-&gt;text();

// Extracts an array of attributes for all nodes (_text returns the node value)
// returns an array for each element in crawler, each with the value and href
\$info = \$crawler-&gt;extract(array('_text', 'href'));

// Executes a lambda for each node and return an array of results
\$data = \$crawler-&gt;each(function (\$node, \$i)
{
    return \$node-&gt;attr('href');
});

//Selecting links
\$crawler-&gt;selectLink('Click here');
\$link = \$crawler-&gt;selectLink('Click here')-&gt;link();
\$client-&gt;click(\$link);
</code></pre>";
        echo "

        </div>

    </div>



    <div class=\"row\">

        <div class=\"span6\">
    <h3>Forms</h3>
";
        // line 415
        echo "<pre><code>// Selecting buttons.
\$buttonCrawlerNode = \$crawler-&gt;selectButton('submit');

// You can override values by:

\$form = \$buttonCrawlerNode-&gt;form(array(
    'name' =&gt; 'Fabien',
    'my_form[subject]' =&gt; 'Symfony rocks!',
));

//Simulate methods
\$form = \$buttonCrawlerNode-&gt;form(array(), 'DELETE');

//Submit form.
\$client-&gt;submit(\$form);

//Submit with arguments.
\$client-&gt;submit(\$form, array(
    'name' =&gt; 'Fabien',
    'my_form[subject]' =&gt; 'Symfony rocks!',
));

// Using arrays.
\$form['name'] = 'Fabien';
\$form['my_form[subject]'] = 'Symfony rocks!';

// Select an option or a radio
\$form['country']-&gt;select('France');

// Tick a checkbox
\$form['like_symfony']-&gt;tick();

// Upload a file
\$form['photo']-&gt;upload('/path/to/lucas.jpg');
</code></pre>";
        echo "

        </div>

        <div class=\"span6\">

    <h3>Test environment configuration</h3>

    <p>The swiftmailer is configured to not actually deliver emails in the test
        environment. You can see this under the swiftmailer configuration option:</p>

    ";
        // line 430
        echo "
<pre><code># app/config/config_test.yml
swiftmailer:
    disable_delivery: true
</code></pre>";
        echo "

    <p>You can also use a different environment entirely, or override the default debug mode (true) by passing
        each as options to the createClient() method:</p>

    <p><strong>custom environment</strong></p>

";
        // line 441
        echo "<pre><code>\$client = static::createClient(array(
    'environment' =&gt; 'my_test_env',
    'debug' =&gt; false,
    ));
</code></pre>";
        echo "

    <p><strong>custom user agent</strong></p>

";
        // line 449
        echo "<pre><code>\$client = static::createClient(array(), array(
    'HTTP_HOST' =&gt; 'en.example.com',
    'HTTP_USER_AGENT' =&gt; 'MySuperBrowser/1.0',
));
</code></pre>";
        echo "

    <p><strong>override HTTP headers</strong></p>

";
        // line 457
        echo "<pre><code>\$client-&gt;request('GET', '/', array(), array(), array(
    'HTTP_HOST' =&gt; 'en.example.com',
    'HTTP_USER_AGENT' =&gt; 'MySuperBrowser/1.0',
));
</code></pre>";
        echo "


        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "E01Bundle:symfony2cheatsheet:testing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 457,  594 => 449,  583 => 441,  569 => 430,  521 => 415,  485 => 369,  455 => 325,  437 => 309,  427 => 302,  418 => 295,  395 => 283,  374 => 264,  354 => 240,  346 => 234,  336 => 229,  322 => 222,  293 => 211,  281 => 181,  273 => 176,  265 => 171,  257 => 166,  249 => 161,  241 => 156,  233 => 151,  225 => 146,  217 => 141,  209 => 136,  201 => 131,  193 => 126,  166 => 109,  152 => 92,  122 => 77,  95 => 47,  69 => 32,  56 => 8,  51 => 3,  45 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"E01Bundle:Default:base.html.twig\" %}
{% block content %}
    <p>Symfony2 works with PHPUnit 3.5.11 or later, though version 3.6.4 is needed to test the Symfony
        core code itself.</p>

{% raw %}<pre><code># specify the configuration directory on the command line
    \$ phpunit -c app/
</code></pre>{% endraw %}

    <h3>Unit tests</h3>

    <p>Writing Symfony2 unit tests is no different than writing standard PHPUnit unit tests. Suppose, for
        example, that you have an incredibly simple class called Calculator in the Utility/ directory of your
        bundle:</p>

{% raw %}<pre><code>// src/Acme/DemoBundle/Tests/Utility/CalculatorTest.php
namespace Acme\\DemoBundle\\Tests\\Utility;

use Acme\\DemoBundle\\Utility\\Calculator;

class CalculatorTest extends \\PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        \$calc = new Calculator();
        \$result = \$calc-&gt;add(30, 12);

        // assert that our calculator added the numbers correctly!
        \$this-&gt;assertEquals(42, \$result);
    }
}
</code></pre>{% endraw %}

    <p>By convention, the Tests/ sub-directory should replicate the directory of your bundle. So, if you're
        testing a class in your bundle's Utility/ directory, put the test in the Tests/Utility/ directory.</p>

    <p>Running tests for a given file or directory is also very easy:</p>

{% raw %}<pre><code># run all tests in the Utility directory
\$ phpunit -c app src/Acme/DemoBundle/Tests/Utility/

# run tests for the Calculator class
\$ phpunit -c app src/Acme/DemoBundle/Tests/Utility/CalculatorTest.php

# run all tests for the entire Bundle
\$ phpunit -c app src/Acme/DemoBundle/
</code></pre>{% endraw %}

    <h3>Functional Tests</h3>

    <p>They are no different from unit tests as far as PHPUnit is concerned, but they have a very specific
        workflow:</p>

    <ul>
        <li>Make a request;</li>
        <li>Test the response;</li>
        <li>Click on a link or submit a form;</li>
        <li>Test the response;</li>
        <li>Rinse and repeat.</li>
    </ul>
    <p>Symfony 2 provides a simple functional test for its DemoController as follows:</p>

{% raw %}<pre><code>// src/Acme/DemoBundle/Tests/Controller/DemoControllerTest.php
namespace Acme\\DemoBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        \$client = static::createClient();
        \$crawler = \$client-&gt;request('GET', '/demo/hello/Fabien');
        \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('html:contains(\"Hello Fabien\")')-&gt;count());
    }
}
</code></pre>{% endraw %}


    <div class=\"row\">

        <div class=\"span6\">
    <p>The createClient() method returns a client, which is like a browser that you'll use to crawl your site:</p>

    <p>The request() method returns a Crawler object which can be used to select elements in the Response, click on links, and submit forms.</p>

    <ul>
        <li>
            <p>Click on a link:</p>
{% raw %}<pre><code>\$link = \$crawler-&gt;filter('a:contains(\"Greet\")')-&gt;eq(1)-&gt;link();
\$crawler = \$client-&gt;click(\$link);
</code></pre>{% endraw %}
        </li>

        </div>

        <div class=\"span6\">
        <li>
            <p>Submit a form:</p>

{% raw %}<pre><code>\$form = \$crawler-&gt;selectButton('submit')-&gt;form();

// set some values
\$form['name'] = 'Lucas';
\$form['form_name[subject]'] = 'Hey there!';

// submit the form
\$crawler = \$client-&gt;submit(\$form);
</code></pre>{% endraw %}
        </li>
        <li>

        </div>

    </div>

            <p>Assertions:</p>


    <div class=\"row\">

        <div class=\"span6\">
            <p><strong>Assert that the response matches a given CSS selector.</strong></p>

{% raw %}<pre><code> \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('h1')-&gt;count());
</code></pre>{% endraw %}

            <p><strong>Check content text</strong></p>

{% raw %}<pre><code> \$this-&gt;assertRegExp('/Hello Fabien/', \$client-&gt;getResponse()-&gt;getContent());
</code></pre>{% endraw %}

            <p><strong>Assert that there is more than one h2 tag with the class \"subtitle\"</strong></p>

{% raw %}<pre><code> \$this-&gt;assertGreaterThan(0, \$crawler-&gt;filter('h2.subtitle')-&gt;count());
</code></pre>{% endraw %}

            <p><strong>Assert that there are exactly 4 h2 tags on the page</strong></p>

{% raw %}<pre><code> \$this-&gt;assertCount(4, \$crawler-&gt;filter('h2'));
</code></pre>{% endraw %}

            <p><strong>Assert that the \"Content-Type\" header is \"application/json</strong></p>

{% raw %}<pre><code> \$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;headers-&gt;contains('Content-Type','application/json'));
</code></pre>{% endraw %}

            <p><strong>Assert that the response content matches a regexp</strong></p>

{% raw %}<pre><code>\$this-&gt;assertRegExp('/foo/', \$client-&gt;getResponse()-&gt;getContent());
</code></pre>{% endraw %}

            <p><strong>Assert that the response status code is 2xx</strong></p>

{% raw %}<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isSuccessful());
</code></pre>{% endraw %}

            <p><strong>Assert that the response status code is 404</strong></p>

{% raw %}<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isNotFound());
</code></pre>{% endraw %}

            <p><strong>Assert a specific 200 status code</strong></p>

{% raw %}<pre><code>\$this-&gt;assertEquals(200, \$client-&gt;getResponse()-&gt;getStatusCode());
</code></pre>{% endraw %}

            <p><strong>Assert that the response is a redirect to /demo/contact</strong></p>

{% raw %}<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isRedirect('/demo/contact'));
</code></pre>{% endraw %}

            <p><strong>or simply check that the response is a redirect to any URL</strong></p>

{% raw %}<pre><code>\$this-&gt;assertTrue(\$client-&gt;getResponse()-&gt;isRedirect());
</code></pre>{% endraw %}

            <p><strong>Directly submit a form (but using the Crawler is easier!)</strong></p>

{% raw %}<pre><code>\$client-&gt;request('POST', '/submit', array('name' =&gt; 'Fabien'));
</code></pre>{% endraw %}
        </div>

        <div class=\"span6\">


            <p><strong>Form submission with a file upload</strong></p>

{% raw %}<pre><code>use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

    \$photo = new UploadedFile(
    '/path/to/photo.jpg',
    'photo.jpg',
    'image/jpeg',
    123
    );
    // or
    \$photo = array(
    'tmp_name' =&gt; '/path/to/photo.jpg',
    'name' =&gt; 'photo.jpg',
    'type' =&gt; 'image/jpeg',
    'size' =&gt; 123,
    'error' =&gt; UPLOAD_ERR_OK
    );
    \$client-&gt;request(
    'POST',
    '/submit',
    array('name' =&gt; 'Fabien'),
    array('photo' =&gt; \$photo)
    );
</code></pre>{% endraw %}

            <p><strong>Perform a DELETE requests, and pass HTTP headers</strong></p>

{% raw %}<pre><code>\$client-&gt;request(
    'DELETE',
    '/post/12',
    array(),
    array(),
    array('PHP_AUTH_USER' =&gt; 'username', 'PHP_AUTH_PW' =&gt; 'pa\$\$word')
    );
</code></pre>{% endraw %}

            <p><strong>browsing</strong></p>

{% raw %}<pre><code>\$client-&gt;back();
\$client-&gt;forward();
\$client-&gt;reload();
</code></pre>{% endraw %}

            <p><strong>Clears all cookies and the history</strong></p>

{% raw %}<pre><code>\$client-&gt;restart();
</code></pre>{% endraw %}

            <p><strong>redirecting</strong></p>

{% raw %}<pre><code>\$crawler = \$client-&gt;followRedirect();
\$client-&gt;followRedirects();
</code></pre>{% endraw %}
        </li>
        </div>

    </div>

    </ul>


    <h3>The Request() method:</h3>

    <div class=\"row\">

        <div class=\"span6\">

{% raw %}<pre><code>request(
    \$method,
    \$uri,
    array \$parameters = array(),
    array \$files = array(),
    array \$server = array(),
    \$content = null,
    \$changeHistory = true
)
</code></pre>{% endraw %}
    <p>The server array is the raw values that you'd expect to normally find in the PHP \$_SERVER4
        superglobal. For example, to set the Content-Type and Referer HTTP headers, you'd pass the
        following:</p>
        </div>

        <div class=\"span6\">


{% raw %}<pre><code>\$client-&gt;request(
    'GET',
    '/demo/hello/Fabien',
    array(),
    array(),
    array(
        'CONTENT_TYPE' =&gt; 'application/json',
        'HTTP_REFERER' =&gt; '/foo/bar',
        )
    );
</code></pre>{% endraw %}
        </div>

    </div>


    <h3>Accessing Internal Objects</h3>

    <p>If you use the client to test your application, you might want to access the client's internal objects:</p>

{% raw %}<pre><code>\$history = \$client-&gt;getHistory();
\$cookieJar = \$client-&gt;getCookieJar();
</code></pre>{% endraw %}

    <p>You can also get the objects related to the latest request:</p>

{% raw %}<pre><code>\$request = \$client-&gt;getRequest();
\$response = \$client-&gt;getResponse();
\$crawler = \$client-&gt;getCrawler();
</code></pre>{% endraw %}

    <p>If your requests are not insulated, you can also access the Container and the Kernel:</p>

{% raw %}<pre><code>\$container = \$client-&gt;getContainer();
\$kernel = \$client-&gt;getKernel();
\$profile = \$client-&gt;getProfile();
</code></pre>{% endraw %}

    <h3>The Crawler</h3>

    <div class=\"row\">

        <div class=\"span6\">
    <p>A Crawler instance is returned each time you make a request with the Client. It allows you to traverse
        HTML documents, select nodes, find links and forms.</p>

    <p>Like jQuery, the Crawler has methods to traverse the DOM of an HTML/XML document.</p>

{% raw %}<pre><code>\$newCrawler = \$crawler-&gt;filter('input[type=submit]')
    -&gt;last()
    -&gt;parents()
    -&gt;first();
</code></pre>{% endraw %}

    <p>Many other methods are also available:</p>

    <ul>
        <li>filter('h1.title') Nodes that match the CSS selector</li>
        <li>filterXpath('h1') Nodes that match the XPath expression</li>
        <li>eq(1) Node for the specified index</li>
        <li>first() First node</li>
        <li>last() Last node</li>
        <li>siblings() Siblings</li>
        <li>nextAll() All following siblings</li>
        <li>previousAll() All preceding siblings</li>
        <li>parents() Returns the parent nodes</li>
        <li>children() Returns children nodes</li>
        <li>reduce(\$lambda) Nodes for which the callable does not return false</li>
    </ul>

        </div>

        <div class=\"span6\">
    <h4>Extracting information</h4>

    {% raw %}
<pre><code>// Returns the attribute value for the first node
\$crawler-&gt;attr('class');

// Returns the node value for the first node
\$crawler-&gt;text();

// Extracts an array of attributes for all nodes (_text returns the node value)
// returns an array for each element in crawler, each with the value and href
\$info = \$crawler-&gt;extract(array('_text', 'href'));

// Executes a lambda for each node and return an array of results
\$data = \$crawler-&gt;each(function (\$node, \$i)
{
    return \$node-&gt;attr('href');
});

//Selecting links
\$crawler-&gt;selectLink('Click here');
\$link = \$crawler-&gt;selectLink('Click here')-&gt;link();
\$client-&gt;click(\$link);
</code></pre>{% endraw %}

        </div>

    </div>



    <div class=\"row\">

        <div class=\"span6\">
    <h3>Forms</h3>
{% raw%}<pre><code>// Selecting buttons.
\$buttonCrawlerNode = \$crawler-&gt;selectButton('submit');

// You can override values by:

\$form = \$buttonCrawlerNode-&gt;form(array(
    'name' =&gt; 'Fabien',
    'my_form[subject]' =&gt; 'Symfony rocks!',
));

//Simulate methods
\$form = \$buttonCrawlerNode-&gt;form(array(), 'DELETE');

//Submit form.
\$client-&gt;submit(\$form);

//Submit with arguments.
\$client-&gt;submit(\$form, array(
    'name' =&gt; 'Fabien',
    'my_form[subject]' =&gt; 'Symfony rocks!',
));

// Using arrays.
\$form['name'] = 'Fabien';
\$form['my_form[subject]'] = 'Symfony rocks!';

// Select an option or a radio
\$form['country']-&gt;select('France');

// Tick a checkbox
\$form['like_symfony']-&gt;tick();

// Upload a file
\$form['photo']-&gt;upload('/path/to/lucas.jpg');
</code></pre>{% endraw %}

        </div>

        <div class=\"span6\">

    <h3>Test environment configuration</h3>

    <p>The swiftmailer is configured to not actually deliver emails in the test
        environment. You can see this under the swiftmailer configuration option:</p>

    {% raw %}
<pre><code># app/config/config_test.yml
swiftmailer:
    disable_delivery: true
</code></pre>{% endraw %}

    <p>You can also use a different environment entirely, or override the default debug mode (true) by passing
        each as options to the createClient() method:</p>

    <p><strong>custom environment</strong></p>

{% raw %}<pre><code>\$client = static::createClient(array(
    'environment' =&gt; 'my_test_env',
    'debug' =&gt; false,
    ));
</code></pre>{% endraw %}

    <p><strong>custom user agent</strong></p>

{% raw %}<pre><code>\$client = static::createClient(array(), array(
    'HTTP_HOST' =&gt; 'en.example.com',
    'HTTP_USER_AGENT' =&gt; 'MySuperBrowser/1.0',
));
</code></pre>{% endraw %}

    <p><strong>override HTTP headers</strong></p>

{% raw %}<pre><code>\$client-&gt;request('GET', '/', array(), array(), array(
    'HTTP_HOST' =&gt; 'en.example.com',
    'HTTP_USER_AGENT' =&gt; 'MySuperBrowser/1.0',
));
</code></pre>{% endraw %}


        </div>

    </div>
{% endblock %}", "E01Bundle:symfony2cheatsheet:testing.html.twig", "/Users/hcho/Desktop/d04/src/E01Bundle/Resources/views/symfony2cheatsheet/testing.html.twig");
    }
}
