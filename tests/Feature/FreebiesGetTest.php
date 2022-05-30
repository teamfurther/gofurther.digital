<?php

namespace Tests\Unit;

use App\Actions\CreateNewsletterSubscriberAction;
use App\Notifications\FreebieRequestedNotification;
use App\Notifications\NewsletterSubscribedNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use SendinBlue\Client\Model\CreateUpdateContactModel;
use Tests\TestCase;

class FreebiesGetTest extends TestCase
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
            'freebie' => 'lean-validation-cheat-sheet-en.pdf',
            'honeypotname' => '',
            'honeypottime' => 'required',
        ];
    }

    public function tearDown(): void
    {
        \Honeypot::enable();
    }

    public function testFreebieGetShouldReturn422IfInvalidEmailGiven(): void
    {
        $data = $this->data;
        $data['email'] = 'thisisnotvalid';

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldReturn422IfNoEmailGiven(): void
    {
        $data = $this->data;
        unset($data['email']);

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'email',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldReturn422IfNoNameGiven(): void
    {
        $data = $this->data;
        unset($data['name']);

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'name',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldReturn422IfPrivacyNotAccepted(): void
    {
        $data = $this->data;
        unset($data['privacy']);

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'privacy',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldReturn422IfNoSourceSet(): void
    {
        $data = $this->data;
        unset($data['source']);

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'source',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldReturn422IfNoFreebieSet(): void
    {
        $data = $this->data;
        unset($data['freebie']);

        $response = $this->json('POST', 'en/freebies', $data);

        $response->assertStatus(422)
            ->assertJsonStructure([
                'errors' => [
                    'freebie',
                ],
                'message',
            ]);
    }

    public function testFreebieGetShouldSendNotificationIfSuccess(): void
    {
        $mock = $this->mock(CreateNewsletterSubscriberAction::class);
        $mock->shouldReceive('execute')
            ->andReturn(true);

        $this->json('POST', 'en/freebies', $this->data);

        \Notification::assertSentTo(new AnonymousNotifiable(), FreebieRequestedNotification::class);
    }
}
