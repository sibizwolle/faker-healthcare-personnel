<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsTest extends TestCase
{
    public function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new HealthCareTeams($this->faker));
    }

    public function test_it_returns_valid_location(): void
    {
        $location = $this->faker->location();

        $this->assertIsString($location);
        $this->assertEquals($location, trim($location));
    }

    public function test_it_returns_valid_team(): void
    {
        $team = $this->faker->team();

        $this->assertIsString($team);
        $this->assertEquals($team, trim($team));
    }

    public function test_it_can_prepend_location_to_team(): void
    {
        $location = $this->faker->location();
        $team = $this->faker->team($location);

        $this->assertStringContainsString($location, $team);
    }

    public function test_it_returns_valid_function_group(): void
    {
        $functionGroup = $this->faker->functionGroup();

        $this->assertIsString($functionGroup);
        $this->assertEquals($functionGroup, trim($functionGroup));
    }

    public function test_it_returns_valid_function(): void
    {
        $function = $this->faker->function();

        $this->assertIsString($function);
        $this->assertEquals($function, trim($function));
    }

    public function test_it_returns_valid_specialisation_group(): void
    {
        $specialisationGroup = $this->faker->specialisationGroup();

        $this->assertIsString($specialisationGroup);
        $this->assertEquals($specialisationGroup, trim($specialisationGroup));
    }

    public function test_it_returns_valid_specialisation(): void
    {
        $specialisation = $this->faker->specialisation();

        $this->assertIsString($specialisation);
        $this->assertEquals($specialisation, trim($specialisation));
    }

    public function test_it_returns_valid_contract_type(): void
    {
        $contractType = $this->faker->contractType();

        $this->assertIsString($contractType);
        $this->assertEquals($contractType, trim($contractType));
    }
}