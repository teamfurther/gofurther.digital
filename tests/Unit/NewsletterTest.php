<?php

namespace Tests\Unit;

use App\Actions\CreateNewsletterSubscriberAction;
use App\Notifications\NewsletterSubscribedNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use SendinBlue\Client\Model\CreateUpdateContactModel;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var array<string>
     */
    private array $data;

    public function setUp(): void
    {
        parent::setUp();

        \Honeypot::disable();
        \Notification::fake();

        $this->data = [
            'email' => 'john@doe.com',
            'name' => 'John Doe',
            'privacy' => '1',
            'source' => 'archive',
            'honeypotname' => '',
            'honeypottime' => 'required',
        ];
    }

    public function tearDown(): void
    {
        \Honeypot::enable();
    }

    public function testNewsletterSubscriptionShouldRedirectWithSuccessAlertIfSuccess(): void
    {
        $mock = $this->mock(CreateNewsletterSubscriberAction::class);
        $mock->shouldReceive('execute')
            ->andReturn(new CreateUpdateContactModel());

        $response = $this->json('POST', 'en/newsletter', $this->data);

        $response->assertStatus(302)
            ->assertSessionHas('alert', [
                'gtm' => '{ "success": { "event_category": "newsletter", "event_label": "subscribe" } }',
                'message' => __('newsletter.success.message'),
                'title' => __('newsletter.success.title'),
                'type' => 'success',
            ]);
    }

    public function testNewsletterSubscriptionShouldRedirectWithErrorAlertIfError(): void
    {
        $mock = $this->mock(CreateNewsletterSubscriberAction::class);
        $mock->shouldReceive('execute')
            ->andReturn(null);

        $response = $this->json('POST', 'en/newsletter', $this->data);

        $response->assertStatus(302)
            ->assertSessionHas('alert', [
                'message' => __('newsletter.error.message'),
                'title' => __('newsletter.error.title'),
                'type' => 'error',
            ]);
    }

    public function testNewsletterSubscriptionShouldReturn422IfInvalidEmailGiven(): void
    {
        $data = $this->data;
        $data['email'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/newsletter', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testNewsletterSubscriptionShouldReturn422IfNoEmailGiven(): void
    {
        $data = $this->data;
        unset($data['email']);

        $response = $this->json('POST', 'en/newsletter', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testNewsletterSubscriptionShouldReturn422IfNoNameGiven(): void
    {
        $data = $this->data;
        unset($data['name']);

        $response = $this->json('POST', 'en/newsletter', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'name',
                ],
                'message',
            ]);
    }

    public function testNewsletterSubscriptionShouldReturn422IfPrivacyNotAccepted(): void
    {
        $data = $this->data;
        unset($data['privacy']);

        $response = $this->json('POST', 'en/newsletter', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'privacy',
                ],
                'message',
            ]);
    }

    public function testNewsletterSubscriptionShouldReturn422IfNoSourceSet(): void
    {
        $data = $this->data;
        unset($data['source']);

        $response = $this->json('POST', 'en/newsletter', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'source',
                ],
                'message',
            ]);
    }

    public function testNewsletterSubscriptionShouldSendNotificationIfSuccess(): void
    {
        $mock = $this->mock(CreateNewsletterSubscriberAction::class);
        $mock->shouldReceive('execute')
            ->andReturn(new CreateUpdateContactModel());

        $this->json('POST', 'en/newsletter', $this->data);

        \Notification::assertSentTo(new AnonymousNotifiable(), NewsletterSubscribedNotification::class);
    }
}
