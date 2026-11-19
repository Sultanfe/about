<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * The About page must load successfully and list all five team members.
     *
     * NOTE: this project does not use SQLite, so the surrounding suite
     * expects a MySQL database. To run this test, configure a MySQL
     * connection in your .env (DB_CONNECTION=mysql), run your migrations,
     * then execute:
     *
     *     php artisan test --filter=test_about_page_loads_and_lists_all_five_members
     */
    public function test_about_page_loads_and_lists_all_five_members(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);

        $memberNames = [
            'Feroz Mahmud',
            'Shafayet Al Hossain',
            'Remon Islam',
            'Masrurul Hasan Maktum',
            'Golam Rabbani',
        ];

        foreach ($memberNames as $name) {
            $response->assertSee($name);
        }
    }
}
