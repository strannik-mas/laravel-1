<?php

use Illuminate\Database\Seeder;
//use DB;
use App\Article;

class ArticlesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //1 способ
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)', [
            'Blog post',
            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex fugiat beatae officia sit maxime blanditiis deserunt cupiditate eligendi eveniet.</p>',
            'https://givotniymir.ru/wp-content/uploads/2016/03/chernaya-pantera-obraz-zhizni-i-sreda-obitaniya-chernoj-pantery-2.jpg'
        ]);

        //2 способ
        DB::table('articles')->insert([
            [
                'name' => 'second blog',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, aperiam, mollitia, delectus, earum quis incidunt velit fugiat voluptas repudiandae veniam eveniet commodi esse laudantium. Rem eum molestias sed dicta cumque!',
                'img' => 'pic2.jpg'
            ],
            [
                'name' => "Sample blog post 2",
                'text' => "<p class='blog-post-meta'>January 1, 2014 by <a href='#'>Mark</a></p>

					            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
					            <hr>
					            <p>Cum sociis natoque penatibus et magnis <a href='#'>dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
					            <blockquote>
					              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					            </blockquote>
					            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
					            <h2>Heading</h2>
					            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					            <h3>Sub-heading</h3>
					            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					            <pre><code>Example code block</code></pre>
					            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
					            <h3>Sub-heading</h3>
					            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					            <ul>
					              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
					              <li>Donec id elit non mi porta gravida at eget metus.</li>
					              <li>Nulla vitae elit libero, a pharetra augue.</li>
					            </ul>
					            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
					            <ol>
					              <li>Vestibulum id ligula porta felis euismod semper.</li>
					              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
					              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
					            </ol>
					            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>",
                'img' => 'pic3.jpg'
            ]
        ]);
        
        //3 способ
        Article::create([
            'name' => 'second blog2',
            'text'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iusto laboriosam necessitatibus repellendus quam enim excepturi dicta modi! Itaque, iure.',
            'img'=>'pic4.jpg'
        ]);
    }

}
