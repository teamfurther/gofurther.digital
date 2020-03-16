<?php

namespace Tests\Unit;

use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    private $data;

    /**
     * Set up testing environment
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        \Honeypot::disable();
        \Notification::fake();

        $this->data = [
            'contact_company' => 'Whatever Ltd.',
            'contact_email' => 'whatever@whatever.com',
            'contact_name' => 'John Doe',
            'contact_message' => 'Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.\n\nCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.',
            'contact_phone' => '+00 10 111 222',
            'honeypotname' => '',
            'honeypottime' => 'required'
        ];
    }



    /**
     * Tests
     */
    public function testContactShouldReturn422IfNoEmailGiven()
    {
        $data = $this->data;
        unset($data['contact_email']);

        $response = $this->json('POST', '/en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'contact_email'
                ],
                'message'
            ]);
    }

    public function testContactShouldReturn422IfInvalidEmailGiven()
    {
        $data = $this->data;
        $data['contact_email'] = 'whatever';

        $response = $this->json('POST', '/en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'contact_email'
                ],
                'message'
            ]);
    }

    public function testContactShouldReturn422IfNoMessageGiven()
    {
        $data = $this->data;
        unset($data['contact_message']);

        $response = $this->json('POST', '/en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'contact_message'
                ],
                'message'
            ]);
    }

    public function testContactShouldReturn422IfNoNameGiven()
    {
        $data = $this->data;
        unset($data['contact_name']);

        $response = $this->json('POST', '/en/contact', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'contact_name'
                ],
                'message'
            ]);
    }

    public function testContactShouldSendNotificationIfSuccess()
    {
        $user = factory(User::class)->create();

        $response = $this->json('POST', '/en/contact', $this->data);

        \Notification::assertSentTo($user, ContactNotification::class);
    }

    public function testContactShouldRedirectIfSuccess()
    {
        $user = factory(User::class)->create();

        $response = $this->json('POST', '/en/contact', $this->data);

        $response->assertStatus(302)
            ->assertSessionHas('alert', [
                'type' => 'success',
                'title' => 'Message sent!',
                'message' => 'We have received your message. One of our representatives will contact you shortly.'
            ]);
    }



    /**
     * Tear down testing environment
     *
     * @return void
     */
    public function tearDown(): void
    {
        \Honeypot::enable();
    }
}
