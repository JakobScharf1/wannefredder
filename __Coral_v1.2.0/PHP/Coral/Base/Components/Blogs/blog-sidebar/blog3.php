<?php
$blogs = [
    [
        'id' => 1,
        'img' => '/images/blog/1.jpg', 
        'name' => 'Coral', 
        'title' => "Utilizing mobile technology in the field",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 2,
        'img' => '/images/blog/2.jpg', 
        'name' => 'Coral', 
        'title' => "Success Story: Businessman in Harlem",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 3,
        'img' => '/images/blog/3.jpg', 
        'name' => 'Coral', 
        'title' => "How Does Marketing Automation Help Lead",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 4,
        'img' => '/images/blog/4.jpg', 
        'name' => 'Coral', 
        'title' => "Working from home? Let's get started.",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 5,
        'img' => '/images/blog/5.jpg', 
        'name' => 'Coral', 
        'title' => "The Ultimate Success Formula - How?",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 6,
        'img' => '/images/blog/6.jpg', 
        'name' => 'Coral', 
        'title' => "The Major Differences Between SEO & Local SEO",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 7,
        'img' => '/images/blog/7.jpg', 
        'name' => 'Coral', 
        'title' => "Building intelligent transportation systems",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 8,
        'img' => '/images/blog/8.jpg', 
        'name' => 'Coral', 
        'title' => "12 Questions to Ask Before Hiring a SEO Agency",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 9,
        'img' => '/images/blog/9.jpg', 
        'name' => 'Coral', 
        'title' => "How a Social Media Audit Can Help You",
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ]
];
?>

<?php foreach ($blogs as $item): ?>
    <div class="col-lg-6 col-12">
        <div class="blog position-relative overflow-hidden shadow rounded p-4">
            <div class="position-relative">
                <div class="blog-image position-relative overflow-hidden rounded shadow">
                    <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="">
                </div>

                <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                    <a href="" class="badge bg-primary"><?php echo $item['name']; ?></a>
                </div>
            </div>

            <div class="pt-4">
                <a href="blog-standard-post.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-dark title h5"><?php echo $item['title']; ?></a>

                <p class="text-muted my-2"><?php echo $item['desc']; ?></p>

                <a href="blog-standard-post.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>