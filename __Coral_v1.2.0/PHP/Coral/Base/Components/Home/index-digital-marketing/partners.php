<?php
$partners = [
    [
        'img' => '/images/client/amazon.svg', 
    ],
    [
        'img' => '/images/client/google.svg', 
    ],
    [
        'img' => '/images/client/lenovo.svg', 
    ],
    [
        'img' => '/images/client/paypal.svg', 
    ],
    [
        'img' => '/images/client/shopify.svg', 
    ],
    [
        'img' => '/images/client/spotify.svg', 
    ],
    [
        'img' => '/images/client/amazon.svg', 
    ],
    [
        'img' => '/images/client/google.svg', 
    ],
    [
        'img' => '/images/client/lenovo.svg', 
    ],
    [
        'img' => '/images/client/paypal.svg', 
    ],
    [
        'img' => '/images/client/shopify.svg', 
    ],
    [
        'img' => '/images/client/spotify.svg', 
    ]
];
?>

<?php foreach ($partners as $item): ?>
    <li class="list-inline-item px-sm-5 px-4 mb-0">
        <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid img-white" alt="">
    </li>
<?php endforeach; ?>