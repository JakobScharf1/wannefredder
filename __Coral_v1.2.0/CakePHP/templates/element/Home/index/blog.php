<?php
$blogs = [
    [
        'id' => 1,
        'img' => 'assets/images/blog/1.jpg', 
        'name' => 'Coral', 
        'title' => 'Utilizing mobile technology in the field',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 2,
        'img' => 'assets/images/blog/2.jpg', 
        'name' => 'Coral', 
        'title' => 'Success Story Businessman in Harlem',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'id' => 3,
        'img' => 'assets/images/blog/3.jpg', 
        'name' => 'Coral', 
        'title' => 'How Does Marketing Automation Help Lead',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ]
];
?>

<?php foreach ($blogs as $item): ?>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="blog position-relative overflow-hidden shadow rounded p-4">
            <div class="position-relative">
                <div class="blog-image position-relative overflow-hidden rounded shadow">
                    <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid" alt="">
                </div>

                <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                    <a href="" class="badge bg-primary"><?= h($item['name']) ?></a>
                </div>
            </div>

            <div class="pt-4">
                <a href="<?= $this->Url->build('/blog-standard-post/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="text-dark title h5"><?= h($item['title']) ?></a>

                <p class="text-muted my-2"><?= h($item['desc']) ?></p>

                <a href="<?= $this->Url->build('/blog-standard-post/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>