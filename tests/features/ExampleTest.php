<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        $user = factory(\App\User::class)->create([
            'name' => 'Wilson AH',
            'email' => 'admin@styde.net',
        ]);

        $this->actingAs($user, 'api')
                ->visit('api/user')
                ->see('Wilson AH')
                ->see('admin@styde.net');
    }
}
