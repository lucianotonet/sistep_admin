<?php

use App\Models\User;

test('profile page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get('/profile');

    $response->assertOk();
});

test('profile information can be updated for student', function () {
    $user = User::factory()->create(['user_type' => 'student']);

    $response = $this
        ->actingAs($user)
        ->patch('/profile', [
            'name' => 'Test Student',
            'email' => 'student@example.com',
            'user_type' => 'student',
            'institution' => 'Test Institution',
            'crp' => null,
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $user->refresh();

    $this->assertSame('Test Student', $user->name);
    $this->assertSame('student@example.com', $user->email);
    $this->assertNull($user->email_verified_at);
});

test('profile information can be updated for psychologist', function () {
    $user = User::factory()->create(['user_type' => 'psychologist']);

    $response = $this
        ->actingAs($user)
        ->patch('/profile', [
            'name' => 'Test Psychologist',
            'email' => 'psychologist@example.com',
            'user_type' => 'psychologist',
            'institution' => null,
            'crp' => '123456',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $user->refresh();

    $this->assertSame('Test Psychologist', $user->name);
    $this->assertSame('psychologist@example.com', $user->email);
    $this->assertNull($user->email_verified_at);
});

test('email verification status is unchanged when the email address is unchanged', function () {
    $user = User::factory()->create(['user_type' => 'student']);

    $response = $this
        ->actingAs($user)
        ->patch('/profile', [
            'name' => 'Test Student',
            'email' => $user->email,
            'user_type' => 'student',
            'institution' => 'Test Institution',
            'crp' => null,
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->assertNotNull($user->refresh()->email_verified_at);
});

test('user can delete their account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->delete('/profile', [
            'password' => 'password',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/');

    $this->assertGuest();
    $this->assertNull($user->fresh());
});

test('correct password must be provided to delete account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->delete('/profile', [
            'password' => 'wrong-password',
        ]);

    $response
        ->assertSessionHasErrorsIn('userDeletion', 'password')
        ->assertRedirect('/profile');

    $this->assertNotNull($user->fresh());
});
