<?php namespace Dynatron\Roams;

use TestCase;
use Exception;
use Mockery as m;

class AAAPlayTest extends TestCase
{
    public function init()
    {
        // Use like __construct to define dependencies
    }

    protected function play()
    {
        $benchmarkStart = microtime(true);

        // Do stuff

        #$benchmarkMs = round((microtime(true) - $benchmarkStart) * 1000);
        #dd($benchmarkMs);
        dd('Play here');
    }

    protected function playCustom()
    {
        dd('Some custom play function here');
    }

    public function testEmpty()
    {
        // Leave empty or entire file will not run
    }
    public function tearDown()
    {
        m::close();
    }
    public function setUp()
    {
        try {
            parent::setUp();
            $this->init();
            foreach ($_SERVER['argv'] as $arg) {
                if (str_contains($arg, 'play')) {
                    $method = "play".studly_case(substr($arg, 5));
                    $this->$method();
                    exit();
                }
            }
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
}
