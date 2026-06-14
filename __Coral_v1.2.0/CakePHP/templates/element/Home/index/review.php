<?php
$review = [
    [
        'img' => 'assets/images/team/1.jpg', 
        'name' => 'Calvin Carlo',
        'title' => 'Manager',
        'title1' => 'Creativity',
        'desc' => "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.",
    ],
    [
        'img' => 'assets/images/team/2.jpg', 
        'name' => 'Carl Oliver',
        'title' => 'Manager',
        'title1' => 'Modern',
        'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!",
    ],
    [
        'img' => 'assets/images/team/3.jpg', 
        'name' => 'Barbara McIntosh',
        'title' => 'Manager',
        'title1' => 'Social Marketing',
        'desc' => "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.",
    ],
    [
        'img' => 'assets/images/team/4.jpg', 
        'name' => 'Janisha Doll',
        'title' => 'Manager',
        'title1' => 'Digital Marketing',
        'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.",
    ],
    [
        'img' => 'assets/images/team/5.jpg', 
        'name' => 'Esther Howard',
        'title' => 'Manager',
        'title1' => 'SEO',
        'desc' => "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.",
    ],
    [
        'img' => 'assets/images/team/6.jpg', 
        'name' => 'Joshua William',
        'title' => 'Manager',
        'title1' => 'Classic',
        'desc' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.",
    ]
];
?>

<?php foreach ($review as $item): ?>
    <div class="tiny-slide">
        <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
            <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-0"><?= h($item['title1']) ?></h6>

                <ul class="list-unstyled mb-0 text-warning">
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>

            <p class="text-muted fst-italic mt-2">" <?= h($item['desc']) ?> "</p>

            <div class="d-flex align-items-center">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="avatar avatar-small rounded-pill shadow" alt="">
                <div class="ms-2">
                    <h6 class="text-dark small mb-0"><?= h($item['name']) ?></h6>
                    <small class="text-muted d-block"><?= h($item['title']) ?></small>
                </div>
            </div>

            <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
        </div>
    </div>
<?php endforeach; ?>