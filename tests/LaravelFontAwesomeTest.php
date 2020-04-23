<?php

namespace Djam90\LaravelFontAwesome\Test;

class LaravelFontAwesomeTest extends TestCase
{
    private $blade;

    public function setUp(): void
    {
        parent::setUp();

        $this->blade = resolve('blade.compiler');
    }

    public function testBladeDirectiveOutputsSuccessfully()
    {
        $types = ['fas', 'far', 'fad', 'fal', 'fab'];

        foreach ($types as $type) {
            $this->assertDirectiveOutput(
                '<i class="' . $type . ' fa-user"></i>',
                '@' . $type . '("user")',
                [],
                ''
            );
        }
    }

    /**
     * Evaluate a Blade expression with the given $variables in scope.
     *
     * Thanks to https://stevegrunwell.com/blog/custom-laravel-blade-directives/
     *
     * @param string $expected   The expected output.
     * @param string $expression The Blade directive, as it would be written in a view.
     * @param array  $variables  Variables to extract() into the scope of the eval() statement.
     * @param string $message    A message to display if the output does not match $expected.
     */
    protected function assertDirectiveOutput(
        string $expected,
        string $expression = '',
        array $variables = [],
        string $message = ''
    ) {
        $compiled = $this->blade->compileString($expression);

        /*
         * Normally using eval() would be a big no-no, but when you're working on a templating
         * engine it's difficult to avoid.
         */
        ob_start();
        extract($variables);
        eval(' ?>' . $compiled . '<?php ');
        $output = ob_get_clean();

        $this->assertEquals($expected, $output, $message);
    }
}