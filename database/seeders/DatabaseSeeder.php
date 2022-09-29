<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
Use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       //  \App\Models\Blog::factory(10)->create();

         //\App\Models\User::factory(5)->create();

        User::truncate();  // this function when I used, delete all datas from databases and add renew datas which you add into databases.
        Post::truncate();
      
        Category::truncate();

        $user = User::factory()->create();

       /* $user = User::create([
            'name' => 'Hasan',
            'username' => 'Hasan',
            'email' => 'hsmusayev@gmail.com',
            'password' => Hash::make('hesen123')

        ]); */

        $drama = Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);
        $fantasy = Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);
        $action = Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        $comedy = Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        $romantic = Category::create([
            'name' => 'Romantic',
            'slug' => 'romantic'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $action->id,
            'title' => 'House of the Dragon',
            'slug' => 'houseofthedragon',
         
            'excerpt' => 'House of the Dragon tells the story of an internal succession war within House Targaryen at the height of its power, 172 years before the birth of Daenerys Targaryen.',
            'body' => 'House of the Dragon is an American fantasy drama television series. A prequel to Game of Thrones (2011–2019), it is the second show in the franchise, created by George R. R. Martin and Ryan Condal for HBO. Both series are based on the A Song of Ice and Fire novels by Martin. Condal and Miguel Sapochnik are the showrunners. Based on parts of the novel Fire & Blood, the series is set about 200 years before the events of Game of Thrones, and 172 years before the birth of Daenerys Targaryen. It portrays the beginning of the end of House Targaryen, the events leading up to and covering the Targaryen war of succession, known as the "Dance of the Dragons".House of the Dragon received a straight-to-series order in October 2019, with casting beginning in July 2020 and principal photography starting in April 2021 in the United Kingdom. The series premiered on August 21, 2022, with the first season consisting of ten episodes. Five days after its premiere, the series was renewed for a second season. Sapochnik departed as showrunner after the first season, leaving Condal to serve as the sole showrunner for the second season.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $fantasy->id,
            'title' => 'The Sandman',
            'slug' => 'thesandman',
            'excerpt' => 'Upon escaping after decades of imprisonment by a mortal wizard, Dream, the personification of dreams, sets about to reclaim his lost equipment.',
            'body' => 'A wizard attempting to capture Death to bargain for eternal life traps her younger brother Dream instead. Fearful for his safety, the wizard kept him imprisoned in a glass bottle for decades. After his escape, Dream, also known as Morpheus, goes on a quest for his lost objects of power.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $drama->id,
            'title' => 'The Whale',
            'slug' => 'thewhale',
  
            'excerpt' => 'A reclusive English teacher living with severe obesity attempts to reconnect with his estranged teenage daughter for one last chance at redemption.',
            'body' => "The Whale is a 2022 American psychological drama film directed by Darren Aronofsky, from a screenplay written by Samuel D. Hunter, based on Hunter's 2012 play of the same name.[3] The film stars Brendan Fraser, Sadie Sink, Hong Chau, Samantha Morton, and Ty Simpkins.The Whale premiered at the 79th Venice International Film Festival on September 4, 2022, and is scheduled to be theatrically released in the United States on December 9, 2022 by A24. The film has received generally positive reviews."
        ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $drama->id,
            'title' => 'The Shawshank Redemption',
       
            'slug' => 'theshawshankredemption',
            'excerpt' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'body' => "Chronicles the experiences of a formerly successful banker as a prisoner in the gloomy jailhouse of Shawshank after being found guilty of a crime he did not commit. The film portrays the man's unique way of dealing with his new, torturous life; along the way he befriends a number of fellow prisoners, most notably a wise long-term inmate named Red."
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $drama->id,
            'title' => 'Fight Club',
      
            'slug' => 'fightclub',
            'excerpt' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.',
            'body' => "A nameless first person narrator (Edward Norton) attends support groups in attempt to subdue his emotional state and relieve his insomniac state. When he meets Marla (Helena Bonham Carter), another fake attendee of support groups, his life seems to become a little more bearable. However when he associates himself with Tyler (Brad Pitt) he is dragged into an underground fight club and soap making scheme. Together the two men spiral out of control and engage in competitive rivalry for love and power."
        ]);

       
    }
}
