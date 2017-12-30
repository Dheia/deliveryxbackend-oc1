<?php
/**
 * Created by PhpStorm.
 * User: Łukasz Biały
 * URL: http://keios.eu
 * Date: 9/1/15
 * Time: 10:32 PM
 */

namespace Keios\GeoLocaleSwitcher\Classes;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Session\SessionInterface;
use Illuminate\Session\SessionManager;
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Models\Locale as LocaleModel;

/**
 * Class GeoLocaleMiddleware
 *
 * @package Keios\GeoLocaleSwitcher
 */
class GeoLocaleMiddleware
{

    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * @var GeoLocaleService
     */
    private $geoLocale;


    /**
     * @var Redirector
     */
    private $redirector;

    /**
     * @param SessionManager   $session
     * @param GeoLocaleService $geoLocale
     * @param Redirector       $redirector
     */
    public function __construct(SessionManager $session, GeoLocaleService $geoLocale, Redirector $redirector)
    {
        $this->session = $session->driver();
        $this->geoLocale = $geoLocale;
        $this->redirector = $redirector;
    }

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return \Illuminate\Http\Response $response
     */
    public function handle($request, Closure $next)
    {
        $this->runGeolocationCheckOn($request);

        return $next($request);
    }

    /**
     * @param Request $request
     */
    private function runGeolocationCheckOn(Request $request)
    {
        if ($request->ajax()) {
            return;
        }

        if (!in_array(strtolower($request->method()), ['get', 'head'])) {
            return;
        }

        if ($this->session->has(Translator::SESSION_LOCALE)) {
            return;
        }

        $availableLocales = LocaleModel::listAvailable();
        if(count($availableLocales) === 1){
            return;
        }
        $this->geoLocale->setAvailableLocales($availableLocales);

        /**
         * @var \Keios\GeoLocaleSwitcher\Classes\CountryLocale $localeFromRequest
         */
        $localeFromRequest = $this->geoLocale->resolveLocaleFromRequest($request);

        if ($localeFromRequest && $localeFromRequest->isMultiple()) {
            $this->session->put('geolocale.countryLocale', $localeFromRequest);
        }

        if ($this->geoLocale->shouldBeRedirected()) {
            /**
             * @var \Illuminate\Routing\Redirector $redirect
             */
            $this->session->reflash();
            $this->redirector->to($this->geoLocale->getRedirectUrl())->withInput()->send();
            exit();
        }
    }

}