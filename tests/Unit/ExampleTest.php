<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $this->assertTrue(true);

        // Given I have two records in the database that are posts, // and each one is posted one month apart
        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
          'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        // When I perform this action
        $posts = Post::archives();
        // Check the format of results
        // dd($posts);

        // The response should be in this format
        $this->assertEquals([
            [
              "year" => $first->created_at->format('Y'),
              "month" => $first->created_at->format('F'),
              "published" => 1
            ],
            [
              "year" => $second->created_at->format('Y'),
              "month" => $second->created_at->format('F'),
              "published" => 1
            ]
        ], $posts);
    }
}
