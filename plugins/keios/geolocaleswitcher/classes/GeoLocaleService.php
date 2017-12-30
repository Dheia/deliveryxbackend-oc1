<?php namespace Keios\GeoLocaleSwitcher\Classes;

use Keios\GeoIP\GeoIP;
use Illuminate\Http\Request;

/**
 * Class GeoLocaleService
 *
 * @package Keios\GeoLocaleSwitcher
 */
class GeoLocaleService
{
    /**
     * @var GeoLocaleRepository
     */
    protected $repository;

    /**
     * @var GeoIP
     */
    protected $geoIp;

    /**
     * @var
     */
    protected $availableLocales;

    /**
     * @var
     */
    protected $detectedCountryLocale;

    /**
     * @var bool
     */
    protected $sendRedirect = false;

    /**
     * @var
     */
    protected $redirectUrl;

    /**
     * @param GeoLocaleRepository $repository
     * @param GeoIP               $geoIP
     */
    public function __construct(GeoLocaleRepository $repository, GeoIP $geoIP)
    {
        $this->repository = $repository;
        $this->geoIp = $geoIP;
    }

    /**
     * @param array $availableLocales
     */
    public function setAvailableLocales(array $availableLocales)
    {
        $this->availableLocales = $availableLocales;
    }

    /**
     * @param Request $currentRequest
     *
     * @return CountryLocale|null
     */
    public function resolveLocaleFromRequest(Request $currentRequest)
    {
        $firstSegment = $currentRequest->segment(1);

        $location = $this->geoIp->getLocation();

        $isoCodeFromIP = strtoupper($location['isoCode']);

        $this->detectedCountryLocale = $this->repository->resolve($isoCodeFromIP);

        if (!$this->detectedCountryLocale->isRecognized()) {
            return null;
        }

        $defaultLocale = $this->detectedCountryLocale->getDefaultLocale();

        if (array_key_exists($defaultLocale, $this->availableLocales) && (!array_key_exists(
                $firstSegment,
                $this->availableLocales
            ))
        ) {
            $this->redirectUrl = $defaultLocale.$currentRequest->getRequestUri();
            $this->sendRedirect = true;
        }

        return $this->detectedCountryLocale;
    }

    /**
     * @return bool
     */
    public function shouldBeRedirected()
    {
        return $this->sendRedirect;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }
}