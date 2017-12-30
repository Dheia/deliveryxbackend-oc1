<?php namespace Keios\GeoLocaleSwitcher\Classes;

/**
 * Class CountryLocale
 *
 * @package Keios\GeoLocaleSwitcher\Classes
 */
class CountryLocale implements \Serializable
{

    /**
     * @var array
     */
    protected $locale;

    /**
     * @var
     */
    protected $countryCode;

    /**
     * CountryLocale constructor.
     *
     * @param array|null $locale
     * @param string     $countryCode
     */
    public function __construct(array $locale = null, $countryCode)
    {
        $this->locale = $locale;
        $this->countryCode = $countryCode;
    }

    /**
     * @return array|mixed|null
     */
    public function getDefaultLocale()
    {
        if ($this->isRecognized()) {
            return array_shift($this->locale);
        } else {
            return $this->locale;
        }
    }

    /**
     * @return string
     */
    public function getDetectedCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return array|null
     */
    public function getAllLocales()
    {
        return $this->locale;
    }

    /**
     * @return bool
     */
    public function isMultiple()
    {
        return count($this->locale) > 1;
    }

    /**
     * @return bool
     */
    public function isRecognized()
    {
        return $this->locale !== null;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize([$this->locale, $this->countryCode]);
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list($this->locale, $this->countryCode) = unserialize($serialized);
    }
}