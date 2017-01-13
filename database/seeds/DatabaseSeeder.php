<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Department;
use App\Event;
use App\Score;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        $this->call(DepartmentsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder {
	public function run() {

	}
}

class DepartmentsTableSeeder extends Seeder {
	public function run() {
		Department::create([
			'id' => 1,
			'department_name' => 'CSE',
			'score' => 0
		]);

		Department:: create([
			'id' => 2,
			'department_name' => 'EEE',
			'score' => 0
		]);
	}
}

class EventsTableSeeder extends Seeder {
	public function run() {
		Event::create([
			'event_id' => 1,
			'name' => 'Table Tennis',
			'day' => '1',
			'start_time' => '2017-02-15 07:00:00',
			'venue' => 'SAC'
		]);

		Event::create([
			'event_id' => 2,
			'name' => 'Chess',
			'day' => '1',
			'start_time' => '2017-02-15 15:00:00',
			'venue' => 'SAC'
		]);

		Event::create([
			'event_id' => 3,
			'name' => 'Volleyball',
			'day' => '2',
			'start_time' => '2017-02-16 08:00:00',
			'venue' => 'NSO Ground'
		]);

		Event::create([
			'event_id' => 4,
			'name' => 'Basketball',
			'day' => '3',
			'start_time' => '2017-02-17 16:00:00',
			'venue' => 'Basketball Court'
		]);
	}
}

class ScoresTableSeeder extends Seeder {
	public function run() {
		Score::create([
			'department_id' => 1,
			'event_id' => 1,
			'score' => 10
		]);
	}
}