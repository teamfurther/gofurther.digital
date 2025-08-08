<?php

namespace Tests\Feature;

use App\Notifications\ContactNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Tests\TestCase;

class ContactTest extends TestCase
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
            'company' => 'The Does Ltd.',
            'email' => 'john@doe.com',
            'name' => 'John Doe',
            'message' => 'Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.',
            'phone' => '+00 10 111 222',
            'honeypotname' => '',
            'honeypottime' => 'required',
        ];
    }

    public function tearDown(): void
    {
        \Honeypot::enable();
    }

    public function testContactShouldRedirectIfSuccess(): void
    {
        $response = $this->json('POST', 'en/contact', $this->data);

        $response->assertStatus(302)
            ->assertSessionHas('alert', [
                'gtm' => '{ "success": { "event_category": "form", "event_label": "send" } }',
                'message' => __('contact.success.message'),
                'title' => __('contact.success.title'),
                'type' => 'success',
            ]);
    }

    public function testContactShouldReturn422IfInvalidEmailGiven(): void
    {
        $data = $this->data;
        $data['email'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testContactShouldReturn422IfNoEmailGiven(): void
    {
        $data = $this->data;
        unset($data['email']);

        $response = $this->json('POST', 'en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testContactShouldReturn422IfNoMessageGiven(): void
    {
        $data = $this->data;
        unset($data['message']);

        $response = $this->json('POST', 'en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'message',
                ],
                'message',
            ]);
    }

    public function testContactShouldReturn422IfNoNameGiven(): void
    {
        $data = $this->data;
        unset($data['name']);

        $response = $this->json('POST', 'en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'name',
                ],
                'message',
            ]);
    }

    public function testContactShouldSendNotificationIfSuccess(): void
    {
        $this->json('POST', 'en/contact', $this->data);

        \Notification::assertSentTo(new AnonymousNotifiable(), ContactNotification::class);
    }
}
