<?php

namespace Tests\Feature;

use App\Notifications\JobApplicationNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Tests\TestCase;

class JobsTest extends TestCase
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
            'cv' => 'https://linkedin.com',
            'email' => 'john@doe.com',
            'git' => 'https://github.com',
            'honeypotname' => '',
            'honeypottime' => 'required',
            'job' => 'Backend Developer',
            'message' => 'Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.',
            'name' => 'John Doe',
        ];
    }

    public function tearDown(): void
    {
        \Honeypot::enable();
    }

    public function testJobsShouldRedirectIfSuccess(): void
    {
        $response = $this->json('POST', 'en/careers', $this->data);

        $response->assertStatus(302)
            ->assertSessionHas('alert', [
                'gtm' => '{ "success": { "event_category": "form", "event_label": "send" } }',
                'message' => __('jobs.success.message'),
                'title' => __('jobs.success.title'),
                'type' => 'success',
            ]);
    }

    public function testJobsShouldReturn422IfInvalidCvGiven(): void
    {
        $data = $this->data;
        $data['cv'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'cv',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfInvalidEmailGiven(): void
    {
        $data = $this->data;
        $data['email'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfInvalidGitGiven(): void
    {
        $data = $this->data;
        $data['git'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'git',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfNoCvGiven(): void
    {
        $data = $this->data;
        unset($data['cv']);

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'cv',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfNoEmailGiven(): void
    {
        $data = $this->data;
        unset($data['email']);

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfNoGitGiven(): void
    {
        $data = $this->data;
        unset($data['git']);

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'git',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfNoMessageGiven(): void
    {
        $data = $this->data;
        unset($data['message']);

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'message',
                ],
                'message',
            ]);
    }

    public function testJobsShouldReturn422IfNoNameGiven(): void
    {
        $data = $this->data;
        unset($data['name']);

        $response = $this->json('POST', 'en/careers', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'name',
                ],
                'message',
            ]);
    }

    public function testJobsShouldSendNotificationIfSuccess(): void
    {
        $this->json('POST', 'en/careers', $this->data);

        \Notification::assertSentTo(new AnonymousNotifiable(), JobApplicationNotification::class);
    }
}
