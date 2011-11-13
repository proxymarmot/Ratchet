<?php
namespace Ratchet\Tests\Protocol\WebSocket\Version;
use Ratchet\Application\WebSocket\Version\Hixie76;

/**
 * @covers Ratchet\Application\WebSocket\Version\Hixie76
 */
class Hixie76Test extends \PHPUnit_Framework_TestCase {
    protected $_version;

    public function setUp() {
        $this->_version = new Hixie76();
    }

    public function testClassImplementsVersionInterface() {
        $constraint = $this->isInstanceOf('\\Ratchet\\Application\\WebSocket\\Version\\VersionInterface');
        $this->assertThat($this->_version, $constraint);
    }

    /**
     * @dataProvider HandshakeProvider
     */
    public function INCOMPLETEtestKeySigningForHandshake($key, $accept) {
//        $this->assertEquals($accept, $this->_version->sign($key));
    }

    public static function HandshakeProvider() {
        return array(
            array('', '')
          , array('', '')
        );
    }
}