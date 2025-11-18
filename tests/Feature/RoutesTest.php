<?php

use App\Livewire\Pages\Auth\Login;
use App\Models\User;
use Livewire\Livewire;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('allow guests to see the login page', function () {
    get(route('login'))
    ->assertOk()
    ->assertSee('Login');
});

it('redirect guests from dashboard to login', function () {
    get(route('dashboard'))
    ->assertRedirect(route('login'));
});

it('require email and password to login', function () {
    Livewire::test(Login::class)
        ->set('email', '')
        ->set('password', '')
        ->call('login')
        ->assertHasErrors(['email' => 'required', 'password' => 'required']);
});

it('require valid email to login', function () {
    Livewire::test(Login::class)
        ->set('email', 'invalid-email')
        ->set('password', 'password')
        ->call('login')
        ->assertHasErrors(['email' => 'email']);
});

it('require minimum 6 characters for password to login', function () {
    Livewire::test(Login::class)
        ->set('email', 'user@example.com')
        ->set('password', '123')
        ->call('login')
        ->assertHasErrors(['password' => 'min']);
});

it('allow authenticated users to see the dashboard', function () {
    /** @var \App\Models\User $user */
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    Livewire::test(Login::class)
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login')
        ->assertRedirect(route('dashboard'));
    
    $this->assertAuthenticatedAs(User::find($user->id));
});