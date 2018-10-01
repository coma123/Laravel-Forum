<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAUTH2 with laravel passport';
        $t2 = 'Pagination in vuejs not working correctly';
        $t3 = 'Vuejs event listeners for child components';
        $t4 = 'Laravel homestead error - undetected database';

        $d1 = [
            'title' => $t1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus suscipit quam et vulputate. Fusce massa felis, laoreet eu nisi at, gravida facilisis massa. Curabitur vel quam aliquam mi convallis congue. Sed nec mi viverra risus mollis sollicitudin. Pellentesque congue malesuada euismod. Pellentesque viverra purus pretium ex euismod, a congue libero laoreet. Nam feugiat elementum pellentesque. Donec eget libero id lectus molestie vulputate. Nulla fermentum sollicitudin sem. Donec rutrum mi magna, eget egestas dolor aliquet at. Cras porttitor dictum elit, in lobortis elit auctor sit amet. Etiam eget sapien nulla. Vestibulum vitae erat ac magna consequat dignissim non ac mauris. Phasellus sit amet dolor tincidunt, finibus magna eu, vestibulum mauris.',
            'channel_id' => 1,
            'user_id' => 2,
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus suscipit quam et vulputate. Fusce massa felis, laoreet eu nisi at, gravida facilisis massa. Curabitur vel quam aliquam mi convallis congue. Sed nec mi viverra risus mollis sollicitudin. Pellentesque congue malesuada euismod. Pellentesque viverra purus pretium ex euismod, a congue libero laoreet. Nam feugiat elementum pellentesque. Donec eget libero id lectus molestie vulputate. Nulla fermentum sollicitudin sem. Donec rutrum mi magna, eget egestas dolor aliquet at. Cras porttitor dictum elit, in lobortis elit auctor sit amet. Etiam eget sapien nulla. Vestibulum vitae erat ac magna consequat dignissim non ac mauris. Phasellus sit amet dolor tincidunt, finibus magna eu, vestibulum mauris.',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus suscipit quam et vulputate. Fusce massa felis, laoreet eu nisi at, gravida facilisis massa. Curabitur vel quam aliquam mi convallis congue. Sed nec mi viverra risus mollis sollicitudin. Pellentesque congue malesuada euismod. Pellentesque viverra purus pretium ex euismod, a congue libero laoreet. Nam feugiat elementum pellentesque. Donec eget libero id lectus molestie vulputate. Nulla fermentum sollicitudin sem. Donec rutrum mi magna, eget egestas dolor aliquet at. Cras porttitor dictum elit, in lobortis elit auctor sit amet. Etiam eget sapien nulla. Vestibulum vitae erat ac magna consequat dignissim non ac mauris. Phasellus sit amet dolor tincidunt, finibus magna eu, vestibulum mauris.',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t3)
        ];

        $d4 = [
            'title' => $t4,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus suscipit quam et vulputate. Fusce massa felis, laoreet eu nisi at, gravida facilisis massa. Curabitur vel quam aliquam mi convallis congue. Sed nec mi viverra risus mollis sollicitudin. Pellentesque congue malesuada euismod. Pellentesque viverra purus pretium ex euismod, a congue libero laoreet. Nam feugiat elementum pellentesque. Donec eget libero id lectus molestie vulputate. Nulla fermentum sollicitudin sem. Donec rutrum mi magna, eget egestas dolor aliquet at. Cras porttitor dictum elit, in lobortis elit auctor sit amet. Etiam eget sapien nulla. Vestibulum vitae erat ac magna consequat dignissim non ac mauris. Phasellus sit amet dolor tincidunt, finibus magna eu, vestibulum mauris.',
            'channel_id' => 5,
            'user_id' => 1,
            'slug' => str_slug($t4)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
