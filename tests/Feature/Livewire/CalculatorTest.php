<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Calculator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Calculator::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function it_should_add_a_new_number_to_the_math()
    {
        Livewire::test(Calculator::class)
            ->set('math', '')
            ->call('addMath', '2')
            ->assertSet('math', '2')
            ->call('addMath', '4')
            ->assertSet('math', '24');
    }

    /** @test */
    public function it_should_add_an_operator_to_the_math()
    {
        Livewire::test(Calculator::class)
            ->set('math', '')
            ->call('addMath', '2')
            ->assertSet('math', '2')
            ->call('operation', '+')
            ->assertSet('math', '2+')
            ->call('addMath', '4')
            ->assertSet('math', '2+4');
    }
}
