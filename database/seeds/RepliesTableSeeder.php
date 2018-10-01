<?php

use Illuminate\Database\Seeder;
use App\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Quisque eleifend nibh libero, dignissim pellentesque ex mollis et. Nunc dignissim sed metus eget pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus semper vehicula consequat. In at lorem arcu. Praesent pellentesque accumsan odio, non condimentum nulla vestibulum iaculis. Pellentesque dolor ligula, tincidunt id enim vitae, commodo cursus neque. Proin tincidunt vel tortor et maximus. Nulla mattis eros ut faucibus suscipit. Quisque convallis ultrices dui id posuere. Quisque elementum, dolor in suscipit venenatis, tortor magna ullamcorper turpis, non vestibulum metus elit a ante. Pellentesque eget ligula a ligula porttitor venenatis ut at lorem. Praesent id maximus sapien. Pellentesque blandit condimentum ipsum. Nunc eleifend nec ante vel mollis.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Quisque eleifend nibh libero, dignissim pellentesque ex mollis et. Nunc dignissim sed metus eget pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus semper vehicula consequat. In at lorem arcu. Praesent pellentesque accumsan odio, non condimentum nulla vestibulum iaculis. Pellentesque dolor ligula, tincidunt id enim vitae, commodo cursus neque. Proin tincidunt vel tortor et maximus. Nulla mattis eros ut faucibus suscipit. Quisque convallis ultrices dui id posuere. Quisque elementum, dolor in suscipit venenatis, tortor magna ullamcorper turpis, non vestibulum metus elit a ante. Pellentesque eget ligula a ligula porttitor venenatis ut at lorem. Praesent id maximus sapien. Pellentesque blandit condimentum ipsum. Nunc eleifend nec ante vel mollis.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Quisque eleifend nibh libero, dignissim pellentesque ex mollis et. Nunc dignissim sed metus eget pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus semper vehicula consequat. In at lorem arcu. Praesent pellentesque accumsan odio, non condimentum nulla vestibulum iaculis. Pellentesque dolor ligula, tincidunt id enim vitae, commodo cursus neque. Proin tincidunt vel tortor et maximus. Nulla mattis eros ut faucibus suscipit. Quisque convallis ultrices dui id posuere. Quisque elementum, dolor in suscipit venenatis, tortor magna ullamcorper turpis, non vestibulum metus elit a ante. Pellentesque eget ligula a ligula porttitor venenatis ut at lorem. Praesent id maximus sapien. Pellentesque blandit condimentum ipsum. Nunc eleifend nec ante vel mollis.'
        ];

        $r4 = [
            'user_id' => 4,
            'discussion_id' => 4,
            'content' => 'Quisque eleifend nibh libero, dignissim pellentesque ex mollis et. Nunc dignissim sed metus eget pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus semper vehicula consequat. In at lorem arcu. Praesent pellentesque accumsan odio, non condimentum nulla vestibulum iaculis. Pellentesque dolor ligula, tincidunt id enim vitae, commodo cursus neque. Proin tincidunt vel tortor et maximus. Nulla mattis eros ut faucibus suscipit. Quisque convallis ultrices dui id posuere. Quisque elementum, dolor in suscipit venenatis, tortor magna ullamcorper turpis, non vestibulum metus elit a ante. Pellentesque eget ligula a ligula porttitor venenatis ut at lorem. Praesent id maximus sapien. Pellentesque blandit condimentum ipsum. Nunc eleifend nec ante vel mollis.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
