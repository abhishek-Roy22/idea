<?php

test('it belongs to a user', function () {
    $idea = \App\Models\Idea::factory()->create();
    expect($idea->user)->toBeInstanceOf(\App\Models\User::class);
});

test('it can have steps', function () {
    $idea = \App\Models\Idea::factory()->create();
    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'Do this things',
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});
