<?php
namespace libphonenumber\Tests\Issues;

use libphonenumber\PhoneNumberUtil;

/**
 * Class MarketTest
 * @author  Joaquim Silva <joaquim.silva@jumia.com>
 * @package libphonenumber\Tests\Issues
 */
class MarketTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhoneNumberUtil
     */
    public $phoneNumberUtil;

    public function setUp()
    {
        PhoneNumberUtil::resetInstance();
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
    }

    /**
     * Algeria valid phones on Market project.
     */
    public function testAlgeriaPhones()
    {
        $countryIso = 'DZ';

        $this->validatePhone($countryIso, '674757641');
        $this->validatePhone($countryIso, '0779713723');
        $this->validatePhone($countryIso, '23854722');
        $this->validatePhone($countryIso, '670214933');
    }

    /**
     * Nigeria valid phones on Market project.
     */
    public function testNigeriaPhones()
    {
        $countryIso = 'NG';

        $this->validatePhone($countryIso, '9070004364');
        $this->validatePhone($countryIso, '09070004364');
        $this->validatePhone($countryIso, '09094821628');
        $this->validatePhone($countryIso, '9050907964');
    }

    /**
     * Ethiopia valid phones on Market project.
     */
    public function testEthiopiaPhones()
    {
        $countryIso = 'ET';
        $numbers = [
            '0984739427',
            '947899431',
            '945103491',
            '963142937',
            '940199359',
            '970144359',
            '940249481',
            '0967528240',
            '0984739427',
        ];

        foreach ($numbers as $number) {
            $this->validatePhone($countryIso, $number);
        }
    }

    /**
     * Senegal valid phones on Market project.
     */
    public function testSenegalPhones()
    {
        $countryIso = 'SN';

        $this->validatePhone($countryIso, '783883306');
        $this->validatePhone($countryIso, '781205244');
        $this->validatePhone($countryIso, '707969800');
    }

    /**
     * Ivory Coast valid phones on Market project.
     */
    public function testIvoryCoastPhones()
    {
        $countryIso = 'CI';

        $this->validatePhone($countryIso, '77245866');
        $this->validatePhone($countryIso, '78160943');
        $this->validatePhone($countryIso, '75120637');
        $this->validatePhone($countryIso, '79422627');
    }

    /**
     * Pakistan valid phones on Market project.
     */
    public function testPakitanPhones()
    {
        $countryIso = 'PK';
        $numbers = [
            '03494941675',
            '03102649602',
            '03162131387',
            '03215440014',
            '03218811198',
            '03228888973',
            '03218888973',
            '03224923244',
            '03229882037',
            '03136810935',
            '03217357233',
            '03219488522',
            '03235203444',
            '03135988508',
            '03218036706',
            '03214216123',
            '03214216123',
            '03218036706',
        ];

        foreach ($numbers as $number) {
            $this->validatePhone($countryIso, $number);
        }
    }

    /**
     * Morocco valid phones on Market project.
     */
    public function testMoroccoPhones()
    {
        $countryIso = 'MA';

        $this->validatePhone($countryIso, '0693704076');
        $this->validatePhone($countryIso, '0694624415');
    }

    /**
     * Myanmar valid phones on Market project.
     */
    public function testMyanmarPhones()
    {
        $countryIso = 'MM';
        $numbers = [
            '9974493743',
            '9250570167',
            '09253105512',
            '09782526879',
            '09262048848',
            '09262617513',
        ];

        foreach ($numbers as $number) {
            $this->validatePhone($countryIso, $number);
        }
    }

    /**
     * Tanzania valid phones on Market project.
     */
    public function testTanzaniaPhones()
    {
        $countryIso = 'TZ';

        $this->validatePhone($countryIso, '0675415054');
        $this->validatePhone($countryIso, '672905980');
    }

    /**
     * Zambia valid phones on Market project.
     */
    public function testZambiaPhones()
    {
        $countryIso = 'ZM';

        $this->validatePhone($countryIso, '977509157');
    }

    /**
     * Validate that a phone is valid for a country.
     *
     * @param string $countryIso  Country ISO2 code EX: MM, ET.
     * @param string $phoneNumber The phone number to be checked.
     *
     * @return void
     */
    protected function validatePhone($countryIso, $phoneNumber)
    {
        $phoneUtil = PhoneNumberUtil::getInstance();
        $numberProto = $phoneUtil->parse($phoneNumber, $countryIso);
        $this->assertTrue($phoneUtil->isValidNumber($numberProto));
    }
}
