<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
  /**
   * The event to listener mappings for the application.
   *
   * @var array<class-string, array<int, class-string>>
   */
  protected $listen = [
    Registered::class => [
      SendEmailVerificationNotification::class,
    ],
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
      // add your listeners (aka providers) here
      'SocialiteProviders\\Zoho\\ZohoExtendSocialite@handle',
      \SocialiteProviders\Kakao\KakaoExtendSocialite::class . '@handle',
      \SocialiteProviders\GitHub\GitHubExtendSocialite::class . '@handle',
      \SocialiteProviders\Naver\NaverExtendSocialite::class . '@handle',
      \SocialiteProviders\Google\GoogleExtendSocialite::class . '@handle',
    ]
  ];

  /**
   * Register any events for your application.
   */
  public function boot(): void
  {
    //
  }

  /**
   * Determine if events and listeners should be automatically discovered.
   */
  public function shouldDiscoverEvents(): bool
  {
    return false;
  }
}
