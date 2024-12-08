<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Contact\CreateContact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateContactTest extends TestCase
{
    /** @test */
    public function component_exists_on_the_page()
    {
        $this->get('/contact/create')
            ->assertSeeLivewire(CreateContact::class);
    }
}